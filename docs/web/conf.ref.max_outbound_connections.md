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

| max_outbound_connections |
| [Prev](conf.ref.max_line_length_policy.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.max_recipients_per_batch.php) |

<a name="conf.ref.max_outbound_connections"></a>
## Name

max_outbound_connections — set the maximum number of outbound connections for a domain

## Synopsis

`Max_Outbound_Connections = 32`

<a name="idp5728272"></a>
## Description

This will limit the number of outbound connections to an individual domain to the specified value. It can be set at a global level, which enforces the limit on every domain in the system, or at a binding, binding_group or domain level. When this option is set in the domain, binding or binding_group scope the global value is overridden and the usual fallback semantics apply. The default value for this option is `32`. *Note*: When used in the Host scope, `Max_Outbound_Connections` limits the number of connections to the specified IP address.

<a name="idp5731728"></a>
## Usage Example

Find below an example of how this configuration option might be used:

```
Max_Outbound_Connections = 30

Domain "example.com" {
  dkim = "enabled"
}

Binding_Group "group1" {

  Max_Outbound_Connections = 5

  Binding "example" {

    Bind_Address = "10.10.10.10"
    Max_Outbound_Connections = 15

    Domain "example.com" {
      #some other options
      ...
    }
  }

}
```

When connecting to `example.com` from the `example` binding, `Max_Outbound_Connections` will be `15`, when connecting from another binding in the `group1` group it will be `5` and when connecting from a binding that is not in the `group1` group it will be 30.

In some circumstances it may make sense to declare a domain within a binding and also declare it globally—when you want interaction with that domain to be different globally versus in a particular binding. For example, with the following configuration customers on the `yahoofriends` binding are allowed to use 30 connections to yahoo.com, customers on other bindings are allowed to use only 10 connections per binding to yahoo.com, and connections to domains other than yahoo.com are unrestricted.

```
Binding "yahoofriends" {
  Domain "yahoo.com" {
    Max_Outbound_Connections = 30
  }
}

Domain "yahoo.com" {
  Max_Outbound_Connections = 10
}
```
<a name="idp5740272"></a>
### `Max_Outbound_Connections` in the `host` Scope

Note that the usual semantics do not apply with this option in the `host` scope. If you declare a `host` scope and do not define `Max_Outbound_Connections`, its value will be `-1` and not the fallback value of `Max_Outbound_Connections` in an encompassing scope.

Given the following configuration file:

```
Max_Outbound_Connections = 32
host "example.com" {}
```

You will see the following results from the system console:

```
09:45:58 /tmp/2025> config eval max_outbound_connections
Max_Outbound_Connections = 32
09:46:29 /tmp/2025> config eval host example.com max_outbound_connections
Max_Outbound_Connections = -1
```

A setting of `-1` means that unlimited connections are allowed.

<a name="idp5747680"></a>
## Scope

max_outbound_connections is valid in the binding, binding_group, domain, global and host scopes.

<a name="idp5749376"></a>
## See Also

[host](conf.ref.host.php "host"), [Section 4.4, “MultiVIP© Interfaces”](operations.multivip.php "4.4. MultiVIP© Interfaces"), [server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections"), [Section 2.4, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "2.4. Configuration Scopes and Fallback"), [scope_max_outbound_connections](conf.ref.scope_max_outbound_connections.php "scope_max_outbound_connections")

| [Prev](conf.ref.max_line_length_policy.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.max_recipients_per_batch.php) |
| max_line_length_policy  | [Table of Contents](index.php) |  max_recipients_per_batch |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)