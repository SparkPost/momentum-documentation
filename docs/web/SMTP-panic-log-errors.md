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

| D.11. The SMTP Errors |
| [Prev](NET-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](SSL-panic-log-errors.php) |

## D.11. The SMTP Errors

In this section errors are sorted by severity.

<a name="SMTP-table-panic-log-errors"></a>

**Table D.11. SMTP errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | SMTP | When registering an smtp client state, callback, tostage and tostring must be defined. State name *`state->name`* | An internal error occurred. Contact support if it persists. |
| DERROR | SMTP | CONN-*`xxxxx`* state_closure defined but free func not defined for state *`conn->state->id`* name *`conn->state->name`* which causes a leak. Consult your vendor | Consult your vendor |
| DERROR | SMTP | SMTP-*`xxxxx`* state_closure defined but free func not defined for state *`state->id`* name *`state->name`* which causes a leak. Consult your vendor. | Consult your vendor |
| DERROR | SMTP | SMTP-*`xxxxx`* state machine error | An internal error occurred. Contact support if it persists. |
| DERROR | SMTP | ssl handshake failed... fd *`e->fd`* | An internal error occurred. Contact support if it persists. |
| DERROR | SMTP | SMTP-*`xxxxx`* state machine error | An internal error occurred. Contact support if it persists. |
| DERROR | SMTP | SMTP-*`xxxxx`* State machine error or connection dead in the IDLE handler | Either the state machine is broken, or there is no connection |
| DERROR | SMTP | SMTP-*`xxxxx`* State machine error or connection dead in the NOTCONNECTED handler | This should NEVER happen but just in case |
| DERROR | SMTP | SMTP-*`xxxxx`* DC not defined in smtp_setup_starttls | An internal error occurred. Contact support if it persists. |
| DERROR | SMTP | SMTP-*`xxxxx`* State *`insert_after`* not found | An internal error occurred. Contact support if it persists. |
| DERROR | SMTP | SPSYNC-*`xxxxx`* NULL returned from prepare routine | An internal error occurred. Contact support if it persists. |
| DERROR | SMTP | ESMTP-*`xxxxx`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | SMTP-*`xxxxx`* tls ctx init failed: *`ctx->error_string`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | Failed to negotiate TLS wth *`domain->domain`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | SMTP-*`xxxxx`* *`dr->domain`* on *`e->fd`* *`connh->binding_slot`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ECSTRM-*`xxxxx`* no closure found | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ECSTRM-*`xxxxx`* unroutable! *`rcpto_len`* or *`rcptto_buffer`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ECSTRM-*`xxxxx`* past memory limit | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ESMTP-*`xxxxx`* invalid internal type *`type`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ESMTP-*`xxxxx`* message with no rcpts | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ESMTP-*`xxxxx`* invalid internal type *`type`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ESMTP-*`xxxxx`* no closure found | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | java: bogus free attempt *`LINE`* | An internal error occurred. Contact support if it persists. |
| DWARNING | SMTP | ECMESS-*`xxxxx`* invalid SMTP code *`code`* | Attempt to set an invalid transaction code on a message |
| DWARNING | SMTP | MESS-*`xxxxx`* invalid SMTP code provided *`code`* | An API caller attempted to set an invalid SMTP code on a message |
| DWARNING | SMTP | MESS-*`xxxxx`* *`code`* | An internal error occurred. Contact support if it persists. |

| [Prev](NET-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](SSL-panic-log-errors.php) |
| D.10. The NET Errors  | [Table of Contents](index.php) |  D.12. The SSL Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)