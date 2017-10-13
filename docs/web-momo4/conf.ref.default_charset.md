| default_charset |
| [Prev](conf.ref.default_binding.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.delay_dsn_max_retry_interval.php) |

<a name="conf.ref.default_charset"></a>
## Name

default_charset — control usage of the "default" character set

## Synopsis

`default_charset = "charset"`

<a name="idp24195184"></a>
## Description

`default_charset` is intended to allow the customer to specify what the default assumed character set within the product is. This does not prevent the product from interpreting other character sets as normal. This is helpful to international customers, as some MUAs do not correctly represent their charset.

The default value is `"us-ascii"`

<a name="idp24198640"></a>
## Scope

default_binding is valid in the global, pathway_group, and pathway scopes.

| [Prev](conf.ref.default_binding.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.delay_dsn_max_retry_interval.php) |
| default_binding  | [Table of Contents](index.php) |  delay_dsn_max_retry_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)