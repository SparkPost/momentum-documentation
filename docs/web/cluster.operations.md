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

| 7.7. Using the Momentum Cluster Manager |
| [Prev](cluster.installation.php)  | Chapter 7. Clustering |  [Next](cluster.cidr_server.php) |

## 7.7. Using the Momentum Cluster Manager

### 7.7.1. Connecting via ec_console

[eccmgr_ctl](executable.eccmgr_ctl.php "eccmgr_ctl") can be used to start, stop and restart The Momentum Cluster Manager, **eccmgr**.

Once started, you can connect to **eccmgr** via [ec_console](operations.console.php "4.1. The Momentum System Console").

On Unix systems, **eccmgr** is listening at `/tmp/2026` by default. Both `eccluster.conf` and **eccmgr_ctl** need to be edited to change this default.

`shell> /opt/ecelerity/bin/ec_console /tmp/2026`

On Windows systems, one can use the following,

`shell> \opt\ecelerity\bin\ec_console \eccmgr`
### Note

Momentum is no longer supported on the Windows platform.

A successful connection will result in output similar to the following:

```
* ec_console version 2.2.2.32 r(25176)
##############################################
# eccmgr version: 2.2.2.32 r(25176)
# Copyright (c) 1999-2008 Message Systems, Inc.
# All Rights Reserved.
##############################################
```

### 7.7.2. Console Commands for eccmgr

**7.7.2.1. broadcast **

Broadcast a [console command](operations.console-commands.php "4.2. Console Commands") to the cluster.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.37.

The only safe way to do a duravip move is from the cluster console using a **broadcast** command. This guarantees that both the node that currently owns the address and the new owner will be in sync. For example:

broadcast cluster duravip move *`10.0.5.139`* to *`hostname`*

Furthermore, if there is a mismatch between the machine's hostname and the spread node name (i.e. if the hostname is fully qualified) the move will not succeed.

**7.7.2.2. retrieve **

Retrieve the responses to a broadcasted command from the cluster.

**7.7.2.3. unicast  **

Unicast a [console command](operations.console-commands.php "4.2. Console Commands") to the specified node in the cluster.

**7.7.2.4. retrieve_node  **

Retrieve the responses to a unicasted/broadcasted command from the specified node of the cluster.

**7.7.2.5. fetch  config **

Fetch the specified config for the specified nodename. So that output does not scroll by, use the **\pager** command before issuing commands such as **fetch boot config *`node`*** .

**7.7.2.6. copy running config  **

Copy nodename's running config to either `boot` or the default config.

**7.7.2.7. show cluster membership**

Show current cluster members and their roles (nodes, manager or other).

**7.7.2.8. info**

Show general information about the cluster group and the cluster node.

**7.7.2.9. version**

Display version and copyright information of eccmgr.

**7.7.2.10. help**

Show a help message, listing available commands and their brief usages.

### 7.7.3. The eccmgr IO Wrapper

It is possible to centrally store include files, Sieve++ scripts and other support files centrally on the cluster manager and retrieve them automatically during node startup using the `eccmgr` IO wrapper.

The `eccmgr` IO wrapper allows nodes to request files from the cluster manager using the cluster console.

The following example makes a sieve script called `data.siv` available to the cluster node.

*   Create the `/opt/ecelerity/etc/boot/data.siv` file on the cluster manager.

*   Add the `data.siv` file to the Subversion repository with the following command:

    ```
    shell> cd /opt/ecelerity/etc/boot
    shell> /opt/ecelerity/3rdParty/bin/svn add data.siv
    shell> /opt/ecelerity/3rdParty/bin/svn -m "Adding Sieve Scripts" commit
    ```

*   Add the following directive to your `default` configuration file:

    `Module generic/persist_io persist_io {}`
*   Within the sieve validation module, reference the cluster manager hosted Sieve script using the following syntax (substitute the IP address of the cluster manager for the value shown here):

    Validate validate/sieve sieve  {
      data_phase1 = persist://eccmgr://*`webuser:webpass@10.0.0.10`*:2025/boot/data.siv
      ...
    }
*   Commit your changes to the `default` configuration file and restart the nodes.

When configuration is complete, commit your changes to the repository using the **/opt/ecelerity/3rdParty/bin/svn commit -m "duravip changes" default**                                     command. Restart the nodes to have these changes take effect.

On restart, your cluster nodes will pull the Sieve script from the manager. The `persist_io` module will locally cache the Sieve script so that the node can start with a cached copy of the script in situations where the cluster manager is unreachable.

| [Prev](cluster.installation.php)  | [Up](cluster.php) |  [Next](cluster.cidr_server.php) |
| 7.6. Installing Momentum Clustering  | [Table of Contents](index.php) |  7.8. The `cidr_server` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)