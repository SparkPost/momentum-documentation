| dns_fallback_to_tcp |
| [Prev](conf.ref.dns_failures_to_purge.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.domain_for_unqualified_recipient_addresses.php) |

<a name="conf.ref.dns_fallback_to_tcp"></a>
## Name

dns_fallback_to_tcp — whether or not to fail over to TCP in place of UDP

## Synopsis

`dns_fallback_to_tcp = false`

<a name="idp24409248"></a>
## Description

Momentum uses User Datagram Protocol (UDP) for DNS queries. However, the size of a UDP packet is limited and a DNS query can exceed it. Set this option to `true` and Momentum tries first with UDP then fails over to TCP if the query response is too large. This avoids having lengthy DNS responses truncated.

The default value is `false`.

<a name="idp24412256"></a>
## Scope

`dns_fallback_to_tcp` is valid in the global scope.

| [Prev](conf.ref.dns_failures_to_purge.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.domain_for_unqualified_recipient_addresses.php) |
| dns_failures_to_purge  | [Table of Contents](index.php) |  domain_for_unqualified_recipient_addresses |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)