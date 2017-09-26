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

| Chapter 41. Tracking Engagement for SMTP |
| [Prev](smtp_injection.php)  | Part VI. SMTP Injection |  [Next](x-msys-api_header.php) |

## Chapter 41. Tracking Engagement for SMTP

**Table of Contents**

<dl class="toc">

<dt>[41.1\. Introduction](engagement_tracking_smtp.php#engagement_tracking_smtp.intro)</dt>

<dt>[41.2\. Using the X-MSYS-API Header for Engagement Tracking](x-msys-api_header.php)</dt>

<dt>[41.3\. Using Policy for Engagement Tracking](engagement_tracking_smtp.policy.php)</dt>

<dt>[41.4\. Escaping {{ and }} in SMTP Message Body](engagement_tracking_smtp.escaping.php)</dt>

</dl>

**Configuration Change. ** Engagement tracking for SMTP injections is available as of version 4.1-HF4.

## 41.1. Introduction

Understanding how your messaging is or isn't performing is a critical factor in creating a successful campaign. Just knowing that your messages are being delivered is not enough. You need to know how your customers interact with your message content. Are your customers opening your messages? Are they clicking the links you provide? Momentum provides real-time event tracking data, enabling you to track campaigns as they are being sent and to make modifications to improve customer engagement.

Engagement describes how a recipient interacts with your message. An engagement event occurs when the recipient opens an email or clicks a link within an email. Engagement tracking is globally enabled or disabled in Momentum's configuration. When a message is injected using SMTP, you can override the configuration for a specific message by specifying the attributes in an optional X-MSYS-API header or through policy by specifying the corresponding context variables. See [Section 41.2, “Using the X-MSYS-API Header for Engagement Tracking”](x-msys-api_header.php "41.2. Using the X-MSYS-API Header for Engagement Tracking") and [Section 41.3, “Using Policy for Engagement Tracking”](engagement_tracking_smtp.policy.php "41.3. Using Policy for Engagement Tracking"), respectively.

### Note

To track engagement in SMTP messages, you must load the [smtpapi module](modules.smtpapi.php "71.67. smtpapi – SMTP Engagement Tracking") and configure the associated configuration options. See [Section 71.67.4, “Configuration Options for Engagement Tracking”](modules.smtpapi.php#modules.smtpapi.config.options "71.67.4. Configuration Options for Engagement Tracking"). By default, open tracking and click tracking for SMTP injections are disabled in Momentum's configuration and the associated configuration options are set to default values.

For the order of precedence of the engagement tracking options, see [Section 71.67.3, “Enabling Engagement Tracking”](modules.smtpapi.php#modules.smtpapi.enable "71.67.3. Enabling Engagement Tracking").

When engagement tracking is enabled, you can also specify engagement data for the message by including the X-MSYS-API header or by using the Lua policy context variables. This data is included in the tracked URLs for each message. For open tracking, Momentum inserts an open-tracked image into the message. For click tracking, Momentum converts the target link into a click-tracked link. By default, metadata is included for open and click tracking, if specified.

### Note

If you want to exclude metadata from click tracking, change the configuration option in the engagement_tracker module. See [Section 71.32, “engagement_tracker – HTTP Engagement Tracking”](modules.engage_tracker.php "71.32. engagement_tracker – HTTP Engagement Tracking").

| [Prev](smtp_injection.php)  | [Up](p.smtp_injections.php) |  [Next](x-msys-api_header.php) |
| Chapter 40. Adjusting your Client Mail Application  | [Table of Contents](index.php) |  41.2. Using the X-MSYS-API Header for Engagement Tracking |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)