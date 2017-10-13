| pcre_cache_ttl |
| [Prev](conf.ref.pcre_cache_size.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.permastore_interval.php) |

<a name="conf.ref.pcre_cache_ttl"></a>
## Name

pcre_cache_ttl — set the maximum TTL for the ec_pcre_compile cache

## Synopsis

`pcre_cache_size = 300`

<a name="idp25848688"></a>
## Description

pcre_cache_size and pcre_cache_ttl together set the maximum size and TTL of the ec_pcre_compile cache. This cache is used by sieve, sievelib, the bounce_classifier code and the vctx_filter module to cache compiled regular expressions. It should not normally be necessary to modify these values.

The default value is `300`.

<a name="idp25851712"></a>
## Scope

pcre_cache_ttl is valid in the global scope.

<a name="idp25853552"></a>
## See Also

[pcre_cache_size](conf.ref.pcre_cache_size.php "pcre_cache_size")

| [Prev](conf.ref.pcre_cache_size.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.permastore_interval.php) |
| pcre_cache_size  | [Table of Contents](index.php) |  permastore_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)