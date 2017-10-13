## 71.11. bind_address_secondary – Dual-stack IPv4/IPv6 Support

<a class="indexterm" name="idp20047296"></a>

**Configuration Change. ** This feature is available in Momentum 4.2 and later.

The bind_address_secondary module allows a binding to attach itself to an ipv6 address as well as a ipv4 one, supporting multiple IP addresses for dual stack. The secondary could be ipv6 or ipv4\. In the dual stack case, it is desirable to select the appropriate address family for a given downstream destination (ie, MX). This module supports one IP address per address family per binding.

### 71.11.1. Configuration

The bind_address_secondary module is enabled as follows:

<a name="modules.bind_address_secondary.example"></a>

**Example 71.19. bind_address_secondary Configuration**

bind_address_secondary {}
binding "whatever" {
  bind_address_secondary = *`whatever`*
}

| [Prev](modules.beik.php)  | [Up](modules.php) |  [Next](modules.bounce_classifier_override.php) |
| 71.10. beik – Symantec Brightmail™ Engine Integration Kit  | [Table of Contents](index.php) |  71.12. bounce_classifier_override – Override/Augment Bounce Classifications |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)