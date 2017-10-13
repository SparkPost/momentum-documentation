| use_ipv6 |
| [Prev](conf.ref.use_iflist_cache.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.use_mmap.php) |

<a name="conf.ref.use_ipv6"></a>
## Name

use_ipv6 — Affects the selection of IPv6 hosts in the SMTP client

## Synopsis

`use_ipv6 = false`

`use_ipv6 = true`

<a name="idp27307568"></a>
## Description

When set to false, Momentum will ignore `AAAA` records in the list of hosts resolved from MX lookups. This will effectively prevent the use of outbound IPv6 SMTP connections. The AAAA records will not be visible in the output of the **dig** console command either.

The default is `false`.

For a discussion of using IPv6 addresses with listeners, see [Section 15.4.5, “Listeners and IPv6 Addresses”](listeners.php#listeners.ipv6 "15.4.5. Listeners and IPv6 Addresses").

<a name="idp27312464"></a>
## Scope

use_ipv6 is valid in the global scope.

| [Prev](conf.ref.use_iflist_cache.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.use_mmap.php) |
| use_iflist_cache  | [Table of Contents](index.php) |  use_mmap |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)