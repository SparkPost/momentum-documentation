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

| msys.audit_series.count |
| [Prev](lua.ref.msys.audit_series.add.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.audit_series.define.php) |

<a name="lua.ref.msys.audit_series.count"></a>
## Name

msys.audit_series.count — Return the total associated with the named series

<a name="idp26008560"></a>
## Synopsis

`msys.audit_series.count(name, options);`

```
name: string
options: table, optional
```
<a name="idp26011216"></a>
## Description

This function returns the total associated with the named series that is passed in as the first argument.

`options` may be a table that provides additional query parameters. For all series types, the following query parameters can be used:

*   `startv` the starting window (default 0) to query across

*   `endv` the ending window (default 0) to query across

*   `key` interpretation depends on the series type

    For a CIDR series, the key is interpreted as an IP/mask specifying the address of interest. If accept_construct is passed in, the remote IP of the accept construct is used. If the type is not specified or only "/mask" is specified, the current connected IP is assumed. For a string series, the key is the string key to look up. If it is not specified, an error is thrown.

When specifying a window range, the aggregate sum over the specified range will be returned instead of the value from the current time window.

**As of version 3.4, this feature supports IPv6.**

IPv6 addresses are much more flexible than IPv4 addresses in terms of their formatting options. They also use a different delimiter character than IPv4 addresses (a colon instead of a period). This means that in certain contexts, an IPv6 address can create parsing ambiguities.

The accepted convention is to require that, in circumstances where a configuration parameter can also contain something other than an IP address, that an IPv6 address must be enclosed in square brackets. In practical terms, this means that things like the `gateway`, `routes` and `listen` options must have IPv6 addresses enclosed in brackets. Others, such as `peer`, `relay_hosts` and `prohibited_hosts` do not require the IPv6 address in brackets.

If `options` is not a table, then it is assumed to be the value for the key parameter.

Enable this function with the statement `require('msys.audit_series');`.

<a name="idp26026400"></a>
## See Also

[msys.audit_series.define](lua.ref.msys.audit_series.define.php "msys.audit_series.define"), [msys.audit_series.add](lua.ref.msys.audit_series.add.php "msys.audit_series.add"), [msys.audit_series.remove_item](lua.ref.msys.audit_series.remove_item.php "msys.audit_series.remove_item"), [Use_IPv6](conf.ref.use_ipv6.php "Use_IPv6"), [Section 14.41, “inbound_audit – Inbound traffic analytics”](modules.inbound_audit.php "14.41. inbound_audit – Inbound traffic analytics")

| [Prev](lua.ref.msys.audit_series.add.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.audit_series.define.php) |
| msys.audit_series.add  | [Table of Contents](index.php) |  msys.audit_series.define |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)