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

| assess_batch |
| [Prev](extending.hooks.core.annotate_batch.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.binding_group_choose_binding.php) |

<a name="extending.hooks.core.assess_batch"></a>
## Name

assess_batch

## Synopsis

`#include "hooks/core/assess_batch.h"`

| `int **assess_batch**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">bs</var>, |   |
|   | <var class="pdparam">conn</var>, |   |
|   | <var class="pdparam">limit_pb</var>, |   |
|   | <var class="pdparam">limit_pc</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`delivery_construct * <var class="pdparam">dc</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`ec_binding_slot <var class="pdparam">bs</var>`;
`connection * <var class="pdparam">conn</var>`;
`int <var class="pdparam">limit_pb</var>`;
`int <var class="pdparam">limit_pc</var>`;

| `int **has_core_assess_batch_hook**(` | `)`; |   |

| `void **register_core_assess_batch_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_assess_batch_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_assess_batch_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_assess_batch_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_assess_batch_hook**(` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">bs</var>, |   |
|   | <var class="pdparam">conn</var>, |   |
|   | <var class="pdparam">limit_pb</var>, |   |
|   | <var class="pdparam">limit_pc</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`ec_binding_slot <var class="pdparam">bs</var>`;
`connection * <var class="pdparam">conn</var>`;
`int <var class="pdparam">limit_pb</var>`;
`int <var class="pdparam">limit_pc</var>`;<a name="idp20398640"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.40.

This hook allows a module to assume responsibility for batch assessment. Must be used in conjunction with the `core_annotate_batch` hook.

*`dc`* is the delivery construct for the message about to be delivered. The message can be found in dc->message. The other parameters are optional, however the caller will take responsibility for determining which messages in a batch are actually eligible

If the batch is successfully assessed, the messages must be dequeued from the live queue, validated that the messages belong to the same binding and domain container, and append the message pointer to the delivery_construct.batch ec_ptr_array. When the batch is assed '1' must be returned.

| [Prev](extending.hooks.core.annotate_batch.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.binding_group_choose_binding.php) |
| annotate_batch  | [Table of Contents](index.php) |  binding_group_choose_binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)