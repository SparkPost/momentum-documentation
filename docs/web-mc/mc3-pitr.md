Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| Appendix A. Point-In-Time Recovery (PITR) for Message Central |
| [Prev](mc3.custom.application.create.php)  |   |  [Next](mc3-pitr-failing-over.php) |

## Point-In-Time Recovery (PITR) for Message Central

**Table of Contents**

<dl class="toc">

<dt>[A.1\. Replicating the Message Central Database](mc3-pitr.php#mc3-pitr-setup)</dt>

<dt>[A.2\. Failing Over to a Slave Database](mc3-pitr-failing-over.php)</dt>

<dt>[A.3\. Restoring Normal Operations After Database Fail Over](mc3-pitr-restoring.php)</dt>

</dl>

This document describes setting up Point In Time Recovery (PITR) for PostgreSQL in the Message Central environment with the goal of creating 'warm spare'/failover databases. This document shows how to maintain these backups and how to manually activate them in the event that the Message Central database server suffers an outage.

### Note

The scripts used in the PITR process are available as of version 3.2 as part of the msys-pg-devel package and are found in the `/opt/msys/3rdParty/omnipitr/bin` directory. Using these scripts you can backup a Message Central database and, in the event of a database outage, fail over to a backup database. If these scripts are not installed on your system, you can install them by installing the msys-pg-devel-*`version`*.rhel5.x86_64.rpm file.

For simplicity, the machines in this example are single node installations with all Message Cental Services running on one server, but the setup process is exactly the same for a database-only node.

When setting up PITR, redundancy is being added to the system. The reason for the added redundancy is important to consider, since that will influence how certain things are configured. PITR can be an effective part of a recovery plan for several different failure scenarios, all of which can be handled using this guide, though perhaps with small modifications.

The first decision to make is how comprehensive the disaster recovery plan will be. Will it involve multiple, geographically diverse data centers? Will recoverable events include things like `TRUNCATE TABLE users;`? Will there be a dedicated backup server, in addition to the warm spare(s)? Once these questions are answered, then PITR can be tailored to fit those needs.

For more information about PITR see [Continuous Archiving and Point-In-Time Recovery (PITR)](http://www.postgresql.org/docs/8.4/interactive/continuous-archiving.html).

## A.1. Replicating the Message Central Database

This section documents the creation of slave databases that replicate the Message Central database.

### A.1.1. The Backup Scenario

This example in this sceneario consists of three servers, one master and two slaves. If you are currently installing Message Central, do not start up the services when the Message Central installation completes otherwise the logs will fill up with error messages as configuration changes are made. If you have already installed Message Central, stop the services. For a description of the different services see ["Daemons/Services](https://support.messagesystems.com/docs/web-mc/mc-start-services.php).

### A.1.2. Create Working Directories

First create working directories for files. The ownership of these directories is important, otherwise the archive step on the master or the restore step on the slaves will fail.

On the master:

```
shell> mkdir -p /var/log/pe2/omnipitr/state
shell> chown -R msyspg:msyspg /var/log/pe2/omnipitr
shell> mkdir /var/tmp/omnipitr
shell> chown msyspg:msyspg /var/tmp/omnipitr
```

And on the slaves:

```
shell> mkdir -p /var/log/pe2/omnipitr/state
shell> mkdir -p /var/log/pe2/omnipitr/wal_archive
shell> chown -R msyspg:msyspg /var/log/pe2/omnipitr
shell> mkdir /var/tmp/omnipitr
shell> chown msyspg:msyspg /var/tmp/omnipitr
```

### A.1.3. rsync Setup

In order for replication to work effectively, you need to be able to copy files easily from the master to the slaves. This example uses an unencrypted rsync connection that is assumed to occur over a trusted network such as a LAN or VPN. Using rsync over ssh with key-based authentication can be used, but you must change several of the archiving and recovery commands accordingly.

### Note

If you are using rsync over a WAN, you must also make adjustments to your firewall and ensure that the port used by rsync is accessible.

Install and configure software on the slaves that allows accepting rsync connections.

```
shell> yum install xinetd
shell> /sbin/chkconfig --level 345 xinetd on
shell> /etc/init.d/xinetd start
```

After installing xinetd, edit the file `/etc/xinetd.d/rsync` and remove the '`disable = yes`' line. This allows xinetd to start up rsync processes on demand.

Next, create the `/etc/rsyncd.conf` file with the following contents:

uid = msyspg
gid = ecuser
use chroot = no
pid file = /var/run/rsyncd.pid
# deny everything but connections from the master
hosts deny = *
hosts allow = *`master`*

[wal_archive]
path = /var/log/pe2/omnipitr/wal_archive
read only = false
comment = WAL log storage

You will need to update the `hosts allow` parameter so it contains the IP of your master. Now the master can easily push files to the slaves.

### A.1.4. Master Database Configuration

Update the PostgreSQL configuration on the master so that it automatically pushes the necessary files over to the slaves. Edit `/var/db/msyspg/postgresql.conf` on the master adding the following lines in the archive section (search for '`archive_mode`'). The `archive_command` line should be all on one line, but has been broken up into several lines here to make it more readable.

archive_mode = on
archive_command = '/opt/msys/3rdParty/omnipitr/bin/omnipitr-archive
  -l /var/log/pe2/omnipitr/^a.log
  -s /var/log/pe2/omnipitr/state
  -db /var/log/pe2/omnipitr/backup
  -dr gzip=rsync://*`slave`*/wal_archive
  -dr gzip=rsync://*`slave`*/wal_archive
  -t /var/tmp/omnipitr/
  -v
  "%p"'
archive_timeout = 60

You will need to customize the `-dr` parameters so that they point to your slave database servers.

These settings copy files from the master to the slaves once a minute. Logs will show up on the master in `/var/log/pe2/omnipitr/`, with 'day of week' (Mon, Tue, etc) as the filename. These logs will not automatically truncate every week like the PostgreSQL logs do, so some sort of log archival process should be put in place. The -l options to the OmniPITR commands accept strftime-like formats, so `^a` (weekday) could be replaced with `^Y^m^d` (daily) to help implement whatever log archiving/retention policy is required.

After making these configuration changes and starting up the master database with **/etc/init.d/msyspg start** , the logs in `/var/db/msyspg/pg_log` and `/var/log/pe2/omnipitr` should be monitored for several minutes to make sure that there are no errors.

### A.1.5. Slave Database Bootstrap

At this point, assuming no errors were encountered, PITR data is successfully being sent to the slaves. The next step is to set the slaves up to make use of that data. To jump start the slave databases, first make a backup of the master as the `msyspg` user. To do this issue the following command:

```
shell> sudo -u msyspg
shell> cd /var/db
shell> /opt/msys/3rdParty/omnipitr/bin/omnipitr-backup-master \
  -U  msyspg                                         \
  -D /var/db/msyspg/                                 \
  -l /var/log/pe2/omnipitr/^a.log                    \
  -x /var/log/pe2/omnipitr/backup                    \
  -dl gzip=/var/tmp                                  \
  -t /var/tmp/omnipitr/                              \
  --pid-file /var/log/pe2/omnipitr-backup-master.pid \
  -v
```

This will create a compressed backup in `/var/tmp` on the master, named pitr-master-data-*`date`*.tar.gz. This command, or something like it, can be scheduled to run periodically to maintain backup snapshots of the database. In this case, it's recommended to use `-dr` to push these backups to a remote server as with the `archive_command` above, instead of `-dl` (which writes to a local copy).

### Note

Use **perldoc** to read the POD files in the `/opt/msys/3rdParty/omnipitr/doc` directory to learn more about command options.

If you are using ssh you will need to provide a username and password or generate an ssh key on the master and insert the public key into `~/.ssh/authorized_keys` on the slave.

Copy this backup file to `/var/db` on each slave.

Execute the following commands (on the slave) to bootstrap the slave database.

```
shell> /etc/init.d/msyspg stop
shell> cd /var/db
shell> cp ./msyspg/postgresql.conf ./postgresql.conf.dist
shell> mv ./msyspg/ ./msyspg.dist/
shell> tar -xzf <backup>.tar.gz
```

### A.1.6. Slave Database Configuration

A snapshot of the master's `msyspg` directory was created in [Section A.1.5, “Slave Database Bootstrap”](mc3-pitr.php#mc3-pitr-slave "A.1.5. Slave Database Bootstrap") and a copy was made of the original `postgresql.conf`, without the extra archive parameters added to the master. Further configuration is necessary before starting the slave database back up.

Before configuring the slave database to make use of PITR data, disable services that will attempt to connect to the database. These attempted connections will result in noisy error messages in `/var/db/msyspg/pg_log`.

MC installs files under `/etc/cron.d/`. The `msys-ecwebui` file will need to have its contents commented out by putting a ‘`#`’ at the beginning of each line. If you fail over to this slave, these lines will need to be uncommented for the Momentum web UI to function properly.

Create `/var/db/recovery.conf` containing the following line. (In the file, this should be all on one line, but has been broken up into several lines here to make it more readable.)

```
restore_command = '/opt/msys/3rdParty/omnipitr/bin/omnipitr-restore
  -l /var/log/pe2/omnipitr/^a.log
  -s gzip=/var/log/pe2/omnipitr/wal_archive
  -f /var/log/pe2/omnipitr/finish.recovery
  -p /var/log/pe2/omnipitr/pause.removal
  -t /var/tmp/omnipitr/
  -ep hang
  -pp /opt/msys/3rdParty/bin/pg_controldata
  -r
  -v
  %f
  %p'
```

### Note

Message Systems does not provide support for the use of any third party tools included or referenced by name within our products or product documentation; support is the sole responsibility of the third party provider.

In order to enable a window where an administrator can prevent events like `TRUNCATE TABLE users;` from propagating, the option `-w` *`seconds`* can be added to the `restore_command` line of `/var/db/recovery.conf`. This will prevent the slave from applying PITR data that it has received for the specified number of seconds.

Now copy the modified configuration files in `/var/db` to the slave's database directory and start up the database:

```
shell> cp /var/db/postgresql.conf.dist /var/db/msyspg/postgresql.conf
shell> cp /var/db/recovery.conf /var/db/msyspg
shell> /etc/init.d/msyspg start
```

Once the slave database has been started up, the logs in `/var/db/msyspg/pg_log` and `/var/log/pe2/omnipitr` should be monitored for several minutes to make sure no errors occur.

Assuming no errors were encountered, master/slave replication is now set up and running.

| [Prev](mc3.custom.application.create.php)  |   |  [Next](mc3-pitr-failing-over.php) |
| 13.2. Creating Your Own App  | [Table of Contents](index.php) |  A.2. Failing Over to a Slave Database |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)