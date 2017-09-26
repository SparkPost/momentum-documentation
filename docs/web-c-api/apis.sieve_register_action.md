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

| sieve_register_action |
| [Prev](apis.sieve_parse_text.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_register_extension.php) |

<a name="apis.sieve_register_action"></a>
## Name

sieve_register_action — Register a sieve action

## Synopsis

`#include "sieve/ecsieve.h"`

| `int **sieve_register_action** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">action</var>, |   |
|   | <var class="pdparam">reqd_capability</var>, |   |
|   | <var class="pdparam">compile_cb</var>, |   |
|   | <var class="pdparam">action_cb</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">action</var>`;
`const char * <var class="pdparam">reqd_capability</var>`;
`sieve_compile_callback <var class="pdparam">compile_cb</var>`;
`sieve_action_callback <var class="pdparam">action_cb</var>`;<a name="idp32983552"></a>
## Description

### Deprecated

Use [sieve_register_extension](apis.sieve_register_extension.php "sieve_register_extension") instead.

Register a sieve action.

**Parameters**

<dl class="variablelist">

<dt>flags</dt>

<dd>

A combination of SIV_EXT_* flags (if any).

</dd>

<dt>closure</dt>

<dd>

Pointer that's passed to callbacks.

</dd>

<dt>action</dt>

<dd>

Name of the extension in Sieve scripts.

</dd>

<dt>reqd_capability</dt>

<dd>

Name that the script needs to require; NULL means the same as action.

</dd>

<dt>compile_cb</dt>

<dd>

Callback for compile phase.

</dd>

<dt>action_cb</dt>

<dd>

Callback for execution phase.

</dd>

</dl>

This is equivalent to calling [sieve_register_extension](apis.sieve_register_extension.php "sieve_register_extension") with the SIV_EXT_SUPPORTS_V0 flag (which introduces overhead for compatibility). New code should use [sieve_register_extension](apis.sieve_register_extension.php "sieve_register_extension") instead.

**Return Values**

Returns 1 on success, 0 on failure.

| [Prev](apis.sieve_parse_text.php)  | [Up](sieve.php) |  [Next](apis.sieve_register_extension.php) |
| sieve_parse_text  | [Table of Contents](index.php) |  sieve_register_extension |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)