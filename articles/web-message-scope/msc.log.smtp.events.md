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

| 3.3. Logging SMTP Events |
| [Prev](msc_logger.runtime.php)  | Chapter 3. The msc_logger Module |  [Next](ch03s04.php) |

## 3.3. Logging SMTP Events

The logger logs several event types for messages traversing the SMTP protocol. The events are logged by attaching to relevant, existing hook points.

The event types are as follows:

*   Delivery (SMTP:Delivery)

*   Reception (SMTP:Reception)

*   Rejection (SMTP:Rejection)

*   Transient failure (SMTP:Transfail)

*   Permanent failure (SMTP:Permfail)

*   Out-of-band bounces (SMTP:Bounce)

The hook points are as shown below:

*   Rejection: log_rejection

*   Reception: log_reception

*   Bounce: validate_data_spool_each_rcpt_hook to capture out-of-band bounces, per the bounce_logger module: must be addressed to a bounce domain and follow the other logic in ec_queue_outofband_bounce in bounce_logger

*   Delivery: log_delivery

*   transient failure: log_transient failure

*   permanent failure: log_permanent failure

For documentation of these hook points see "[Hooks in the core scope](https://support.messagesystems.com/docs/web-c-api/hooks.core.php)".

For every event logged, the following information is collected in this order, if available (and configured to be logged):

*   Timestamp

*   Thread ID

*   Spool ID

*   Batch ID

*   Connection ID

*   Message-ID header

*   Event type

*   Envelope MAIL FROM local part

*   Envelope MAIL FROM domain part

*   Message "From" header

*   Envelope RCPT TO local part

*   Envelope RCPT TO domain part

*   Message "To" header

*   Source IP address

*   Message "Subject" header

*   Device type

*   Partner data

*   User data

*   Final rule

*   Remote response

| [Prev](msc_logger.runtime.php)  | [Up](modules.msc_logger.php) |  [Next](ch03s04.php) |
| 3.2. Runtime Usage  | [Table of Contents](index.php) |  3.4. Logging of SMPP Events |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)