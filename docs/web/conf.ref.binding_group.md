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
| [Prev](conf.ref.binding.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.blackhole.php) |

<a name="conf.ref.binding_group"></a>
## Name

binding_group — logically group a set of bindings

<a name="idp4332320"></a>
## Description

The `Binding_Group` option allows you to logically group bindings together so that they can be more easily referenced from the `regex_binding2` module. The group name is an arbitrary string and holds no particular semantic value beyond being a symbolic identifier for the group. In Momentum version 3.0 the regex_binding modules are discontinued. Use Sieve or scriptlets instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Prior to Momentum version 2.2.1.26 a Binding_Group was set within a Binding stanza as follows:

```
binding "example" {
  binding_group = "group1"
  bind_address = "10.10.10.10"
  max_outbound_connections = 5
}
```

### Note

Binding group names are case-sensitive and spaces are not allowed in binding group names.

Since version 2.2.1.26, `Binding_Group` is implemented as a logical container, which allows you to more conveniently collect common configuration options without repeating them throughout your configuration file. The example above should be written as follows:

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
<a name="conf.ref.bindinggroup.default"></a>
## The "default" Binding Group

The `default` Binding_Group is a special case of a binding group scope. This binding group exists without being explicitly defined.

However, if you wish, you can explicitly create the default binding scope and set options in that scope. Do this in the following way:

```
binding_group "default" {
  ehlo_hostname = "example.com"
}
```

The default binding group behaves in the same way as the default binding. For more information see [the section called “The "default" Binding”](conf.ref.binding.php#conf.ref.binding.default "The "default" Binding").

<a name="idp4347760"></a>
## Scope and Valid Options

binding_group is valid in the global scope. As noted above, the use of binding_group in the binding scope is deprecated and is no longer valid in version 3.0.

<a name="idp4349520"></a>
## See Also

[Section 4.4, “MultiVIP© Interfaces”](operations.multivip.php "4.4. MultiVIP© Interfaces"), [binding](conf.ref.binding.php "binding"), [Section 14.46, “regex_binding2 – Regular Expression Based Bindings (II)”](modules.regex_binding2.php "14.46. regex_binding2 – Regular Expression Based Bindings (II)")

| [Prev](conf.ref.binding.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.blackhole.php) |
| binding  | [Table of Contents](index.php) |  blackhole |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)