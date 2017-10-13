| tls_key |
| [Prev](config.tls_ifavailable_fallback.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tls_protocols.php) |

<a name="config.tls_key"></a>
## Name

tls_key — TLS key to use for outbound or inbound mail

## Synopsis

`TLS_Key = "/path/to/key"`

<a name="idp27073776"></a>
## Description

TLS_Key specifies the location of the PEM encoded key associated with the certificate if the key is not contained within the certificate file. Both TLS_Certificate and TLS_Key are optional and the default behavior is to not present a client certificate to the remote mail exchange at all.

<a name="idp27075872"></a>
## Scope

`tls_key` is valid in the ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group and peer scopes.

| [Prev](config.tls_ifavailable_fallback.php)  | [Up](config.options.ref.php) |  [Next](config.tls_protocols.php) |
| tls_ifavailable_fallback  | [Table of Contents](index.php) |  tls_protocols |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)