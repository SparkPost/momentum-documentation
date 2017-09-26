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

| msys.audit.receptions |
| [Prev](lua.ref.msys.audit.inbound_session_count.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.audit.rejections.php) |

<a name="lua.ref.msys.audit.receptions"></a>
## Name

msys.audit.receptions — Return the number of receptions that have occurred for a CIDR block within a configured time window

<a name="idp17293648"></a>
## Synopsis

`msys.audit.receptions(monitor, options);`

```
monitor: string
options: table, optional
```
<a name="idp17296672"></a>
## Description

Returns the number of receptions that have occurred for a CIDR block within a configured time window. `monitor` corresponds to one of the monitors defined in the inbound_audit module. If the named module is not configured, an error is raised. `options` is a table that can contain the following keys:

*   `startv` the starting window (default 0) to query across.

*   `endv` the ending window (default 0) to query across.

*   `cidr` an IP/mask specifying the address of interest. If not specified, the current connected IP is assumed.

*   `cluster` use the cluster wide metrics, rather than the local node metrics. If options is not a table, it is interpreted as though it was the cidr value of interest.

When specifying a window range, the aggregate sum over the specified range will be returned instead of the value from the current time window.

**This feature supports IPv6.**

IPv6 addresses are much more flexible than IPv4 addresses in terms of their formatting options. They also use a different delimiter character than IPv4 addresses (a colon instead of a period). This means that in certain contexts, an IPv6 address can create parsing ambiguities.

The accepted convention is to require that, in circumstances where a configuration parameter can also contain something other than an IP address, that an IPv6 address must be enclosed in square brackets. In practical terms, this means that things like the `gateway`, `routes` and `listen` options must have IPv6 addresses enclosed in brackets. Others, such as `peer`, `relay_hosts` and `prohibited_hosts` do not require the IPv6 address in brackets.

Enable this function with the statement `require('msys.audit');`.

<a name="idp17312640"></a>
## See Also

[Section 71.41, “inbound_audit – Inbound traffic analytics”](modules.inbound_audit.php "71.41. inbound_audit – Inbound traffic analytics"), [Section 71.16, “cidrdb – CIDRDB”](modules.cidrdb.php "71.16. cidrdb – CIDRDB"), [msys.audit.connections](lua.ref.msys.audit.connections.php "msys.audit.connections"), [msys.audit.rejections](lua.ref.msys.audit.rejections.php "msys.audit.rejections")

| [Prev](lua.ref.msys.audit.inbound_session_count.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.audit.rejections.php) |
| msys.audit.inbound_session_count  | [Table of Contents](index.php) |  msys.audit.rejections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)