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

| swap_out_multi |
| [Prev](hooks.core.smtp_should_session_shutdown.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.sys_init.php) |

<a name="hooks.core.swap_out_multi"></a>
## Name

swap_out_multi — Override or augment the internal call to swap_out_multi

## Synopsis

`#include "hooks/core/swap_out_multi.h"`

| `int **core_swap_out_multi** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">head</var>, |   |
|   | <var class="pdparam">success</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`sp_async_message * <var class="pdparam">head</var>`;
`int * <var class="pdparam">success</var>`;<a name="idp18897568"></a>
## Description

The `swap_out_multi` hook allows modules to override or augment the internal call to swap_out_multi. This hook is useful for having simultaneous access to all messages in a potentially multi-recipient setting, after reception has been confirmed, but before delivery takes place.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure.

</dd>

<dt>head</dt>

<dd>

An sp_async_message. See [Section 68.84, “sp_async_message”](structs.sp_async_message.php "68.84. sp_async_message").

</dd>

<dt>success</dt>

<dd>

This parameter is an output parameter for the provider. Set this parameter to `1` for success or `0` for failure.

</dd>

</dl>

**Return Values**

If this hook returns non-zero, then the core swap-out-multi hook will not be run, and the `success` parameter passed by reference as the third argument will be returned to the system.

**Threading**

This hook will be invoked in any thread.

| [Prev](hooks.core.smtp_should_session_shutdown.php)  | [Up](hooks.core.php) |  [Next](hooks.core.sys_init.php) |
| smtp_should_session_shutdown  | [Table of Contents](index.php) |  sys_init |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)