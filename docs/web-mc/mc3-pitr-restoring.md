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

| A.3. Restoring Normal Operations After Database Fail Over |
| [Prev](mc3-pitr-failing-over.php)  | Appendix A. Point-In-Time Recovery (PITR) for Message Central |  [Next](mc-glossary.php) |

## A.3. Restoring Normal Operations After Database Fail Over

The following diagram illustrates an example server and data center layout that can successfully recover from both database as well as data center outages:

<a name="figure-pitr1"></a>

**Figure A.1. Initial setup**

![Initial setup](images/pitr1.jpg)

In this configuration, there is one master (`MC-DB-A`), three slaves (`MC-DB-C, MC-DB-D, MC-DB-F`) and two backups (`MC-DB-B, MC-DB-E`). The WC Data Center master, `MC-DB-A` ships the following data:

1.  snapshot data to MC-DB-B over the LAN

2.  PITR data to MC-DB-C over the LAN

3.  PITR data to MC-DB-D over the WAN

4.  snapshot data to MC-DB-E over the WAN

5.  PITR data to MC-DB-F over the WAN

It's important to note that while the PITR data is incremental so that the amount of data that must be moved across the relevant network links is related only to the amount of activity in the database, the snapshot data size is related to the overall database size which will continue to grow at a steady rate. Copying that much data over a LAN should present no problems, but sending it over a WAN could potentially interfere with other traffic between data centers and could eventually even saturate the available bandwidth, so planning ahead and monitoring the bandwidth usage is essential.

Based on [Figure A.1, “Initial setup”](mc3-pitr-restoring.php#figure-pitr1 "Figure A.1. Initial setup"), the recovery scenario assumes the catastrophic hardware failure of MC-DB-A and the subsequent fail over and manual promotion to master status of MC-DB-D.

The assumption will be made that after fail over has completed from MC DB A in data center WC to MC DB B in data center EC, the next step is to get a replacement for MC DB A up and running again in data center WC.

### A.3.1. System Status Summary

After the promotion of MC-DB-D to master status, MC-DB-E contains the most recent snapshot of MC-DB-A, and MC-DB-F is an additional warm spare copy of MC-DB-A to which you can fail over if MC-DB-D happens to also become unavailable. The updated diagram of available resources is as shown below:

<a name="figure-pitr2"></a>

**Figure A.2. Backup as master**

![Backup as master](images/pitr2.jpg)
**A.3.1.1. Short-Term Warm Spare Operation**

At this point, you can configure Data Center EC so it performs the same functions Data Center WC did before the initial failure, with MC-DB-D shipping snapshots to MC-DB-E and PITR data to MC-DB-F. This is a good option to choose if Data Center WC, or another location besides Data Center EC will not be available in the near future to take over the master role from the Secondary.

If this step is performed, all secondary servers in [Figure A.2, “Backup as master”](mc3-pitr-restoring.php#figure-pitr2 "Figure A.2. Backup as master") become Primary since the servers (MC-DB-E, MC-DB-F) will be actively receiving data from MC-DB-D, the acting Primary.

If this action is not taken and MC-DB-D fails, any new data generated between the time MC-DB-A failed and MC-DB-D was promoted will be lost.

### A.3.2. Bootstrapping and Promoting A New Data Center

In this scenario, `Data Center WC` has become unavailable. An alternative `Data Center WA` becomes available.

In this situation, the version of Message Central installed on the running nodes should be installed on the replacement servers (MC-DB-A1, MC-DB-B1, MC-DB-C1). Message Central services should not be started just yet, and the database should be stopped with **/etc/init.d/msyspg stop**      since it always starts up after installation.

The high level strategy is to:

1.  configure MC-DB-D to replicate into MC-DB-A1 and MC-DB-C1

2.  artificially fail MC-DB-D over to MC-DB-A1

3.  configure MC-DB-D to be the master

First set up the new data center with two slaves and a backup, like so:

<a name="figure-pitr3"></a>

**Figure A.3. New data center**

![New data center](images/pitr3.jpg)

However, the remaining dependencies must be installed on the new servers.

### A.3.3. Preparing to rsync Data

Follow the instructions given in [Section A.1.2, “Create Working Directories”](mc3-pitr.php#mc3-pitr-working-directories "A.1.2. Create Working Directories") and [Section A.1.3, “rsync Setup”](mc3-pitr.php#mc3-pitr-rsync "A.1.3. rsync Setup") to create directories and set up rsync.

Make sure to update the `hosts allow` parameter so it contains the IP of the acting master, MC-DB-D. Now the master can push files onto the slaves.

### A.3.4. MC-DB-D Configuration

The acting master is not currently configured to ship snapshots or PITR data anywhere, so update the PostgreSQL configuration on MC-DB-D so that it automatically pushes the necessary files over to the slaves in the new data center.

This process is performed exactly as described in [Section A.1.4, “Master Database Configuration”](mc3-pitr.php#mc3-pitr-master "A.1.4. Master Database Configuration").

### A.3.5. Slave Database Bootstrap

At this point, assuming no errors were encountered, PITR data is successfully being shipped to the slaves. The next step is to set the slaves up to make use of that data. To jump start the slave databases, first make a backup of the master.

This process is performed exactly as described in [Section A.1.5, “Slave Database Bootstrap”](mc3-pitr.php#mc3-pitr-slave "A.1.5. Slave Database Bootstrap").

### A.3.6. Slave Database Configuration

Now that there is a snapshot of the master's `msyspg` directory and a copy of the original `postgresql.conf`, without the extra archive parameters added on the master. Before starting the slave database back up, further configuration changes are required.

This process is performed exactly as described in [Section A.1.6, “Slave Database Configuration”](mc3-pitr.php#mc3-pitr-slave-config "A.1.6. Slave Database Configuration")

### A.3.7. System Status Summary

Now circumstances are almost the exact opposite to what they were before MC-DB-A failed. The following list gives a high level summary of the actions required:

1.  configure MC-DB-D to replicate into MC-DB-A1 and MC-DB-C1

2.  artificially fail MC-DB-D over to MC-DB-A1

3.  configure MC-DB-D to be the master

Item number 1 is complete. Item number 2 can be completed in the same way as the fail over from the failed MC-DB-A, as described In [Section A.2, “Failing Over to a Slave Database”](mc3-pitr-failing-over.php "A.2. Failing Over to a Slave Database"). Item 3 follows exactly the same process as [Section A.3.4, “MC-DB-D Configuration”](mc3-pitr-restoring.php#mc3-pitr-update-new-master "A.3.4. MC-DB-D Configuration"), the goal being to end up as shown in the following diagram:

<a name="figure-pitr4"></a>

**Figure A.4. Final state**

![Final state](images/pitr4.jpg)

| [Prev](mc3-pitr-failing-over.php)  | [Up](mc3-pitr.php) |  [Next](mc-glossary.php) |
| A.2. Failing Over to a Slave Database  | [Table of Contents](index.php) |  Glossary |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)