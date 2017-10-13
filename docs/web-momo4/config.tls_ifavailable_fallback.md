<a name="config.tls_ifavailable_fallback"></a>
## Name

tls_ifavailable_fallback — determine the behavior if TLS negotiation fails

## Synopsis

`TLS_Ifavailable_fallback = "true|false"`

<a name="idp27055504"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1.

When opportunistic TLS is enabled, this option determines the behavior if the TLS negotiation fails.

This option can be set to the following:

*   `true` – Momentum will immediately try to send the message as plain-text if the remote mail exchange supports TLS but the negotiation fails.

*   `false` – The message is put back into the delayed queue and retried later. The retries will also be attempted with TLS. This behavior is the same as in prior Momentum versions.

The default value is `true`.

<a name="idp27064000"></a>
## Scope

`tls_ifavailable_fallback` is valid in the binding, binding_group, domain, and global scopes.

| [Prev](config.tls_engine.php)  | [Up](config.options.ref.php) |  [Next](config.tls_key.php) |
| tls_engine  | [Table of Contents](index.php) |  tls_key |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)