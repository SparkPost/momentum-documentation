| tls_verify_mode |
| [Prev](config.tls_verify.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.trace_smtp_mode.php) |

<a name="config.tls_verify_mode"></a>
## Name

tls_verify_mode — determine whether a TLS certificate is required

## Synopsis

`TLS_Verify_Mode = "none|require"`

<a name="idp27141680"></a>
## Description

This option determines whether a TLS certificate is required for inbound mail, *if* TLS is started. *It is not a means for requiring TLS* .

Momentum does have an authentication hook (core_validate_auth_hook) for Lua scripts to handle authentication results. Additionally, if the connection has been upgraded to TLS, the vctx will contain the key `tls` with a value of `on`. Using these two methods, you should be able to require successful authentication and a TLS connection.

This option can be set to the following:

*   `none` – No client certificate is required, and any certificate presented is ignored. If an invalid certificate is presented, no action is taken.

*   `require` – A client certificate is required, and it will be verified. If an invalid certificate is presented, the policy scripts determine the action taken.

*   *not specified*           – A client certificate is optional, and any certificate presented will be verifed. However, there is no built-in action based on whether the certificate passes or fails verification. The policy scripts determine the action taken.

By default, this option is not specified.

<a name="idp27152624"></a>
## Scope

`tls_verify_mode` is valid in the listener, listen, peer and pathway scopes.

| [Prev](config.tls_verify.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.trace_smtp_mode.php) |
| tls_verify  | [Table of Contents](index.php) |  trace_smtp_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)