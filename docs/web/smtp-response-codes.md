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

| Appendix B. SMTP Response Codes |
| [Prev](faq.php)  | Part IV. Appendices |  [Next](log_formats.php) |

## SMTP Response Codes

The SMTP response codes and their meanings are shown in the following table.

### Note

Prior to versions 3.1 and 2.2.3.47, Momentum would not respond correctly to a 251 (User not local; Will be forwarded) response from a remote server. It put the message in the delayed queue.

<a name="ug-smtp-codes"></a>

**Table B.1. SMTP response codes**

| Code | Meaning |
| --- | --- |
| 211 | System status, or system help reply |
| 214 | Help message |
| 220 | *`example.com`* service ready |
| 221 | *`example.com`* service closing transmission channel |
| 250 | Requested mail action okay, completed |
| 251 | User not local; will forward to *`forward-path`* |
| 354 | Start mail input; end with <CRLF>.<CRLF> |
| 421 | *`example.com`* service not available, closing transmission channel |
| 450 | Requested mail action not taken: mailbox unavailable |
| 451 | Requested action aborted: error in processing |
| 452 | Requested action not taken: insufficient system storage |
| 500 | Syntax error, command unrecognized |
| 501 | Syntax error in parameters or arguments |
| 502 | Command not implemented |
| 503 | Bad sequence of commands |
| 504 | Command parameter not implemented |
| 550 | Requested action not taken: mailbox unavailable |
| 551 | User not local; please try <forward-path> |
| 552 | Requested mail action aborted: exceeded storage allocation |
| 553 | Requested action not taken: mailbox name not allowed |
| 554 | Transaction failed |

| [Prev](faq.php)  | [Up](p.appendices.php) |  [Next](log_formats.php) |
| Appendix A. Frequently Asked Questions  | [Table of Contents](index.php) |  Appendix C. Log Formats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)