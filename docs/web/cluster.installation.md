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

| 7.6. Installing Momentum Clustering |
| [Prev](cluster.replication.php)  | Chapter 7. Clustering |  [Next](cluster.operations.php) |

## 7.6. Installing Momentum Clustering

### 7.6.1. Installing and Configuring the Momentum Cluster Manager

**7.6.1.1. Setting up `eccluster.conf`**
```
Networking {
  Bus = "4803"
  Cluster_Group = "ec_cluster"
}

Logs {
  Logfile = "/var/eccluster/logs/%Y/%m/%d/%{l}/%{n}"
  Max_Open = "128"
  Max_Idle = "10"
  File_Mode = "0640"
  Dir_Mode = "0755"
  Subscriber = "master"
  Control_Cache = "/var/log/eccluster/control.cache"
}

Config {
  Repository = "/var/eccluster/config"
}

Control_Listener = (
  /tmp/2026
  "*:2026" [
    0.0.0.0/0 = ( DIGEST-MD5
                  [ uri = "digest:///opt/ecelerity/etc/console_passwd" ]
                )
  ]
)
```

`eccluster.conf` configures the Momentum Cluster Manager, **eccmgr**. This section will briefly cover the important configuration options; the full set are documented in [eccluster.conf](eccluster.conf.php "eccluster.conf").

**7.6.1.1.1. Networking**

<dl class="variablelist">

<dt>Bus</dt>

<dd>

The group communication messaging bus is referred to as "Spread." The `Bus` option is the port on which Spread is listening. This should match the port following the broadcast address in the `mbus.conf` file described in the next section, as well as the mbus_daemon parameter in the cluster configuration in `ecelerity.conf`.

</dd>

<dt>Cluster_Group</dt>

<dd>

This describes the group on which clustering will be managed. This is a short textual string and must match the cluster_group parameter in the cluster configuration in `ecelerity.conf`.

</dd>

</dl>

**7.6.1.1.2. Logs**

<dl class="variablelist">

<dt>Logfile</dt>

<dd>

This describes the full pathname of the logfile to be written. As eccmgr is capable of writing log files into several distinct locations, a simple interpolation set is provided. All of the POSIX strftime macros are supported (see the POSIX strftime standard) as well as two special interpolations. %{n} will interpolate to the name of the Momentum cluster node that generated the log line in question. %{l} will interpolate to the name of the log as named in the logs section of the cluster configuration in the `ecelerity.conf`.

</dd>

<dt>Control_Cache</dt>

<dd>

The name of the cache file storing asynchronous responses to clusterwide Momentum inquiries.

</dd>

</dl>

**7.6.1.1.3. Config**

<dl class="variablelist">

<dt>Repository</dt>

<dd>

The full path to the Subversion repository that will house cluster-wide configuration information.

</dd>

</dl>

**7.6.1.1.4. Control_Listener**

The Control_Listener configures the end-point(s) on which Momentum should listen for incoming control connections made via ec_console or the web console. Configuration of this section is identical in syntax to [the section called “Control_Listener”](ecelerity.conf.php#ecelerity.conf.control_listener "Control_Listener"), with the exception that the Unix socket and TCP port default to 2026 instead of 2025.

One critical difference for establishing an initial config is that the authentication realm for **eccmgr** is "Momentum Command Center", while the realm for Momentum is "Momentum Console". Use the `-r` flag to **ec_md5passwd** to specify an alternate realm:

/opt/ecelerity/bin/ec_md5passwd -r "Momentum Command Center" \
  -f /opt/ecelerity/etc/console_passwd *`ecadmin`* *`testing`*

**Configuration Change. ** As of version 3.0 the authentication realm for **eccmgr** is "Momentum Console", making it easier to share password files between the nodes.

Another difference between a cluster configuration and a stand-alone configuration is that you **cannot** use **ec_uipasswd** to add users to the console. You must use **ec_md5passwd**. A description of using this command follows.

**Adding Users**

Use the **/opt/ecelerity/bin/ec_md5passwd -f /opt/ecelerity/etc/console_passwd**                                      command to add another user to the console or to change the password of an existing user. Run this command and you should see output similar to the following. (Enter a username and password when prompted.)

Username: *`fred`*
Please enter password for *`fred`*
Password:
Please enter the password again
Password:
Password updated.

Do this and a new user will be added or an existing user updated.

### Note

If you have forgotten your password, use the **ec_md5passwd** command to create a new password. You do not have to supply your original password in order to change your password.

For more information about the command **ec_md5passwd** see [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd").

**7.6.1.2. Configuring the messaging bus**

Momentum's clustering solution makes heavy use of a group communication messaging bus called "Spread." Spread provides a mechanism for distributing data to various nodes in a networked configuration. Without this messaging bus, the nodes and the cluster manager cannot communicate and all cluster tasks will cease to operate (DuraVIP™, logging, and replication).

The cluster manager node and each Momentum node will pull the configuration from **eccmgr** on a periodic basis (once per minute) and if the configuration has changed, the messaging bus will shut itself down and restart operations under the new configuration.

In order to start the messaging bus, an initial configuration must be placed in the configuration repository managed by **eccmgr** using the `mbuscfg` tool.

```
DebugFlags = { EXIT CONFIGURATION }
RuntimeDir = /var/run/spread
EventLogFile = /var/log/spread/mainlog
EventTimeStamp
DangerousMonitor = false

Spread_Segment  10.0.0.255:4803 {         # 10.0.0.255 is the bcast
       manager-0-1          10.0.0.91     # management node
       ec-0-1               10.0.0.191    # ecelerity node 1
       ec-0-2               10.0.0.192    # ecelerity node 2
       ec-0-3               10.0.0.193    # ecelerity node 3
       ec-0-4               10.0.0.194    # ecelerity node 4
       ec-0-5               10.0.0.195    # ecelerity node 5
       ec-0-6               10.0.0.196    # ecelerity node 6
}
```

The above configuration listing illustrates a standard configuration. In the above configuration, 10.0.0.255 is the network broadcast address. Inside the Spread_Segment declaration we see each participating node. The node name should match the output of the **hostname** command on that node. If it does not, you must specify the hostname using the `-n` switch to [mbusd_monitor](executable.mbusd_monitor.php "mbusd_monitor"). The IP interface on which the node's participating address resides must have the same broadcast address as this Spread_Segment, as reported by **ifconfig**. Also ensure that each node has the appropriate directories described in `RuntimeDir` and `EventLogFile`, and that they are owned by user and group "ecspread".

A file like the above should be constructed representing your cluster topology in a file called `/opt/ecelerity/etc/mbus.conf` (see [mbus.conf](mbus.conf.php "mbus.conf")). Once complete, it should be registered into the configuration repository via: **/opt/ecelerity/bin/mbuscfg -s /opt/ecelerity/etc/mbus.conf** 

Once this configuration file has been registered, create an `/opt/ecelerity/etc/eccluster-client.conf` file on the cluster manager containing the following information and distribute it to each of the nodes (10.0.0.91 should be replaced with the IP address of your Momentum cluster manager node):

```
ENABLED=TRUE
ECCMGR=10.0.0.91:2026
CONFIG=boot
```

See [eccluster-client.conf](eccluster-client.conf.php "eccluster-client.conf").

**7.6.1.3. Establishing a default node configuration**

In order to establish a new default boot configuration for Momentum nodes within the cluster:

*   **/opt/ecelerity/3rdParty/bin/svn mkdir file:///var/eccluster/config/configs/boot** 

*   **/opt/ecelerity/3rdParty/bin/svn co file:///var/eccluster/config/configs/boot** 

*   **cd boot** 

*   **vi default**         (or use your favorite editor to create an complete Momentum configuration)

*   **/opt/ecelerity/3rdParty/bin/svn add default** 

*   **/opt/ecelerity/3rdParty/bin/svn commit -m "initial checkin" default** 

**7.6.1.4. Restart all newly configured services**

On the cluster management node:

*   **/opt/ecelerity/bin/mbusd_monitor restart** 

*   **/opt/ecelerity/bin/eccmgr_ctl restart** 

On each cluster node:

*   **/opt/ecelerity/bin/mbusd_monitor restart** 

*   **/opt/ecelerity/bin/ec_ctl restart** 

| [Prev](cluster.replication.php)  | [Up](cluster.php) |  [Next](cluster.operations.php) |
| 7.5. Clustered Data Replication  | [Table of Contents](index.php) |  7.7. Using the Momentum Cluster Manager |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)