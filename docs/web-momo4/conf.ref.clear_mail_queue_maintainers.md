| clear_mail_queue_maintainers |
| [Prev](conf.ref.chroot.php)  | Chapter 72. Configuration Options Reference |  [Next](config.click_tracking_enabled.php) |

<a name="conf.ref.clear_mail_queue_maintainers"></a>
## Name

clear_mail_queue_maintainers — reschedule the mail queue maintainer

## Synopsis

`clear_mail_queue_maintainers = true`

<a name="idp23860736"></a>
## Description

`clear_mail_queue_maintainers` enables you to remove and reschedule events in the mail queue maintainer. This prevents you from ending up with redundant events scheduled for a given domain, which could potentially cause abnormally high memory usage.

The default value is `true`.

<a name="idp23865584"></a>
## Scope

This option is valid in the global scope.

| [Prev](conf.ref.chroot.php)  | [Up](config.options.ref.php) |  [Next](config.click_tracking_enabled.php) |
| chroot  | [Table of Contents](index.php) |  click_tracking_enabled |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)