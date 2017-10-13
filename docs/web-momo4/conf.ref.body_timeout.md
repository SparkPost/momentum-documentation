<a name="conf.ref.body_timeout"></a>
## Name

body_timeout — network timeout once the DATA phase is complete

## Synopsis

`body_timeout = 600`

<a name="idp23694784"></a>
## Description

The amount of time in seconds to wait for a response once the `DATA` phase has been terminated by a `CRLF.CRLF`. This timeout is relatively long because this is the only phase of transmission which involves significant network transmission. This option applies to outbound mail only.

The default value is `600`.

<a name="idp23698640"></a>
## Scope

body_timeout is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.blackhole.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.bounce_behavior.php) |
| blackhole  | [Table of Contents](index.php) |  bounce_behavior |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)