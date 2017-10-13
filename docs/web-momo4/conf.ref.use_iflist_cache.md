| use_iflist_cache |
| [Prev](conf.ref.unsafe_spool.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.use_ipv6.php) |

<a name="conf.ref.use_iflist_cache"></a>
## Name

use_iflist_cache — Whether or not to cache the list of network interfaces configured by the system

## Synopsis

`use_iflist_cache = 0`

<a name="idp27289968"></a>
## Description

This option determines whether or not to use cached information about the state of the network interfaces; namely which ones are in use and their state.

The default value is `0`. When this option is off and DuraVIP™ is in use, Momentum must traverse the entire list of interfaces. Enable this option if you are using a large number of DuraVIP™s.

Changing the value of this options at runtime requires restarting the ecelerity process–issuing the ec_console command **config reload**        will not suffice.

<a name="idp27294896"></a>
## Scope

`use_iflist_cache` is valid in the global scope.

<a name="idp27297152"></a>
## See Also

[Chapter 27, *DuraVIP™: IP Fail over*](cluster.config.duravip.php "Chapter 27. DuraVIP™: IP Fail over") 

| [Prev](conf.ref.unsafe_spool.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.use_ipv6.php) |
| _unsafe_spool  | [Table of Contents](index.php) |  use_ipv6 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)