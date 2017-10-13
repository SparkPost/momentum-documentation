| ssl_lock_method |
| [Prev](conf.ref.spoolbase.php)  | Chapter 72. Configuration Options Reference |  [Next](config.starttls_injection_policy.php) |

<a name="config.ssl_lock_method"></a>
## Name

ssl_lock_method — the SSL lock method

## Synopsis

`SSL_Lock_Method = "mutex|spinlock"`

<a name="idp26746048"></a>
## Description

This option specifies the SSL lock method. This option should be changed in consultation with Message Systems support only if SSL performance issues are encountered with the default method.

This option can be set to the following:

*   `mutex`

*   `spinlock`

*   `default`

Changing the value of this option at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

The default value for this option is `mutex`.

<a name="idp26754432"></a>
## Scope

`ssl_lock_method` is valid in the global scope.

| [Prev](conf.ref.spoolbase.php)  | [Up](config.options.ref.php) |  [Next](config.starttls_injection_policy.php) |
| spoolbase  | [Table of Contents](index.php) |  starttls_injection_policy |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)