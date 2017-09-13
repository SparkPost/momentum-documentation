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

| request_eval |
| [Prev](hooks.generic_delivery.msg_dispose.php)  | Chapter 63. Hooks in the generic_delivery and httpclnt Scope |  [Next](hooks.http_response_eval.php) |

<a name="hooks.http_request_eval"></a>
## Name

request_eval — Called prior to sending a generic HTTP request

## Synopsis

`#include "modules/delivery/http/httpclnt.h"`

| `int **request_eval** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">sess</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`http_session * <var class="pdparam">sess</var>`;<a name="idp12407232"></a>
## Description

**Configuration Change. ** This hook point is available as of Momentum version 3.5.5.

Called prior to sending a generic HTTP request.

### Note

This hook point is similar to the [gcm_request_eval](hooks.gcm.request_eval.php "request_eval") hook but in this case the hook is passed a pointer to the http_session data which contains the http_request. If you change anything at this hook point you must update the HTTP headers.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function.

</dd>

<dt>sess</dt>

<dd>

The http_session. For more information about this struct see [Section 68.54, “http_session”](structs.http_session.php "68.54. http_session").

</dd>

</dl>

**Return Values**

This hook returns zero or 1\. If non-zero, no further hook providers are called.

**Threading**

This hook will be called in any thread.

<a name="idp12419232"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/), [Chapter 62, *Hooks in the gcm Scope*                 ](hooks.gcm.php "Chapter 62. Hooks in the gcm Scope") and [Chapter 58, *Hooks in the apn Scope*](hooks.apn.php "Chapter 58. Hooks in the apn Scope") 

| [Prev](hooks.generic_delivery.msg_dispose.php)  | [Up](hooks.generic_delivery.php) |  [Next](hooks.http_response_eval.php) |
| msg_dispose  | [Table of Contents](index.php) |  response_eval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)