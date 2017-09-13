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

| blackhole |
| [Prev](conf.ref.binding_group.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.body_timeout.php) |

<a name="conf.ref.blackhole"></a>
## Name

blackhole — blackhole mail

## Synopsis

`Blackhole = "false"`

`Blackhole = "true"`

`Blackhole = "inline"`

`Blackhole = "internal"`

<a name="idp8332432"></a>
## Description

This option may be specified globally or inside a `domain`, `binding_group` or `binding` stanza. If specified in the domain scope, Momentum immediately fails all messages queued for that domain. Likewise, if it is specified in the binding or binding_group scope. If `Generate_Bounces` is true, then a bounce message will be generated for each message failed.

If this option is set to `inline`, messages are failed permanently during the SMTP transaction (upon reception), immediately after receiving the RCPT TO command.

If `internal` is specified, the message is accepted and internally dropped. The normal message failure operations such as logging, still take place.

The default value for this option is `false`. Specifying `true` is equivalent to specifying `inline`.

<a name="idp8339920"></a>
## Scope

Blackhole is valid in the binding, binding_group, domain and global scopes.

<a name="idp8341600"></a>
## See Also

[bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior"), [generate_bounces](conf.ref.generate_bounces.php "generate_bounces")

| [Prev](conf.ref.binding_group.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.body_timeout.php) |
| binding_group  | [Table of Contents](index.php) |  body_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)