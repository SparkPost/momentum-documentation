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

| server_max_outbound_connections |
| [Prev](conf.ref.server_max_file_descriptors.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.server_reserve_outbound_connections.php) |

<a name="conf.ref.server_max_outbound_connections"></a>
## Name

server_max_outbound_connections — sets the maximum number of outbound connections

## Synopsis

`Server_Max_Outbound_Connections = 20000`

<a name="idp6614912"></a>
## Description

Limits the number of total connections that will be established concurrently within Momentum, irrespective of bindings. While 20,000 is the value assigned to this option in the configuration file, it may be reasonable to increase this value to 50,000 or 75,000 depending on the capabilities of the underlying hardware and operating system.

Note that this parameter is intimately related to [server_max_file_descriptors](conf.ref.server_max_file_descriptors.php "server_max_file_descriptors") since the number of available OS file descriptors will limit the number of messages that can be queued simultaneously. See the description in [Section 1.4, “Operating System Specific Preparation”](install.os-specific.php "1.4. Operating System Specific Preparation") for more details.

Within a `Binding` stanza, this option will regulate the total number of connections through that particular binding.

<a name="idp6619600"></a>
## Scope

server_max_outbound_connections is valid in the binding, binding_group and global scopes.

<a name="idp6621296"></a>
## See Also

[server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php "server_reserve_outbound_connections")

[server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php "server_reserve_outbound_connections")

[server_max_file_descriptors](conf.ref.server_max_file_descriptors.php "server_max_file_descriptors")

[Section 1.4, “Operating System Specific Preparation”](install.os-specific.php "1.4. Operating System Specific Preparation")

| [Prev](conf.ref.server_max_file_descriptors.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.server_reserve_outbound_connections.php) |
| server_max_file_descriptors  | [Table of Contents](index.php) |  server_reserve_outbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)