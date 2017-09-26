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

| msys.gauge_cache.dec |
| [Prev](lua.ref.msys.expurgate.scan.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.gauge_cache.define.php) |

<a name="lua.ref.msys.gauge_cache.dec"></a>
## Name

msys.gauge_cache.dec — Decrement the value associated with keystring in the named cache

<a name="idp18109104"></a>
## Synopsis

`msys.gauge_cache.dec(cachename, keystring);`

```
cachename: string
keystring: string
```
<a name="idp18112064"></a>
## Description

Decrements the value associated with keystring in the named cache.

Enable this function with the statement `require('msys.gauge_cache');`.

<a name="idp18114896"></a>
## See Also

[msys.gauge_cache.define](lua.ref.msys.gauge_cache.define.php "msys.gauge_cache.define"), [Section 28.1.9, “Shared Gauge Caches”](cluster.config.replication.php#cluster.replication.gauge_cache "28.1.9. Shared Gauge Caches")

| [Prev](lua.ref.msys.expurgate.scan.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.gauge_cache.define.php) |
| msys.expurgate.scan  | [Table of Contents](index.php) |  msys.gauge_cache.define |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)