| min_dns_ttl |
| [Prev](conf.ref.mime_parse_large_messages_during_reception.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.mx_failures_fallback_to_a.php) |

<a name="conf.ref.min_dns_ttl"></a>
## Name

min_dns_ttl — override DNS TTLs smaller than this value

## Synopsis

`min_dns_ttl = 0`

<a name="idp25577104"></a>
## Description

Any DNS response with a TTL of less than the value of `min_dns_ttl` will be increased to the value of `min_dns_ttl`. The default value is `0`.

<a name="idp25580336"></a>
## Scope

min_dns_ttl is valid in the global scope.

<a name="idp25582160"></a>
## See Also

[max_dns_ttl](conf.ref.max_dns_ttl.php "max_dns_ttl")

| [Prev](conf.ref.mime_parse_large_messages_during_reception.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.mx_failures_fallback_to_a.php) |
| mime_parse_large_messages_during_reception  | [Table of Contents](index.php) |  mx_failures_fallback_to_a |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)