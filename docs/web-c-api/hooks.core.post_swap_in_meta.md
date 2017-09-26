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

| post_swap_in_meta |
| [Prev](hooks.core.post_smtp_command.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.post_validate_data_spool_each_rcpt_v1.php) |

<a name="hooks.core.post_swap_in_meta"></a>
## Name

post_swap_in_meta — Allows modules to perform actions immediately after the metadata file has been read from the spool. This hook is called even when the metadata fetch fails.

## Synopsis

`#include "hooks/core/swap_in_meta.h"`

| `int **core_post_swap_in_meta** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">serror</var>, |   |
|   | <var class="pdparam">rv</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`int <var class="pdparam">flags</var>`;
`int <var class="pdparam">serror</var>`;
`int * <var class="pdparam">rv</var>`;<a name="idp8984848"></a>
## Description

Allows modules to perform actions immediately after the metadata file has been read from the spool. This hook is called even when the metadata fetch fails.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>msg</dt>

<dd>

An `ec_message` whose metadata has been swapped in. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>flags</dt>

<dd>

One of `METAF_MSG` or `METAF_DICT`.

</dd>

<dt>serror</dt>

<dd>

On failure, this parameter will contain the `errno` value.

</dd>

<dt>rv</dt>

<dd>

Indicates that the metadata fetch succeeded if `*rv` is `IO_DONE`) or failed if `*rv` is `IO_TRANS_FAIL` or `IO_FAIL`.

</dd>

</dl>

**Return Values**

If this hook returns `1`, then any further processing for the metadata swap-in will be skipped. The hook should only return `1` if it fails and, in this case, it should set *`*rv`* to `IO_FAIL`.

**Threading**

This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.post_smtp_command.php)  | [Up](hooks.core.php) |  [Next](hooks.core.post_validate_data_spool_each_rcpt_v1.php) |
| post_smtp_command  | [Table of Contents](index.php) |  post_validate_data_spool_each_rcpt_v1 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)