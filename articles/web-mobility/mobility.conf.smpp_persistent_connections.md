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

| smpp_persistent_connections |
| [Prev](mobility.conf.smpp_notify_deliver_receipt.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_ram_cache.php) |

<a name="mobility.conf.smpp_persistent_connections"></a>
## Name

smpp_persistent_connections — Specifies the number of SMPP TCP connections with the SMSC that Momentum attempts to keep open on the named bindings

## Synopsis

`smpp_persistent_connections = [ persist_binding = 10 ];`

<a name="idp1877504"></a>
## Description

Specifies the number of SMPP TCP connections with the SMSC that Momentum attempts to keep open on the named bindings. This overrides the default connection goal logic and disables the SMPP_Inactivity_Timer for those bindings.

```
SMPP_Persistent_Connections = [
  persist_binding = 10
];
```
<a name="idp1880032"></a>
## Scope

smpp_persistent_connections is valid in the domain scope.

<a name="idp1881888"></a>
## See Also

[smpp_inactivity_timer](mobility.conf.smpp_inactivity_timer.php "smpp_inactivity_timer"), [Section 2.2, “Persistent Connections”](mobility.persistent.connections.php "2.2. Persistent Connections")

| [Prev](mobility.conf.smpp_notify_deliver_receipt.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_ram_cache.php) |
| smpp_notify_deliver_receipt  | [Table of Contents](index.php) |  smpp_ram_cache |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)