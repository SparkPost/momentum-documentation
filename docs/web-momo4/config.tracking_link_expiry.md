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

| tracking_link_expiry |
| [Prev](config.tracking_domain.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.transfail_drain_rate.php) |

<a name="config.tracking_link_expiry"></a>
## Name

tracking_link_expiry — set the expiration time for engagement tracking for SMTP injections

## Synopsis

`Tracking_Link_Expiry = 31536000`

<a name="idp27195200"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1-HF4.

If open or click tracking is enabled, this option determines the amount of time, in seconds, that Momentum will wait for an engagement event in SMTP-injected messages.

This option can be set to any integer value.

The default value is `31536000` seconds (365 days).

The corresponding context variable is `smtpapi_tracking_link_expiry`. There is no corresponding X-MSYS-API header field.

<a name="idp27201248"></a>
## Scope

`tracking_link_expiry` is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scope.

| [Prev](config.tracking_domain.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.transfail_drain_rate.php) |
| tracking_domain  | [Table of Contents](index.php) |  transfail_drain_rate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)