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

| binding_group |
| [Prev](conf.ref.binding_auto_replumb_interval.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.blackhole.php) |

<a name="conf.ref.binding_group"></a>
## Name

binding_group — logically group a set of bindings

<a name="idp23642720"></a>
## Description

```
binding_group "example" {
  # binding_group-specific settings
}
```

The `binding_group` stanza is a logical container, which allows you to group bindings together and conveniently collect common configuration options without repeating them throughout your configuration file. The group name is an arbitrary string and holds no particular semantic value beyond being a symbolic identifier for the group.

The following is an example of a `binding_group` stanza:

```
binding_group "group1" {
  max_outbound_connections = 5

  binding "example" {
    bind_address = "10.10.10.10"
  }

  binding "example2" {
    bind_address = "10.10.10.11"
  }
}
```

Note that you can specify the same group multiple times, which is useful if you have structured your configuration into a series of include files:

```
binding_group "group1" {
  max_outbound_connections = 5

  binding "example" {
    bind_address = "10.10.10.10"
  }
}
# Perhaps this piece is included from an auxillary configuration file
binding_group "group1" {
  binding "example2" {
    bind_address = "10.10.10.11"
  }
}
```

### Note

Binding group names are case-sensitive and spaces are not allowed in binding group names.

There is no upper limit to the number of bindings that can be in a binding group. When Adaptive Delivery is enabled, a large number of bindings in a binding group will affect performance since significant CPU time is spent checking for suspended bindings. For this reason the recommended best practice, when using the [adaptive module](modules.adaptive.php "71.3. adaptive – Adaptive Delivery"), is not to exceed 32 bindings per binding group.

<a name="conf.ref.bindinggroup.default"></a>
## `default` Binding Group

The `default` binding_group is a special case of a binding group scope. This binding group exists without being explicitly defined.

However, if you wish, you can explicitly create the `default` binding_group scope and set options in that scope, as follows:

```
binding_group "default" {
  ehlo_hostname = "example.com"
}
```

The `default` binding_group behaves in the same way as the `default` binding. For more information, see [the section called “`default` Binding”](conf.ref.binding.php#conf.ref.binding.default "default Binding").

<a name="idp23658336"></a>
## Scope and Valid Options

`binding_group` is valid in the global scope.

For a complete list of options valid in the binding_group scope, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

<a name="idp23662272"></a>
## See Also

[binding](conf.ref.binding.php "binding")

| [Prev](conf.ref.binding_auto_replumb_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.blackhole.php) |
| binding_auto_replumb_interval  | [Table of Contents](index.php) |  blackhole |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)