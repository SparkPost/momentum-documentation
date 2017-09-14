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

| ec_message_part_get_content_type |
| [Prev](hooks.core.ec_message_mcmt_pre_fixup.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.ec_message_set_next_attempt.php) |

<a name="hooks.core.ec_message_part_get_content_type"></a>
## Name

ec_message_part_get_content_type

## Synopsis

`#include "hooks/core/ec_message_part_get_content_type.h"`

| `int **ec_message_part_get_content_type** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">part</var>, |   |
|   | <var class="pdparam">content_type_buf</var>, |   |
|   | <var class="pdparam">ct_len</var>, |   |
|   | <var class="pdparam">charset_buf</var>, |   |
|   | <var class="pdparam">charset_len</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message_part * <var class="pdparam">part</var>`;
`char * <var class="pdparam">content_type_buf</var>`;
`int <var class="pdparam">ct_len</var>`;
`char * <var class="pdparam">charset_buf</var>`;
`int <var class="pdparam">charset_len</var>`;

| `int **has_core_ec_message_part_get_content_type_hook** (` | `)`; |   |

| `void **register_core_ec_message_part_get_content_type_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_ec_message_part_get_content_type_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_ec_message_part_get_content_type_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_ec_message_part_get_content_type_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_ec_message_part_get_content_type_hook** (` | <var class="pdparam">part</var>, |   |
|   | <var class="pdparam">content_type_buf</var>, |   |
|   | <var class="pdparam">ct_len</var>, |   |
|   | <var class="pdparam">charset_buf</var>, |   |
|   | <var class="pdparam">charset_len</var>`)`; |   |

`ec_message_part * <var class="pdparam">part</var>`;
`char * <var class="pdparam">content_type_buf</var>`;
`int <var class="pdparam">ct_len</var>`;
`char * <var class="pdparam">charset_buf</var>`;
`int <var class="pdparam">charset_len</var>`;<a name="idp8394000"></a>
## Description

This hook is called by the built-in MIME parser to ascertain a message's content-type and charset. It provides you the opportunity to override the default verdict it would otherwise reach.

It is possible for `charset_buf` to be a `NULL` value.

If you return EC_MESSAGE_GET_CONTENT_TYPE_HOOK_CONT, then the next hook in the chain is called. If EC_MESSAGE_GET_CONTENT_TYPE_HOOK_CONT is the return value of the last hook in the chain, then the default message_part_get_content_type decision is rendered.

If you return EC_MESSAGE_GET_CONTENT_TYPE_HOOK_OK, then subsequent hooks and the default core behavior are skipped, and ec_message_part_get_content_type will return to its caller with `content_type_buf` and `charset_buf` set by your hook.

| [Prev](hooks.core.ec_message_mcmt_pre_fixup.php)  | [Up](hooks.core.php) |  [Next](hooks.core.ec_message_set_next_attempt.php) |
| ec_message_mcmt_pre_fixup  | [Table of Contents](index.php) |  ec_message_set_next_attempt |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)