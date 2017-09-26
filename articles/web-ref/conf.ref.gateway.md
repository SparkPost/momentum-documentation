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

| gateway |
| [Prev](conf.ref.fully_resolve_before_smtp.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.generate_bounces.php) |

<a name="conf.ref.gateway"></a>
## Name

gateway — configure a static SMTP route for mail

## Synopsis

`Gateway = "10.0.0.1"`

`Gateway = "[fe80::a00]:1"`

`Gateway = "my.local.smart.host"`

<a name="idp9648976"></a>
## Description

This directive allows for what other MTAs call "smarthosting." If this option is specified at the global configuration level, all outbound connections will be made to the host name specified.

### Note

As of version 3.4, this feature supports IPv6.

IPv6 addresses are much more flexible than IPv4 addresses in terms of their formatting options. They also use a different delimiter character than IPv4 addresses (a colon instead of a period). This means that in certain contexts, an IPv6 address can create parsing ambiguities.

The accepted convention is to require that, in circumstances where a configuration parameter can also contain something other than an IP address, that an IPv6 address must be enclosed in square brackets. In practical terms, this means that things like the `Gateway`, `Routes` and `Listen` options must have IPv6 addresses enclosed in brackets. Others, such as `Peer`, `Relay_Hosts` and `Prohibited_Hosts` do not require the IPv6 address in brackets.

If it is specified within a `Domain` stanza, Momentum will ignore the MXs for the domain and send mail to the gateway host name instead. Other configurations in the domain stanza for that domain will have no effects if a gateway is specified, as mails to that domain are actually sent to the gateway.

Starting with Momentum 2.2, this option is supplanted in many use case by the Routes option. See [routes](conf.ref.routes.php "routes") for more information.

### Note

When delivering mail via ecstream, do not use the `routes`. Use the `gateway` instead.

<a name="idp9660672"></a>
## Scope

gateway is valid in the binding, binding_group, domain and global scopes.

<a name="idp9662352"></a>
## See Also

[routes](conf.ref.routes.php "routes")

| [Prev](conf.ref.fully_resolve_before_smtp.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.generate_bounces.php) |
| fully_resolve_before_smtp  | [Table of Contents](index.php) |  generate_bounces |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)