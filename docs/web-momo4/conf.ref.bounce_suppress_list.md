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

| bounce_suppress_list |
| [Prev](conf.ref.bounce_pattern.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.bounces_inline_original.php) |

<a name="conf.ref.bounce_suppress_list"></a>
## Name

bounce_suppress_list — configure a list of email addresses that may not be considered original recipients.

## Synopsis

`bounce_suppress_list = "comma-separated list of email addresses"`

<a name="idp23773152"></a>
## Description

When a Message Delivery Notification (MDN) is received, this option will suppress certain addresses from being identified as the purported original sender.

An MDN is an out-of-band notification of delivery failure. Momentum's out-of-band bounce processing capability includes an algorithm which attempts to extract the original recipient from the MDN. You can use the `Bounce_Suppress_List` option to improve the accuracy of this algorithm by excluding addresses and/or domains that you know could not have been the original recipient.

To disqualify an email address like `bounces@bounces.example.com` from being considered a potential original recipient, you would specify:

```
bounce_domains = ( bounces.example.com )
bounce_suppress_list = "bounces@bounces.example.com"
```

You can also specify domains that you would like to disqualify, as shown below. Multiple addresses can be specified by using a comma separated list.

```
bounce_domains = ( bounces.example.com )
bounce_suppress_list = "bounces@bounces.example.com,@bounces.example.org"
```
<a name="idp23779616"></a>
## Scope

`bounce_suppress_list` is valid in the global scope.

<a name="idp23781888"></a>
## See Also

[bounce_domains](conf.ref.bounce_domains.php "bounce_domains"), [bounce_pattern](conf.ref.bounce_pattern.php "bounce_pattern"), [bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior"), and [Section 71.13, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "71.13. bounce_logger – Momentum-Style Bounce Logging")

| [Prev](conf.ref.bounce_pattern.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.bounces_inline_original.php) |
| bounce_pattern  | [Table of Contents](index.php) |  bounces_inline_original |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)