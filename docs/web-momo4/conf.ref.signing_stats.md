| signing_stats |
| [Prev](conf.ref.server_reserve_outbound_connections.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.siv_throttle_cache_size.php) |

<a name="conf.ref.signing_stats"></a>
## Name

signing_stats — control how signing statistics are recorded

## Synopsis

`signing_stats = "all"`

`signing_stats = "global"`

`signing_stats = "off"`

<a name="idp26572096"></a>
## Description

This option is used to control whether signing statistics are recorded per binding, as a global summary only, or disabled entirely. You might consider setting this option to `global` or `off` if you have a very large number of bindings and do not need to track message signing statistics such as DKIM on a per-binding basis.

Default value is `all`.

<a name="idp26576000"></a>
## Scope

`signing_stats` is valid in the global scope.

<a name="idp26578256"></a>
## See Also

[signing_stats](console_commands.signing_stats.php "signing_stats"), [signing_stats reset](console_commands.signing_stats_reset.php "signing_stats reset"), [Chapter 22, *Using Yahoo! DomainKeys*](using_domainkeys.php "Chapter 22. Using Yahoo! DomainKeys") , and [Chapter 23, *Using DomainKeys Identified Mail (DKIM) Signatures*](using_dkim.php "Chapter 23. Using DomainKeys Identified Mail (DKIM) Signatures") 

| [Prev](conf.ref.server_reserve_outbound_connections.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.siv_throttle_cache_size.php) |
| server_reserve_outbound_connections  | [Table of Contents](index.php) |  siv_throttle_cache_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)