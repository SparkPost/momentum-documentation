| generate_bounces_for_multi_recipient_policy_rejections |
| [Prev](conf.ref.generate_bounces.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.generate_delay_dsn.php) |

<a name="conf.ref.generate_bounces_for_multi_recipient_policy_rejections"></a>
## Name

generate_bounces_for_multi_recipient_policy_rejections — generate MDNs after reception for policy rejections

## Synopsis

`generate_bounces_for_multi_recipient_policy_rejections = true`

`generate_bounces_for_multi_recipient_policy_rejections = false`

<a name="idp24773552"></a>
## Description

If you have configured a module or a policy script to reject mail in the each_rcpt phase of the validation process, then it is possible that you don't want to generate an MDN for that rejected mail, on the grounds that it was unwanted mail and likely has a bogus sender. If that is the case, setting `generate_bounces_for_multi_recipient_policy_rejections` to `false` will cause Momentum to suppress MDN generation for multi-recipient mail when some, but not all, recipients were rejected.

When all recipients reject the mail, Momentum will respond with a failure code to the sender; an MDN does not need to be generated in this case.

The default value is `true` for conformance with the SMTP specification.

<a name="idp24778288"></a>
## Scope

generate_bounces_for_multi_recipient_policy_rejections is valid in the global, pathway_group, and pathway scopes.

| [Prev](conf.ref.generate_bounces.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.generate_delay_dsn.php) |
| generate_bounces  | [Table of Contents](index.php) |  generate_delay_dsn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)