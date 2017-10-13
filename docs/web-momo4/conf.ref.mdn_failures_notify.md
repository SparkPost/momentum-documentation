<a name="conf.ref.mdn_failures_notify"></a>
## Name

mdn_failures_notify — mailbox to which to send null recipient MDNs

## Synopsis

`mdn_failures_notify = "postmaster@example.com"`

<a name="idp25490400"></a>
## Description

If `mdn_failures_notify` is set to an email address, Momentum will send the MDN to that mailbox, allowing a postmaster to review and perhaps take action on those bounces.

When generating an MDN, Momentum will skip the bounce message generation if the message that triggered it was from the NULL sender, as there is no information about whom should be notified.

<a name="idp25493424"></a>
## Scope

mdn_failures_notify is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.max_timed_events_per_iter.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.memory_goal.php) |
| max_timed_events_per_iter  | [Table of Contents](index.php) |  memory_goal |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)