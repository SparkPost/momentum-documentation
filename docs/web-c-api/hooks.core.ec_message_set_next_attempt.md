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

| ec_message_set_next_attempt |
| [Prev](hooks.core.ec_message_part_get_content_type.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.ec_mime_component_extract_content_type.php) |

<a name="hooks.core.ec_message_set_next_attempt"></a>
## Name

ec_message_set_next_attempt — Allows modules to set the next attempt time of a message

## Synopsis

`#include "hooks/core/ec_message_set_next_attempt.h"`

| `int **core_ec_message_set_next_attempt** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">rv</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int * <var class="pdparam">rv</var>`;<a name="idp14198224"></a>
## Description

Allows modules to set the next attempt time of a message.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>msg</dt>

<dd>

An `ec_message` struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>now</dt>

<dd>

A `timeval` struct.

</dd>

<dt>rv</dt>

<dd>

A pointer to an `int`. If the provider function sets the expiration time, then set `*rv` to `1` indicating success or `0` indicating failure.

</dd>

</dl>

**Return Values**

If you set the expiration time, then your provider function should return `1`. Otherwise, return `0` (and you will get the default behavior).

**Threading**

This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.ec_message_part_get_content_type.php)  | [Up](hooks.core.php) |  [Next](hooks.core.ec_mime_component_extract_content_type.php) |
| ec_message_part_get_content_type  | [Table of Contents](index.php) |  ec_mime_component_extract_content_type |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)