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

| recip_response |
| [Prev](hooks.restinj.post_body_assignment.php)  | Chapter 66. Hooks in the restinj Scope |  [Next](hooks.sieve.php) |

<a name="hooks.restinj.recip_response"></a>
## Name

recip_response

## Synopsis

`#include "modules/rest/injector.h"`

| `void **recip_response** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">resp</var>, |   |
|   | <var class="pdparam">req</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`struct json_object * <var class="pdparam">resp</var>`;
`struct json_object * <var class="pdparam">req</var>`;

| `int **has_restinj_recip_response_hook** (` | `)`; |   |

| `void **register_restinj_recip_response_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_restinj_recip_response_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_restinj_recip_response_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_restinj_recip_response_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_restinj_recip_response_hook** (` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">resp</var>, |   |
|   | <var class="pdparam">req</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`struct json_object * <var class="pdparam">resp</var>`;
`struct json_object * <var class="pdparam">req</var>`;<a name="idp10425904"></a>
## Description

**Configuration Change. ** This hook is available as of version 3.1.2.

Called after populating a per-recipient response object in the JSON response for the session, regardless of whether that recipient was successfully generated or not. MSG is the associated ec_message, which may be NULL. SESS is the HTTP session handle. RESP is the JSON object encapsulating the recipient specific JSON response. REQ is the JSON object encapsulating the entire JSON request.

Implementors of this hook have the opportunity to take some action on the JSON RESP structure, by populating a key named "site". Hook implementors may inspect other keys in RESP, but SHOULD limit their actions to modifying the contents of the "site" key so that they do not collide with future expansions to the injection API.

REQ may contain a key named "site" that can be used to convey additional data to this hook.

| [Prev](hooks.restinj.post_body_assignment.php)  | [Up](hooks.restinj.php) |  [Next](hooks.sieve.php) |
| post_body_assignment  | [Table of Contents](index.php) |  Chapter 67. Hooks in the sieve scope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)