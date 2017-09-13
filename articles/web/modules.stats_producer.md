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

| 14.55. stats_producer – Stats Producer Module |
| [Prev](modules.spf.php)  | Chapter 14. Modules Reference |  [Next](modules.suppress_spool.php) |

## 14.55. stats_producer – Stats Producer Module

<a class="indexterm" name="idp13021808"></a>

The `stats_producer` module is used internally by the MTA to provide real-time graphing data for both the single-node web console as well as the cluster-wide web console.

This module is configured as follows:

<a name="example.statp"></a>

**Example 14.75. stats_producer module**

`Module generic/stats_producer statp { }`

Additionally, you can change the default path locations:

<a name="example.statp.path"></a>

**Example 14.76. statp module**

```
Module generic/stats_producer statp {
  socket_path = "/var/log/ecelerity/ec_rrdd/ec_rrdd.socket"
  database_path = "/opt/ecapache/data/graph_db"
  interval = 60
}
```

The the default value for `interval` is `60` seconds. You should not need to change this option.

| [Prev](modules.spf.php)  | [Up](modules.php) |  [Next](modules.suppress_spool.php) |
| 14.54. spf Modules – spf_macros, spf_v1 and senderid (SPF v2)  | [Table of Contents](index.php) |  14.56. suppress_spool – Deferred Message Spooling |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)