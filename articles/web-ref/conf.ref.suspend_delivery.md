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

| suspend_delivery |
| [Prev](conf.ref.supplemental_groups.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.tcp_buffer_size.php) |

<a name="conf.ref.suspend_delivery"></a>
## Name

suspend_delivery — prevent outbound mail delivery

## Synopsis

`Suspend_Delivery = "false"`

<a name="idp11936352"></a>
## Description

When set to `true`, this directive forces Momentum not to attempt any deliveries at all in the scope it is configured. The default value is `false`. The following example suspends delivery for a specific binding within a binding_group:

```
Binding_Group "ExampleGroup" {
  Suspend_Delivery = "false"
  Binding "example1"
  {
    Bind_Address = "10.10.10.10"
    Suspend_Delivery = "true"
  }
  Binding "example2"
  {
    Bind_Address = "10.10.10.11"
  }

  ...
}
```

Within a binding group, non-suspended bindings are preferred over suspended bindings so in the example above, messages will not be queued for binding "example1".

You can suspend delivery from the system console by issuing the command: **config set [*`scope`* *`scope_name`*] Suspend_Delivery true**                                                     . This can be useful for temporarily suspending deliveries for a specific domain. Setting `Suspend_Delivery` to `false` will resume delivery for all queued messages.

### Note

Note that using this option in the global scope also suspends the `#mmove` function that transfers messages between nodes in a cluster configuration. If you wish to suspend delivery for the default binding, also see [the section called “The "default" Binding”](conf.ref.binding.php#conf.ref.binding.default "The "default" Binding").

<a name="idp11945408"></a>
## Scope

`suspend_delivery` is valid in the binding, binding_group, domain and global scopes.

<a name="idp11947488"></a>
## See Also

[binding](conf.ref.binding.php "binding"), [Section 7.5.2, “`duravip_follow` and the #mmove Binding”](cluster.config.duravip.php#cluster.config.mmove "7.5.2. duravip_follow and the #mmove Binding"), [default_binding](conf.ref.default_binding.php "default_binding")

| [Prev](conf.ref.supplemental_groups.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.tcp_buffer_size.php) |
| supplemental_groups  | [Table of Contents](index.php) |  tcp_buffer_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)