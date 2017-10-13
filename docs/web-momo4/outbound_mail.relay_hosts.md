| 25.7. Outbound Email Relay |
| [Prev](outbound_mail.outbound.xclient.php)  | Chapter 25. Configuring Outbound Mail Delivery |  [Next](log_aggregation.php) |

## 25.7. Outbound Email Relay

When configuring Momentum as an outbound e-mail relay, you must take care to not expose your system to abuse by allowing unauthorized machines to send e-mail to domains for which the local instance does not provide mail service. Doing so makes your system an "open relay." Only trusted machines should be allowed to connect and inject mails. The `relay_hosts` option controls this setting. For details, see [relay_hosts](conf.ref.relay_hosts.php "relay_hosts").

| [Prev](outbound_mail.outbound.xclient.php)  | [Up](outbound_mail.php) |  [Next](log_aggregation.php) |
| 25.6. Outbound XCLIENT support  | [Table of Contents](index.php) |  Chapter 26. Log Aggregation |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)