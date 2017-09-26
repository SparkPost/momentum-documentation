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

| server_reserve_outbound_connections |
| [Prev](conf.ref.server_max_outbound_connections.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.signing_stats.php) |

<a name="conf.ref.server_reserve_outbound_connections"></a>
## Name

server_reserve_outbound_connections — sets the server-wide connection limit reserve

## Synopsis

`Server_Reserve_Outbound_Connections = 200`

<a name="idp26550448"></a>
## Description

`Server_Reserve_Outbound_Connections` configures the server-wide connection limit reserve. The sum of `Server_Reserve_Outbound_Connections` and `Server_Max_Outbound_Connections` is used to set the ceiling on the total number of outbound connections that Momentum will establish. The default value for this option is `200`.

### Note

`server_reserve_outbound_connections` must be set to `0` in order for `scope_max_outbound_connections` to work properly in the Global::Domain scope. However, when `server_reserve_outbound_connections` is set to `0` and the server is under load, low volume domains may be starved of connections.

It is recommended that you leave this value as is and alter `Server_Max_Outbound_Connections` at either the global scope or within a given binding instead.

<a name="idp26558672"></a>
## Scope

server_reserve_outbound_connections is valid in the global scope.

<a name="idp26560528"></a>
## See Also

[server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections")

| [Prev](conf.ref.server_max_outbound_connections.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.signing_stats.php) |
| server_max_outbound_connections  | [Table of Contents](index.php) |  signing_stats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)