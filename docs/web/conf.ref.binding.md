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
| [Prev](conf.ref.bind_address.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.binding_group.php) |

<a name="conf.ref.binding"></a>
## Name

binding — configure binding specific options

<a name="idp4280592"></a>
## Description

```
binding "example" {
  # binding-specific settings
}
```

Use the `binding` stanza to define per-binding configuration options. You can nest `domain` and `host` stanzas inside `binding` stanzas to create per-binding per-domain, or per-binding per-host configurations.

Apart from the `domain` and `host` options, the following options are commonly specified in a `binding` stanza:

*   [bind_address](conf.ref.bind_address.php "bind_address")

*   [connect_timeout](conf.ref.connect_timeout.php "connect_timeout")

*   [ehlo_hostname](conf.ref.ehlo_hostname.php "ehlo_hostname")

*   [generate_bounces](conf.ref.generate_bounces.php "generate_bounces")

*   [match_domain](conf.ref.match_domain.php "match_domain")

*   [message_expiration](conf.ref.message_expiration.php "message_expiration")

An example of a binding stanza follows.

<a name="example.binding"></a>

**Example 9.3. Binding my_binding**

```
binding "my_binding" {
  bind_address = "208.77.188.166"
  generate_bounces = true
  ehlo_hostname = "my_name.com"
}
```

### Warning

Binding names are case-sensitive. Spaces and colons are not allowed in binding names.

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.26.

Prior to Momentum version 2.2.1.26 it was legal to include a binding_group within a binding. This usage has been deprecated and is invalid in version 3.0.

<a name="conf.ref.binding.default"></a>
## The "default" Binding

The `default` binding is a special case of a binding scope. This binding exists without being explicitly defined. You can confirm its existence by issuing the ec_console command [binding summary](console_commands.binding_summary.php "binding summary"). Along with any other bindings that you have defined, you should also see `Summary Statistics For Binding default`.

However, if you wish, you can explicitly create the default binding scope and set options in that scope. Do this in the following way:

```
binding "default" {
  ehlo_hostname = "example.com"
}
```

Defining and using the "default" binding is required any time you want to change the behavior for any message that isn't assigned to some other binding. Do this in your configuration file as indicated above or set it at runtime using Lua (or Sieve). Setting the default binding from a script is done in exactly the same way as setting any other binding.

Even if you **never** assign messages to bindings the "default" binding can still be used to alter default behavior. This is done by setting the values of options in the default binding scope.

More importantly, if you do assign messages to bindings, ensure that *all* messages are assigned to bindings, or make sure that the fallback binding (otherwise known as "default") does what you want. Good scripting practice ensures that there is always an `else` clause or some other way of ensuring that all messages are always dealt with in some way. For example, you could create a variable at the top of your script with the most general binding, then `if` blocks to assign a message to a more specific binding if it matches. At the end of the script, assuming no `if` condition applies, the `else` clause would assign the message to the most general binding.

<a name="conf.ref.binding.removal"></a>
## Removing a Binding

When you are removing a binding that is in use take the following steps:

1.  Examine the binding assignment to determine if there are any policy settings associated with the binding.

2.  If there are none, then suspend the binding and apply the configuration changes. For information about suspending a binding see [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery").

3.  Examine the mail queue. If there is mail for the suspended binding, reassign it to another binding. If the queued messages are not reassigned to another binding, they will go to the default binding. For more information see [showqueue](console_commands.showqueue.php "showqueue") and [reroute queue](console_commands.reroute_queue.php "reroute queue").

4.  Once all of reassigned messages are out of the queue, remove the binding from the configuration and reload the configuration.

<a name="idp4319872"></a>
## Scope and Valid Options

`binding` is valid in the global scope and, since version 2.2.1.26, in the binding_group scope.

<a name="idp4322656"></a>
## See Also

[binding_group](conf.ref.binding_group.php "binding_group") [domain](conf.ref.domain.php "domain"), [host](conf.ref.host.php "host"), [Section 2.4, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "2.4. Configuration Scopes and Fallback"), [ec_set_binding](sieve.ref.ec_set_binding.php "ec_set_binding"),

| [Prev](conf.ref.bind_address.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.binding_group.php) |
| bind_address  | [Table of Contents](index.php) |  binding_group |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)