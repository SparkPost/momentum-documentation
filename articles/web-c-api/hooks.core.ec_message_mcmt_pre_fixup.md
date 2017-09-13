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

| ec_message_mcmt_pre_fixup |
| [Prev](hooks.core.ec_message_mcmt_fixup.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.ec_message_part_get_content_type.php) |

<a name="hooks.core.ec_message_mcmt_pre_fixup"></a>
## Name

ec_message_mcmt_pre_fixup

## Synopsis

`#include "hooks/core/ec_message_mcmt_pre_fixup.h"`

| `int **ec_message_mcmt_pre_fixup** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">mcmt_reception</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`int <var class="pdparam">mcmt_reception</var>`;

| `int **has_core_ec_message_mcmt_pre_fixup_hook** (` | `)`; |   |

| `void **register_core_ec_message_mcmt_pre_fixup_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_ec_message_mcmt_pre_fixup_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_ec_message_mcmt_pre_fixup_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_ec_message_mcmt_pre_fixup_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_ec_message_mcmt_pre_fixup_hook** (` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">mcmt_reception</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`int <var class="pdparam">mcmt_reception</var>`;<a name="idp8363920"></a>
## Description

**Configuration Change. ** This hook is available as of version 3.1.

This hook is called by listener for MCMT container to allow manipulation of processing option for a MCMT message.

If an implementor returns MCMT_RECEPTION_REJECT, then the no more hook in the chain will be called. The value of option mcmt_reception being passed in the first hook is the configured value. For subsequent hooks, this value is that returned from the previous hook. The allowed values are MCMT_RECEPTION_ALLOW, MCMT_RECEPTION_REJECT and MCMT_RECEPTION_PASSTHRU.

The return value from the last hook will determine the processing option for current message.

If you return MCMT_RECEPTION_REJECT, the message will be rejected and you must set appropriate error code/text using ec_message_set_code().

| [Prev](hooks.core.ec_message_mcmt_fixup.php)  | [Up](hooks.core.php) |  [Next](hooks.core.ec_message_part_get_content_type.php) |
| ec_message_mcmt_fixup  | [Table of Contents](index.php) |  ec_message_part_get_content_type |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)