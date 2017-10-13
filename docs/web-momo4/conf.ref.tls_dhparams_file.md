<a name="conf.ref.tls_dhparams_file"></a>
## Name

tls_dhparams_file — specifies the file of Diffie Hellman (DHE) parameters that add per-session randomness to the encryption. Default parameters are built in the product if none are specified.

## Synopsis

`tls_dhparams_file = /path/to/dh.pem`

<a name="idp27008112"></a>
## Description

The tls_dhparams_file option can be generated with the file `openssl dhparam -out /path/to/dh512.pem 512`. It is recommended that you regularly (e.g., weekly) regenerate this file.

This option has no default value; instead, it uses internally-specified DHE parameters.

<a name="idp27011072"></a>
## Scope

tls_dhparams_file is valid in the global scope.

| [Prev](config.tls_client_ca.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.tls_enable_dhe_ciphers.php) |
| tls_client_ca  | [Table of Contents](index.php) |  tls_enable_dhe_ciphers |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)