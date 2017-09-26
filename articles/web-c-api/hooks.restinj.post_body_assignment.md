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

| post_body_assignment |
| [Prev](hooks.restinj.json_request.php)  | Chapter 66. Hooks in the restinj Scope |  [Next](hooks.restinj.recip_response.php) |

<a name="hooks.restinj.post_body_assignment"></a>
## Name

post_body_assignment

## Synopsis

`#include "modules/rest/injector.h"`

| `int **post_body_assignment** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">json_req</var>, |   |
|   | <var class="pdparam">json_recip</var>, |   |
|   | <var class="pdparam">templ</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`struct json_object * <var class="pdparam">json_req</var>`;
`struct json_object * <var class="pdparam">json_recip</var>`;
`const char * <var class="pdparam">templ</var>`;

| `int **has_restinj_post_body_assignment_hook** (` | `)`; |   |

| `void **register_restinj_post_body_assignment_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_restinj_post_body_assignment_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_restinj_post_body_assignment_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_restinj_post_body_assignment_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_restinj_post_body_assignment_hook** (` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">json_req</var>, |   |
|   | <var class="pdparam">json_recip</var>, |   |
|   | <var class="pdparam">templ</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`struct json_object * <var class="pdparam">json_req</var>`;
`struct json_object * <var class="pdparam">json_recip</var>`;
`const char * <var class="pdparam">templ</var>`;<a name="idp10397120"></a>
## Description

**Configuration Change. ** This hook is available as of version 3.1.2.

Called immediately after the message body has been assigned, regardless of whether the body assignment was handled by the system or by an implementor of the restinj_body_assignment hook. The MSG parameter is the ec_message which is to be populated. JSON_REQ is the complete JSON request object, containing all recipients and template information. JSON_RECIP is the JSON object representing the data for the current recipient. TEMPL is the template text that was specified in the JSON_REQ and is what the system would use if it was responsible for assigning the content.

Implementors of this hook have the opportunity to take some action on the message, perhaps by setting some context keys via ec_message_context_set, or even to perform some additional content expansion or modification.

Both JSON_REQ and JSON_RECIP may contain a key named "site" that can be used to convey additional data to this hook.

The return value of the hook MUST be one of EC_RESTINJ_BODY_ERROR, EC_RESTINJ_BODY_REPLACED, or EC_RESTINJ_BODY_UNTOUCHED, depending on the outcome of executing the hook.

| [Prev](hooks.restinj.json_request.php)  | [Up](hooks.restinj.php) |  [Next](hooks.restinj.recip_response.php) |
| json_request  | [Table of Contents](index.php) |  recip_response |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)