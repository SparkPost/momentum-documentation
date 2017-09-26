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
| [Prev](conf.ref.rset_timeout.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.scheduler.php) |

<a name="conf.ref.scope_max_outbound_connections"></a>
## Name

scope_max_outbound_connections — provide traffic shaping for outbound connections

## Synopsis

`scope_max_outbound_connections = 20`

<a name="idp26403600"></a>
## Description

`scope_max_outbound_connections` provides for finer-grained manipulation of the number of outbound connections than does `server_max_outbound_connections`. When used in different scopes its behavior is as follows:

*   In the global scope, it behaves like `server_max_outbound_connections`

*   In a Global::Domain scope, it determines the maximum number of connections to the specified domain across all bindings

*   In a Binding_Group::Domain scope, it determines the maximum number of connections to the specified domain across all the bindings in that Binding Group

*   In a Binding::Domain scope, it behaves like `max_outbound_connections`

*   In a Global::Host scope it determines the maximum number of connections to the specified host across all bindings

### Note

`server_reserve_outbound_connections` must be set to `0` in order for `scope_max_outbound_connections` to work properly in the Global::Domain scope. However, when `server_reserve_outbound_connections` is set to `0` and the server is under load, low volume domains may be starved of connections.

`scope_max_outbound_connections` is disabled by default. When it is not set then `max_outbound_connections` or `server_max_outbound_connections` is used, depending on the context.

You might want to use this option in circumstances where two MX names resolve to a list of identical IP addresses. This is currently the case with `wanadoo.fr` and `orange.fr`. Any given sending host cannot have more than three simultaneous connections to any given host for **both** domains. To ensure that you are working within these parameters, use `scope_max_outbound_connections` in the following way:

```
domain "/^(wanadoo|orange)\.fr$/" {
   scope_max_outbound_connections = 3
}
```

With this configuration both domains are considered as one for the sake of total outbound connections.

To highlight how `scope_max_outbound_connections` differs from `max_outbound_connections` consider the following example:

```
domain "/^(aol|yahoo).com$/" {
  max_outbound_connections = 5
}
```

The preceding example is identical to the following configuration:

```
domain "aol.com" {
  max_outbound_connections = 5
}

domain "yahoo.com" {
  max_outbound_connections = 5
}
```

This gives a maximum of 5 outbound connections for *each* domain.

<a name="idp26426272"></a>
## Scope

scope_max_outbound_connections is valid in the global, binding, binding_group, domain, and host scopes.

<a name="idp26428176"></a>
## See Also

[max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections"), [server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections"), [server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php "server_reserve_outbound_connections")

| [Prev](conf.ref.rset_timeout.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.scheduler.php) |
| rset_timeout  | [Table of Contents](index.php) |  scheduler |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)