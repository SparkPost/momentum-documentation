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

| 5.9. Message Mode |
| [Prev](mobility.best.practices.logging.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](faq.php) |

## 5.9. Message Mode

By default, SMS submission to the SMSC operate in store-and-forward message mode. In the SMPP protocol, this means that as soon as the SMSC receives the short message submission (via submit_sm), it responds immediately (submit_sm_resp). Subsequent failures to deliver the message to the destination are indicated asynchronously in the delivery receipt. An optional mode of SMS submission is transaction message mode. Transaction message mode may by selected for an SMPP domain or binding using the [smpp_smsc_default_message_mode](mobility.conf.smpp_smsc_default_message_mode.php "smpp_smsc_default_message_mode") and [smpp_message_mode](mobility.conf.smpp_message_mode.php "smpp_message_mode") configuration parameters. In transaction mode, the SMSC does not send submit_sm_resp until the short message has been delivered to the handset. Before using transaction mode, check with the mobile network operator to ensure support for this option.

| [Prev](mobility.best.practices.logging.php)  | [Up](mobility.best.practices.php) |  [Next](faq.php) |
| 5.8. SMPP Logging  | [Table of Contents](index.php) |  Chapter 6. FAQ |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)