Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| bounce_pattern |
| [Prev](conf.ref.bounce_domains.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.bounce_suppress_list.php) |

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