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

| D.13. The START Errors |
| [Prev](SSL-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](TIME-panic-log-errors.php) |

## D.13. The START Errors

In this section errors are sorted by severity.

<a name="START-table-panic-log-errors"></a>

**Table D.13. START errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | START | Cannot initialize dns-cache lock attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | START | Cannot initialize dns-cache lock | An internal error occurred. Contact support if it persists. |
| DCRITICAL | START | THPL-*`xxxxx`*: failed to init thread attributes | An internal error occurred. Contact support if it persists. |
| DCRITICAL | START | THPL-*`xxxxx`*: failed to set threads to detach | An internal error occurred. Contact support if it persists. |
| DCRITICAL | START | THPL-*`xxxxx`*: failed to init *`name`* queue | An internal error occurred. Contact support if it persists. |
| DCRITICAL | START | THPL-*`xxxxx`*: mutex init failed | An internal error occurred. Contact support if it persists. |
| DCRITICAL | START | THPL-*`xxxxx`*: failed to init backlog semaphore for *`q->name`* queue | An internal error occurred. Contact support if it persists. |
| DERROR | START | failed to open manifest file *`fullname`*: *`strerror`* | An internal error occurred. Contact support if it persists. |
| DERROR | START | THPL-*`xxxxx`*: failed to set stack size to *`Q->stack_size`*, using default | An internal error occurred. Contact support if it persists. |
| DERROR | START | THPL-*`xxxxx`* but there are no threads configured in the *`q->name`* pool! | An internal error occurred. Contact support if it persists. |
| DWARNING | START | THPL-*`xxxxx`* waiting on *`size`* jobs in *`q->name`* pool of *`q->thread_count`* threads | An internal error occurred. Contact support if it persists. |

| [Prev](SSL-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](TIME-panic-log-errors.php) |
| D.12. The SSL Errors  | [Table of Contents](index.php) |  D.14. The TIME Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)