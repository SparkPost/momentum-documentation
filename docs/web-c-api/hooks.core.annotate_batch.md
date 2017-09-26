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

| annotate_batch |
| [Prev](hooks.core.aaa_log.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.assess_batch.php) |

<a name="hooks.core.annotate_batch"></a>
## Name

annotate_batch — Allow a module to assume responsibility for batch annotation

## Synopsis

`#include "hooks/core/annotate_batch.h"`

| `int **core_annotate_batch** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">head</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`sp_async_message * <var class="pdparam">head</var>`;<a name="idp798048"></a>
## Description

This hook allows a module to assume responsibility for batch annotation. Add the custom annotation to the message context of each message in the batch. When using this hook you must also use the `assess_batch` hook to read this custom annotation.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>head</dt>

<dd>

This parameter is the `sp_async_message` head pointer that contains the whole batch. For a description of this data type see [sp_async_message](structs.sp_async_message.php "68.84. sp_async_message").

</dd>

</dl>

**Return Values**

If this hook returns `1`, then the standard batch annotation is not performed and no other implementations of this hook are called.

**Threading**

This hook will be called in the `Scheduler` thread.

<a name="idp15501376"></a>
## See Also

[Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message") and [assess_batch](hooks.core.assess_batch.php "assess_batch")

| [Prev](hooks.core.aaa_log.php)  | [Up](hooks.core.php) |  [Next](hooks.core.assess_batch.php) |
| aaa_log  | [Table of Contents](index.php) |  assess_batch |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)