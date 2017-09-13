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

| D.3. The DNS Errors |
| [Prev](DB-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](DNSDS-panic-log-errors.php) |

## D.3. The DNS Errors

In this section errors are sorted by severity.

<a name="DNS-table-panic-log-errors"></a>

**Table D.3. DNS errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | DNS | CONN-*`xxxxx`* would overflow connection list | An internal error occurred, please contact support. |
| DCRITICAL | DNS | ares_init failure: *`ares_strerror`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | DNS | ARDS-*`xxxxx`* timeout event mismatch! | An internal error occurred. Contact support if it persists. |
| DERROR | DNS | DNS:*`file`*:*`line`* | An internal error occurred. Contact support if it persists. |
| DERROR | DNS | DNS-*`xxxxx`* | An internal error occurred. Contact support if it persists. |
| DERROR | DNS | DNS-*`xxxxx`* *`qdcount`* | An internal error occurred. Contact support if it persists. |
| DERROR | DNS | DNS-*`xxxxx`* DNS state machine problem, domain record not added for *`qdomain`* status *`status`* | An internal error occurred. Contact support if it persists. |
| DERROR | DNS | ares_init failure: *`server`* host not found | An internal error occurred. Contact support if it persists. |
| DERROR | DNS | ares_init failure: *`error`* | An internal error occurred. Contact support if it persists. |
| DERROR | DNS | ARES-*`xxxxx`* OOB and recv failed: is your local DNS functioning correctly? | An internal error occurred. Contact support if it persists. |
| DWARNING | DNS | dns_cache: error processing a record | An internal error occurred. Contact support if it persists. |
| DWARNING | DNS | dns_cache: duplicate node found when inserting | An internal error occurred. Contact support if it persists. |
| DWARNING | DNS | DNS-*`xxxxx`* *`mxs->name`* | An internal error occurred. Contact support if it persists. |

| [Prev](DB-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](DNSDS-panic-log-errors.php) |
| D.2. The DB Errors  | [Table of Contents](index.php) |  D.4. The DNSDS Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)