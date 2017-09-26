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

| binding |
| [Prev](conf.ref.bind_address.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.binding_auto_replumb.php) |

<a name="conf.ref.binding"></a>
## Name

binding — configure binding specific options

<a name="idp11794208"></a>
## Description

```
binding "example" {
  # binding-specific settings
}
```

Use the `binding` stanza to define per-binding configuration options. You can nest `domain` and `host` stanzas inside `binding` stanzas to create per-binding per-domain or per-binding per-host configurations. For additional details, see [Section 15.3, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "15.3. Configuration Scopes and Fallback").

Apart from the `domain` and `host` options, the following options are commonly specified in a `binding` stanza:

*   [bind_address](conf.ref.bind_address.php "bind_address")

*   [connect_timeout](conf.ref.connect_timeout.php "connect_timeout")

*   [ehlo_hostname](conf.ref.ehlo_hostname.php "ehlo_hostname")

*   [generate_bounces](conf.ref.generate_bounces.php "generate_bounces")

*   [message_expiration](conf.ref.message_expiration.php "message_expiration")

For a complete list of options valid in the binding scope, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

The following is an example of a `binding` stanza:

```
# my_binding-1 rules
binding "my_binding-1" {
  bind_address = "10.10.10.1"
  generate_bounces = true
  ehlo_hostname = "my_name-1.com"
}

# my_binding-2 rules
binding "my_binding-2" {
  bind_address = "10.10.10.2"
  generate_bounces = false
  ehlo_hostname = "my_name-2.com"
}
```

In this example, the source IP for my_binding-1 mail is `10.10.10.1`, while the source IP for my_binding-2 mail is `10.10.10.2`.

### Note

Binding names are case-sensitive. Spaces and colons are not allowed in binding names.

<a name="conf.ref.binding.default"></a>
## `default` Binding

The `default` binding is a special case of a binding scope. Messages that are not assigned to a specific binding will fallback to the `default` binding. Ensure that *all* messages are assigned to a binding or that this fallback binding meets your needs.

You should ensure that all messages are dealt with in some way. For example, you can create a variable at the top of your script with the most general binding, then use `if` blocks to assign a message to a more specific binding. At the end of the script, if no `if` condition applies, the `else` clause would assign the message to the general binding.

Even if you do not assign messages to bindings, youy can use the `default` binding to alter default behavior by setting the values of options in the `default` binding scope.

The `default` binding is not explicitly defined. You can confirm its existence by issuing the ec_console command [binding summary](console_commands.binding_summary.php "binding summary"). You should see `Summary Statistics For Binding default` along with any other bindings you defined.

Defining and using the `default` binding is required any time you want to change the behavior of any message not assigned to some other binding. You can explicitly define the `default` binding scope and set options in that scope in your configuration file or at runtime using Lua.

The following is an example configuration:

```
binding "default" {
  ehlo_hostname = "example.com"
}
```

Setting the `default` binding from a script is done in exactly the same way as setting any other binding. For an example of setting a binding, see [msg:binding](lua.ref.msg_binding.php "msg:binding").

In a cluster configuration, if you wish to set an option to different values within the `default` binding scope, you can explicitly define the `default` binding in the node-specific configuration file and then define options within that scope. You can create a node-specific configuration file by manually creating it, as described in [Section 15.1.5, “Adding Configuration Files”](conf.overview.php#conf.adding.configuration.files "15.1.5. Adding Configuration Files").

<a name="idp23599344"></a>
## Scope and Valid Options

`binding` is valid in the global scope and in the binding_group scope.

For a complete list of options valid in the binding scope, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

<a name="idp23602720"></a>
## See Also

[binding_group](conf.ref.binding_group.php "binding_group"), [domain](conf.ref.domain.php "domain"), [host](conf.ref.host.php "host")

| [Prev](conf.ref.bind_address.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.binding_auto_replumb.php) |
| bind_address  | [Table of Contents](index.php) |  binding_auto_replumb |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)