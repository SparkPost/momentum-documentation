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

| cluster_scope_max_outbound_connections |
| [Prev](conf.ref.cluster_outbound_throttle_messages.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.cluster_server_max_outbound_connections.php) |

<a name="conf.ref.cluster_scope_max_outbound_connections"></a>
## Name

cluster_scope_max_outbound_connections — provide traffic shaping for outbound connections in a cluster configuration

## Synopsis

`Cluster_Scope_Max_Outbound_Connections = 20`

<a name="idp4627008"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.42.

Cluster Scope_Max_Outbound_Connections is for use in a cluster configuration and is the equivalent of Scope_Max_Outbound_Connections. It provides for finer-grained manipulation of the number of outbound connections than does Cluster_Server_Max_Outbound_Connections. When used in different scopes its behavior is as follows:

*   In the global scope, it behaves like Cluster_Server_Max_Outbound_Connections

*   In a Global::Domain scope, it determines the maximum number of connections to the specified domain across all bindings

*   In a Binding_Group::Domain scope, it determines the maximum number of connections to the specified domain across all the bindings in that Binding Group

*   In a Binding::Domain scope, it behaves like Cluster_Max_Outbound_Connections

*   In a Global:Host scope it determines the maximum number of connections to the specified host across all bindings

Cluster_Scope_Max_Outbound_Connections is disabled by default. When it is not set then Cluster_Max_Outbound_Connections or Cluster_Server_Max_Outbound_Connections is used, depending on the context.

<a name="idp4637712"></a>
## Scope

cluster_scope_max_outbound_connections is valid in the global, binding, binding_group, domain and host scopes.

<a name="idp4639424"></a>
## See Also

[scope_max_outbound_connections](conf.ref.scope_max_outbound_connections.php "scope_max_outbound_connections"), [cluster_max_outbound_connections](conf.ref.cluster_max_outbound_connections.php "cluster_max_outbound_connections"), [cluster_server_max_outbound_connections](conf.ref.cluster_server_max_outbound_connections.php "cluster_server_max_outbound_connections")

| [Prev](conf.ref.cluster_outbound_throttle_messages.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.cluster_server_max_outbound_connections.php) |
| cluster_outbound_throttle_messages  | [Table of Contents](index.php) |  cluster_server_max_outbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)