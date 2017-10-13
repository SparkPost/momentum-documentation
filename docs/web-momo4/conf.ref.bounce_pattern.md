<a name="conf.ref.bounce_pattern"></a>
## Name

bounce_pattern — configure the pattern that inbound email addresses must match in order to be considered bounces.

## Synopsis

`Bounce_Pattern = "Perl-compatible regular expression"`

<a name="idp23754336"></a>
## Description

When a message passed through the server bounces due to an in-band SMTP failure or is received out-of-band as a notification of failed delivery, this option will qualify the "original sending" email address as suitable for bounce classification and processing. For in-band bounces, the "original sending" email address is the envelope sender. For out-of-band delivery failures the "original sending" address is the envelope recipient. The ultimate behavior of bounce handling is dictated by the the `Bounce_Behavior` configuration setting.

If you leave the `Bounce_Pattern` setting unconfigured, then any mail to any of the `Bounce_Domains` will be considered a bounce, and processed as such.

To treat all mails originally sent from an email address like bounces-####-###@bounces.example.com as eligible for bounce processing, you would specify:

```
Bounce_Domains = ( bounces.example.com )
Bounce_Pattern = "^bounces-\d+-\d+@"
```
<a name="idp23759984"></a>
## Scope

bounce_pattern is valid in the domain and global scopes.

<a name="idp23761824"></a>
## See Also

[bounce_domains](conf.ref.bounce_domains.php "bounce_domains"), [bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior"), [bounce_suppress_list](conf.ref.bounce_suppress_list.php "bounce_suppress_list"), and [Section 71.13, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "71.13. bounce_logger – Momentum-Style Bounce Logging")

| [Prev](conf.ref.bounce_domains.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.bounce_suppress_list.php) |
| bounce_domains  | [Table of Contents](index.php) |  bounce_suppress_list |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)