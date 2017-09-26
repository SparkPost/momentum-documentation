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

| 7.4. Cluster Deployment |
| [Prev](cluster.config.mbus.php)  | Chapter 7. Clustering |  [Next](cluster.config.duravip.php) |

## 7.4. Cluster Deployment

A cluster is comprised of at least one Manager node and one or more MTA nodes. The Manager node in the cluster must be installed with the database role via the installer; this will be your central point of management for the cluster.

The installer will create a default cluster-enabled configuration for you; this is the default configuration with an include line that references the `ecelerity-cluster.conf` configuration file. This can be found in `/opt/msys/ecelerity/etc/conf/default/ecelerity-cluster.conf`.

Simple deployments will not typically need to edit the cluster portions of this configuration. If you intend to use DuraVIP™ or to more tightly control the scope of replicate data, you will need to edit the configuration in the "cluster" stanza of the `ecelerity-cluster.conf` file (more details on this later).

Once you are happy with your configuration, you will commit it to the ecconfigd service by clicking the commit button in the webconsole (or by running the **eccfg commit**        command if you were working from the command line). For more information about this command see [eccfg](executable.eccfg.php "eccfg").

Bringing the MTA node online is then a simple matter of specifying the name of the subcluster that you'd like the MTA node to belong to and the installer will bootstrap that node, pull the configuration files and start services for you.

| [Prev](cluster.config.mbus.php)  | [Up](cluster.php) |  [Next](cluster.config.duravip.php) |
| 7.3. Message Bus  | [Table of Contents](index.php) |  7.5. DuraVIP™: IP Fail over |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)