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

| bounce_behavior |
| [Prev](conf.ref.body_timeout.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.bounce_domains.php) |

<a name="conf.ref.bounce_behavior"></a>
## Name

bounce_behavior — configure the action taken when a message is classified as a bounce

## Synopsis

`bounce_behavior = "pass"`

`bounce_behavior = "blackhole"`

<a name="idp4391888"></a>
## Description

**Configuration Change. ** This feature was introduced in Momentum 2.1.

When an *out-of-band* bounce message is received by the server and satisfies both the `bounce_domains` and `bounce_pattern` configuration settings, it will either be allowed to pass through for traditional message routing or internally disposed of. Note that this configuration option does not apply to in-band bounces.

The default behavior is to pass the message through into the normal message routing process. However, Momentum can be told that such messages should be internally disposed of in a manner similar to the `blackhole = internal` configuration setting.

As an example, suppose you have out-of-band bounces destined for `bounces.abc.com` and `bounces.xyz.com`. You wish to log bounces for `bounces.abc.com` but not those for `bounces.xyz.com`. To do this you can use the following configuration:

```
generate_bounces = "true"
bounce_behavior = "pass"

domain "bounces.abc.com" {
  routes = ( "smtp://10.2.3.4" )
}
domain "bounces.xyz.com" {
  bounce_behavior = "blackhole"
}
```

Bounces for Domain "bounces.xyz.com" will be blackholed because `bounce_behavior` is set to `blackhole` in the Domain "bounces.xyz.com" scope whereas Domain "bounces.abc.com" inherits the value of `bounce_behavior` defined in the global scope.

<a name="idp4403488"></a>
## Scope

`bounce_behavior` is valid in the domain and global scopes.

<a name="idp4405536"></a>
## See Also

[blackhole](conf.ref.blackhole.php "blackhole"), [bounce_domains](conf.ref.bounce_domains.php "bounce_domains"), [bounce_pattern](conf.ref.bounce_pattern.php "bounce_pattern"), [generate_bounces](conf.ref.generate_bounces.php "generate_bounces") and [Section 14.10, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "14.10. bounce_logger – Momentum-Style Bounce Logging")

| [Prev](conf.ref.body_timeout.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.bounce_domains.php) |
| body_timeout  | [Table of Contents](index.php) |  bounce_domains |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)