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

| json_request |
| [Prev](hooks.restinj.body_assignment.php)  | Chapter 66. Hooks in the restinj Scope |  [Next](hooks.restinj.post_body_assignment.php) |

<a name="hooks.restinj.json_request"></a>
## Name

json_request

## Synopsis

`#include "modules/rest/injector.h"`

| `int **json_request** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">req</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`struct json_object * <var class="pdparam">req</var>`;

| `int **has_restinj_json_request_hook** (` | `)`; |   |

| `void **register_restinj_json_request_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_restinj_json_request_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_restinj_json_request_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_restinj_json_request_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_restinj_json_request_hook** (` | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">req</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`struct json_object * <var class="pdparam">req</var>`;<a name="idp10368528"></a>
## Description

**Configuration Change. ** This hook is available as of version 3.1.2.

Called very early during the REST injector processing, before assessing the recipient list. SESS is the incoming HTTP session. REQ is the JSON object encapsulating the injection request.

Implementors of this hook have the opportunity to take some action on the JSON request structure, potentially applying additional transformation or validation of the JSON structure.

REQ may contain a key named "site" that can be used to convey additional data to this hook.

The return value of the hook MUST be one of EC_RESTINJ_SESS_OK or EC_RESTINJ_SESS_ERR, depending on the outcome of executing the hook. If an error condition is indicated, it is the responsibility of the hook implementor to construct a JSON response that is compliant with the published REST injection protocol, or to otherwise ensure that the SESS object is primed to output a response that is meaningful to the clients of the API.

| [Prev](hooks.restinj.body_assignment.php)  | [Up](hooks.restinj.php) |  [Next](hooks.restinj.post_body_assignment.php) |
| body_assignment  | [Table of Contents](index.php) |  post_body_assignment |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)