| http_uri |
| [Prev](conf.ref.http_method.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.http_version.php) |

<a name="conf.ref.http_uri"></a>
## Name

http_uri — Define the HTTP URI that you wish to connect to

## Synopsis

`http_uri = "/gcm/send"`

<a name="idp24939056"></a>
## Description

When using the HTTP protocol this option defines the HTTP URI that you wish to connect to. This option is used in conjunction with the [http_host](conf.ref.http_host.php "http_host") option. Use this option when the [delivery_method](conf.ref.delivery_method.php "delivery_method") is one of the following:

*   `apn`

*   `gcm`

*   `mm7`

The default value for this option is an empty string.

<a name="idp24947168"></a>
## Scope

`http_uri` is valid in the global, binding_group, binding, and domain scopes.

<a name="idp24949024"></a>
## See Also

[http_basic_auth](conf.ref.http_basic_auth.php "http_basic_auth"), [http_method](conf.ref.http_method.php "http_method"), [http_host](conf.ref.http_host.php "http_host"), [http_version](conf.ref.http_version.php "http_version"), and [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](conf.ref.http_method.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.http_version.php) |
| http_method  | [Table of Contents](index.php) |  http_version |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)