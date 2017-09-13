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

| log_transient_failure_v1 |
| [Prev](hooks.core.log_spool_import.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.mail_queue_get_next_active.php) |

<a name="hooks.core.log_transient_failure_v1"></a>
## Name

log_transient_failure_v1 — Register a function with this hook whenever a transient failure event should be logged.

## Synopsis

`#include "hooks/core/log_transient_failure_v1.h"`

| `void **core_log_transient_failure_v1** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">note</var>, |   |
|   | <var class="pdparam">note_len</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`const char * <var class="pdparam">note</var>`;
`int <var class="pdparam">note_len</var>`;<a name="idp14139184"></a>
## Description

Register a function with this hook whenever a transient failure event should be logged. This hook has a signature that closely mirrors the signature defined for the `log_transient_failure` callback in a `logging_infrastructure_1` struct. For documentation of this data structure see [Section 68.57, “logging_infrastructure_1”](structs.logging_infrastructure_1.php "68.57. logging_infrastructure_1").

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>msg</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>dr</dt>

<dd>

A pointer to a domain_record struct. For documentation of this data structure see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record")

</dd>

<dt>now</dt>

<dd>

A timeval struct.

</dd>

<dt>note</dt>

<dd>

Contains the Delivery Status Notification (DSN) from the remote server.

</dd>

<dt>note_len</dt>

<dd>

The length of the `note` string, in bytes.

</dd>

</dl>

**Return Values**

This hook returns `void`.

**Threading**

This hook will be called in any thread.

<a name="idp14158192"></a>
## See Also

[log_attempt_v1](hooks.core.log_attempt_v1.php "log_attempt_v1"), [log_delivery_v1](hooks.core.log_delivery_v1.php "log_delivery_v1"), [log_permanent_failure_v1](hooks.core.log_permanent_failure_v1.php "log_permanent_failure_v1"), [log_reception_v1](hooks.core.log_reception_v1.php "log_reception_v1"), [log_rejection](hooks.core.log_rejection.php "log_rejection"), and [log_reopen](hooks.core.log_reopen.php "log_reopen").

| [Prev](hooks.core.log_spool_import.php)  | [Up](hooks.core.php) |  [Next](hooks.core.mail_queue_get_next_active.php) |
| log_spool_import  | [Table of Contents](index.php) |  mail_queue_get_next_active |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)