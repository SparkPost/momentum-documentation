<a name="conf.ref.mailerdaemon"></a>
## Name

mailerdaemon — set the From: address for MDNs

## Synopsis

`mailerdaemon = "mailer-daemon@hostname"`

<a name="idp25180544"></a>
## Description

When sending bounce messages upon a permanent delivery failure of a message, the recipient is specified as the original sender, the envelop sender is null, but the "From:" header is dictated by Momentum as "mailer-daemon@hostname" where hostname is the hostname of the local machine, as returned by `gethostname` . Alternatively, it can be explicitly set using this option.

<a name="idp25183168"></a>
## Scope

mailerdaemon is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.mail_queue_check_vm_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.mailfrom_timeout.php) |
| mail_queue_check_vm_interval  | [Table of Contents](index.php) |  mailfrom_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)