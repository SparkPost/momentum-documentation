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

| log_reception_v1 |
| [Prev](hooks.core.log_permanent_failure_v1.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.log_rejection.php) |

<a name="hooks.core.log_reception_v1"></a>
## Name

log_reception_v1 — Register a function with this hook whenever a reception event should be logged.

## Synopsis

`#include "hooks/core/log_reception_v1.h"`

| `void **log_reception_v1** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">note</var>, |   |
|   | <var class="pdparam">note_len</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`const char * <var class="pdparam">note</var>`;
`int <var class="pdparam">note_len</var>`;<a name="idp14462144"></a>
## Description

Register a function with this hook whenever a reception event should be logged. This hook has a signature that closely mirrors the signature defined for the `log_reception` callback in a `logging_infrastructure_1` struct. For documentation of this data structure see [Section 68.57, “logging_infrastructure_1”](structs.logging_infrastructure_1.php "68.57. logging_infrastructure_1").

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>ac</dt>

<dd>

The `accept_construct` struct. For documentation of this data structure see [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct")

</dd>

<dt>msg</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

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

<a name="idp13845808"></a>
## See Also

[log_attempt_v1](hooks.core.log_attempt_v1.php "log_attempt_v1"), [log_delivery_v1](hooks.core.log_delivery_v1.php "log_delivery_v1"), [log_permanent_failure_v1](hooks.core.log_permanent_failure_v1.php "log_permanent_failure_v1"), [log_rejection](hooks.core.log_rejection.php "log_rejection"), [log_reopen](hooks.core.log_reopen.php "log_reopen"), and [log_transient_failure_v1](hooks.core.log_transient_failure_v1.php "log_transient_failure_v1").

| [Prev](hooks.core.log_permanent_failure_v1.php)  | [Up](hooks.core.php) |  [Next](hooks.core.log_rejection.php) |
| log_permanent_failure_v1  | [Table of Contents](index.php) |  log_rejection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)