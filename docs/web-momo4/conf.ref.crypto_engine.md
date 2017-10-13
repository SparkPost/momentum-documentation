<a name="conf.ref.crypto_engine"></a>
## Name

crypto_engine — enable hardware cryptography acceleration

## Synopsis

crypto_engine = "*`engine_name`*"

<a name="idp24089264"></a>
## Description

`crypto_engine` is an option to allow hardware acceleration of the cryptographic processes in Momentum. The right hand side takes the value of the specific hardware acceleration engine present. There is no default value for this option.

The example below shows how to configure Momentum to use the pkcs12 engine.

<a name="example.crypto_engine"></a>

**Example 72.5. crypto_engine example**

`crypto_engine = "pkcs12"`
<a name="idp24094704"></a>
## Scope

crypto_engine is valid in the global scope.

| [Prev](conf.ref.control_client_timeout.php)  | [Up](config.options.ref.php) |  [Next](config.crypto_lock_method.php) |
| control_client_timeout  | [Table of Contents](index.php) |  crypto_lock_method |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)