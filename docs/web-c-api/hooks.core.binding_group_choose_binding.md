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

| binding_group_choose_binding |
| [Prev](hooks.core.assess_batch.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.body_modify.php) |

<a name="hooks.core.binding_group_choose_binding"></a>
## Name

binding_group_choose_binding

## Synopsis

`#include "hooks/core/binding_group_choose_binding.h"`

| `int **binding_group_choose_binding** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">binding_group</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`const char * <var class="pdparam">binding_group</var>`;

| `int **has_core_binding_group_choose_binding_hook** (` | `)`; |   |

| `void **register_core_binding_group_choose_binding_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_binding_group_choose_binding_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_binding_group_choose_binding_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_binding_group_choose_binding_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_binding_group_choose_binding_hook** (` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">binding_group</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`const char * <var class="pdparam">binding_group</var>`;<a name="idp17358336"></a>
## Description

Called whenever the 'correct' binding needs to be selected from a group. The system default behavior is to choose this value randomly from the set of bindings, first preferring local bindings and then picking from among all of the bindings if that fails. Hooking this hookpoint can override that behavior, with the return value serving as the binding slot number that should be assigned to the message. The hook can elect to not perform the assignment by returning EC_BINDING_SLOT_UNBOUND from the hook function. In that case the system default behavior will take over. It must be noted that this hook is almost always called in a different thread from the scheduler thread, and as such all of the functions which hook this point must be thread safe. Any sort of 'round robin' or any other type of assignment that requires state must track that state in a thread safe manner. Furthermore, performance considerations must be accounted for, as if the assignment function blocks on a shared resource for too long that could result in serious performance degradation. Finally, one should be certain that the work being performed here could not be better performed in the set_binding phase of the validation system, since there one can set all binding assignments, as opposed to just group assignments.

| [Prev](hooks.core.assess_batch.php)  | [Up](hooks.core.php) |  [Next](hooks.core.body_modify.php) |
| assess_batch  | [Table of Contents](index.php) |  body_modify |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)