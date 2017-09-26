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

| msys.cidr.reload |
| [Prev](lua.ref.msys.cidr.query.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.commtouch.diagnose.php) |

<a name="lua.ref.msys.cidr.reload"></a>
## Name

msys.cidr.reload — Refresh CIDRs of type `datasource` and `rbldnsd`

<a name="idp26339232"></a>
## Synopsis

`msys.cidr.reload(name);`

`name: string`<a name="idp26341904"></a>
## Description

Refreshes CIDRs of type `datasource` and `rbldnsd`.

Enable this function with the statement `require('msys.cidr');`.

<a name="idp26345280"></a>
## See Also

[Section 14.16, “cidrdb – CIDRDB”](modules.cidrdb.php "14.16. cidrdb – CIDRDB") , [msys.cidr.define](lua.ref.msys.cidr.define.php "msys.cidr.define"), [msys.cidr.query](lua.ref.msys.cidr.query.php "msys.cidr.query")

| [Prev](lua.ref.msys.cidr.query.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.commtouch.diagnose.php) |
| msys.cidr.query  | [Table of Contents](index.php) |  msys.commtouch.diagnose |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)