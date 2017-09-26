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

| 5.8. SMPP Logging |
| [Prev](mobility.best.practices.throttling.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](mobility.best.practices.message.mode.php) |

## 5.8. SMPP Logging

The SMPP Logger records SMPP events in a compact format. Log records are useful for report generation and problem analysis. Configuration options in [Section 2.5, “smpp_logger Module Configuration”](mobility.configuration.smpp.php "2.5. smpp_logger Module Configuration") determine which events are recorded. Mobile Momentum records the following event types in the SMPP log:

<a name="mobility.best.practices.smpp.event.types"></a>

**Table 5.1. SMPP event types**

| Log Event | Configuration Parameter | Description |
| --- | --- | --- |
| Receptions | log_reception | SMS messages successfully received from the SMSC |
| Deliveries | log_delivery | SMS messages successfully delivered to the SMSC |
| Status | log_status | Status, as indicated in delivery receipts, of previously sent SMS messages |
| Temporary Failures | log_tempfail | Failure while sending an SMS message, but eligible for retry |
| Permanent Failures | log_permfail | Failure while sending an SMS message, not eligible for retry |

Logging of each event type may be enabled or disabled by setting the corresponding configuration parameter to either 'true' or 'false'. An additional configuration parameter for each event type specifies the format and content of log entries. These parameters are named with the suffix `_format` added to each of the event type parameters; for example, `log_reception_format` specifies the format and content of SMS reception log entries when `log_reception` = `true`. The [Section 2.5.1, “Log Format Macros”](mobility.configuration.smpp.php#mobility.log.format.macros "2.5.1. Log Format Macros") section describes the options associated with the content/format configuration parameters.

| [Prev](mobility.best.practices.throttling.php)  | [Up](mobility.best.practices.php) |  [Next](mobility.best.practices.message.mode.php) |
| 5.7. Throttling  | [Table of Contents](index.php) |  5.9. Message Mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)