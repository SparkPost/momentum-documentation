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

| log_reopen |
| [Prev](hooks.core.log_rejection.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.log_spool_import.php) |

<a name="hooks.core.log_reopen"></a>
## Name

log_reopen — This is invoked when "reopen logs" is issued though ec_console.

## Synopsis

`#include "hooks/core/log_reopen.h"`

| `void **core_log_reopen** (` | <var class="pdparam">closure</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;<a name="idp13750800"></a>
## Description

This is invoked when "reopen logs" is issued though ec_console. It is used to tell the module that the log files need to be reopened - it may or may not apply to a database-style logging facility. Note that this hook is also called when ec_rotate runs to rotate log files since that invokes "reopen logs".

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

</dl>

**Return Values**

This hook returns `void`.

**Threading**

This hook will be called in `any` thread.

<a name="idp13757936"></a>
## See Also

[log_attempt_v1](hooks.core.log_attempt_v1.php "log_attempt_v1"), [log_delivery_v1](hooks.core.log_delivery_v1.php "log_delivery_v1"), [log_permanent_failure_v1](hooks.core.log_permanent_failure_v1.php "log_permanent_failure_v1"), [log_reception_v1](hooks.core.log_reception_v1.php "log_reception_v1"), and [log_rejection](hooks.core.log_rejection.php "log_rejection"), and [log_transient_failure_v1](hooks.core.log_transient_failure_v1.php "log_transient_failure_v1").

| [Prev](hooks.core.log_rejection.php)  | [Up](hooks.core.php) |  [Next](hooks.core.log_spool_import.php) |
| log_rejection  | [Table of Contents](index.php) |  log_spool_import |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)