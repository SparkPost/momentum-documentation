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

| 2.4. SMPP Caveats |
| [Prev](mobility.throttling.php)  | Chapter 2. Mobile Momentum SMPP |  [Next](mobility.configuration.smpp.php) |

## 2.4. SMPP Caveats

Since SMS messages do not contain all the information typically found in a standard email message and because of the difference in recipient addressing—phone numbers versus "user@domain" style addresses—log entries for messages received over SMPP differ from those received over SMTP. Specifically:

*   Envelope MAIL FROM and RCPT TO domain part fields are left blank. Since the source and destination addresses are phone numbers, these numbers are stored in the Envelope MAIL FROM and RCPT TO local part fields. This data is duplicated in the slots for the message From and To headers, respectively.

*   There is no explicit subject of an SMS message. Because some SMS-to-email gateways use the subject field for relaying the message, to respect the privacy of the sender no subject is logged.

| [Prev](mobility.throttling.php)  | [Up](momentum.mobility.php) |  [Next](mobility.configuration.smpp.php) |
| 2.3. Throttling  | [Table of Contents](index.php) |  2.5. smpp_logger Module Configuration |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)