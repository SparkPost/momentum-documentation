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

| eccluster-client.conf |
| [Prev](eccluster.conf.php)  | Chapter 10. Cluster Configuration Reference |  [Next](mbus.conf.php) |

<a name="eccluster-client.conf"></a>
## Name

eccluster-client.conf — Momentum Cluster Messaging Bus configuration file

<a name="idp7293488"></a>
## Description

The `/opt/ecelerity/etc/eccluster-client.conf` file configures the use of revision control manager for the cluster configuration.

```
ENABLED=TRUE
ECCMGR=10.0.0.91:2026
CONFIG=boot
```

If `ENABLED` is set to `TRUE`, the cluster will pull its boot configuration from the cluster manager on startup, overwriting any local modifications that might be present on disk.

You need to use the **mbuscfg** to commit any local modifications back to the version control repository.

If you don't like this behavior, you may set `ENABLED` to `FALSE`. You are then responsible for guaranteeing that the configuration on all of the cluster nodes remains in sync for proper operation of the cluster.

| [Prev](eccluster.conf.php)  | [Up](cluster.ref.php) |  [Next](mbus.conf.php) |
| eccluster.conf  | [Table of Contents](index.php) |  mbus.conf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)