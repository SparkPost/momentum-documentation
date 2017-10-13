| tls_ca |
| [Prev](config.tls_allow_renegotiation.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tls_certificate.php) |

<a name="config.tls_ca"></a>
## Name

tls_ca — certificate authority for outbound mail

## Synopsis

`TLS_Ca = "/path/to/CAlist"`

<a name="idp26941760"></a>
## Description

TLS_Ca specifies a file containing a trusted certificate authority list. These certificates should be in PEM format. This CA list will be referenced if TLS_Verify is set to either `ca` or `host`.

<a name="idp26944640"></a>
## Scope

`tls_ca` is valid in the binding, binding_group, domain and global scopes.

| [Prev](config.tls_allow_renegotiation.php)  | [Up](config.options.ref.php) |  [Next](config.tls_certificate.php) |
| tls_allow_renegotiation  | [Table of Contents](index.php) |  tls_certificate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)