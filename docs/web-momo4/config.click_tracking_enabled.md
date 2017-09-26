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

| click_tracking_enabled |
| [Prev](conf.ref.clear_mail_queue_maintainers.php)  | Chapter 72. Configuration Options Reference |  [Next](config.click_tracking_scheme.php) |

<a name="config.click_tracking_enabled"></a>
## Name

click_tracking_enabled — enable or disable click tracking for SMTP injections

## Synopsis

`Click_Tracking_Enabled = "true|false"`

<a name="idp23874992"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1-HF4.

When click tracking is enabled, Momentum converts the target links in the top text/plain and top text/html part of SMTP-injected messages into click-tracked links . When a recipient clicks the link, Momentum reports this engagement event as a click.

This option can be set to the following:

*   `true` – Click tracking event data will be available for SMTP-injected messages.

*   `false` – Click tracking event data will not be available for SMTP-injected messages.

The default value is `false`.

The corresponding context variable is `smtpapi_click_tracking`, and the corresponding X-MSYS-API header field is `options.click_tracking` .

<a name="idp23885264"></a>
## Scope

`click_tracking_enabled` is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scope.

| [Prev](conf.ref.clear_mail_queue_maintainers.php)  | [Up](config.options.ref.php) |  [Next](config.click_tracking_scheme.php) |
| clear_mail_queue_maintainers  | [Table of Contents](index.php) |  click_tracking_scheme |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)