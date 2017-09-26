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

| scope_max_outbound_connections |
| [Prev](conf.ref.scheduler.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.security.php) |

<a name="conf.ref.scope_max_outbound_connections"></a>
## Name

scope_max_outbound_connections — provide traffic shaping for outbound connections

## Synopsis

`Scope_Max_Outbound_Connections = 20`

<a name="idp6498048"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.44.

Scope_Max_Outbound_Connections provides for finer-grained manipulation of the number of outbound connections than does Server_Max_Outbound_Connections. When used in different scopes its behavior is as follows:

*   In the global scope, it behaves like Server_Max_Outbound_Connections

*   In a Global::Domain scope, it determines the maximum number of connections to the specified domain across all bindings

*   In a Binding_Group::Domain scope, it determines the maximum number of connections to the specified domain across all the bindings in that Binding Group

*   In a Binding::Domain scope, it behaves like Max_Outbound_Connections

*   In a Global::Host scope it determines the maximum number of connections to the specified host across all bindings

### Note

`server_reserve_outbound_connections` must be set to `0` in order for `scope_max_outbound_connections` to work properly in the Global::Domain scope. However, when `server_reserve_outbound_connections` is set to `0` and the server is under load, low volume domains may be starved of connections.

Scope_Max_Outbound_Connections is disabled by default. When it is not set then Max_Outbound_Connections or Server_Max_Outbound_Connections is used, depending on the context.

You might want to use this option in circumstances where two MX names resolve to a list of identical IP addresses. This is currently the case with `wanadoo.fr` and `orange.fr`. Any given sending host cannot have more than three simultaneous connections to any given host for **both** domains. To ensure that you are working within these parameters, use `Scope_Max_Outbound_Connections` in the following way:

```
domain "/^(wanadoo|orange)\.fr$/" {
   Scope_Max_Outbound_Connections = 3
}
```

With this configuration both domains are considered as one for the sake of total outbound connections.

To highlight how `Scope_Max_Outbound_Connections` differs from `Max_Outbound_Connections` consider the following example:

```
domain "/^(aol|yahoo).com$/" {
  Max_Outbound_Connections = 5
}
```

The preceding example is identical to the following configuration:

```
domain "aol.com" {
  Max_Outbound_Connections = 5
}

domain "yahoo.com" {
  Max_Outbound_Connections = 5
}
```

This gives a maximum of 5 outbound connections for *each* domain.

<a name="idp6519296"></a>
## Scope

scope_max_outbound_connections is valid in the global, binding, binding_group, domain and host scopes.

<a name="idp6521008"></a>
## See Also

[max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections"), [server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections"), [server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php "server_reserve_outbound_connections")

| [Prev](conf.ref.scheduler.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.security.php) |
| scheduler  | [Table of Contents](index.php) |  security |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)