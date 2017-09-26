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

| outbound_throttle_connections |
| [Prev](conf.ref.only_use_best_mx_for_relay_domains.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.outbound_throttle_messages.php) |

<a name="conf.ref.outbound_throttle_connections"></a>
## Name

outbound_throttle_connections — limit the rate at which connections are established

## Synopsis

`Outbound_Throttle_Connections = "1"`

`Outbound_Throttle_Connections = "1/60"`

<a name="idp6121040"></a>
## Description

This allows you to limit the rate at which Momentum will attempt to establish TCP/IP connections. It can be employed to globally limit connection allocation or to reduce the rate established to a particular domain. When used in the global scope it limits the entire system to the value specified. For example, when set to `100`, no more than a total of `100` outbound connections can be made in a given second across any number of bindings.

If a single integer parameter is provided, Momentum will ensure that no more than the specified number of connections are initiated in a given second. If a proper fraction parameter is provided, Momentum will limit the number of connections to the number specified in the numerator over the time window in seconds specified by the denominator. By default this option is not set, indicating an unlimited number of connections.

Where throttles are concerned, Momentum's fallback behavior differs. For more information see [the section called “Throttles and Fallback”](conf.ref.outbound_throttle_messages.php#conf.ref.outbound_throttle_messages.fallback "Throttles and Fallback").

<a name="idp6125888"></a>
## Scope

outbound_throttle_connections is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.only_use_best_mx_for_relay_domains.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.outbound_throttle_messages.php) |
| only_use_best_mx_for_relay_domains  | [Table of Contents](index.php) |  outbound_throttle_messages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)