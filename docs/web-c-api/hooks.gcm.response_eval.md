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

| response_eval |
| [Prev](hooks.gcm.php)  | Chapter 62. Hooks in the gcm Scope |  [Next](hooks.gcm.request_eval.php) |

<a name="hooks.gcm.response_eval"></a>
## Name

response_eval — Process feedback from Google Cloud Messaging

## Synopsis

`#include "modules/mobility/gcm/gcm.h"`

| `int **response_eval** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">response</var>, |   |
|   | <var class="pdparam">msg</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`gcm_response * <var class="pdparam">response</var>`;
`ec_message * <var class="pdparam">msg</var>`;<a name="idp12323216"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.5.5.

The primary purpose of this hook is to process Google GCM feedback concerning token management. Use this hook instead of the generic [http_response_eval](hooks.http_response_eval.php "response_eval") hook when you don't care about the HTTP wrappers around the response and are only concerned with the details. If you need the full response, including the headers, then you should use the generic http_response_eval hook.

At this hook point, feedback from Google servers can be handled, including Registration ID related maintenance feedback. Feedback is provided for messages that have been rejected as well as messages that have been accepted.

### Note

You should not modify the response at this hook point.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function.

</dd>

<dt>response</dt>

<dd>

The GCM response. For a description of this data type see [Section 68.52, “gcm_message_response”](structs.gcm_message_response.php "68.52. gcm_message_response").

Inspect the response `GCM_ERROR` field of this struct to determine what action to take. The values for this field are as follows:

```
/* Google GCM errors - Reported on 200 HTTP Response */
 GCM_NO_ERROR = 0,
 GCM_UNAVAILABLE = 1,            /* 503 HTTP Response */
 GCM_MISSING_REGISTRATION = 2,
 GCM_INVALID_REGISTRATION = 3,
 GCM_MISMATCH_SENDER_ID = 4,
 GCM_NOT_REGISTERED = 5,
 GCM_MESSAGE_TOO_BIG = 6,
 GCM_INVALID_DATA_KEY = 7,
 GCM_INVALID_TTL = 8,
 GCM_INTERNAL_SERVER_ERROR = 9,  /* 500 HTTP Response */
 GCM_INVALID_PACKAGE_NAME = 10,
```
</dd>

</dl>

You can use the [gcm_get_result_error_code](apis.gcm_get_result_error_code.php "gcm_get_result_error_code") API routine to return these error codes by passing the error field (char *) as a parameter.

**Return Values**

This hook returns zero or 1\. If non-zero, no further hook providers are called.

**Threading**

This hook will be called in the `Scheduler` thread.

<a name="idp12339760"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [Chapter 62, *Hooks in the gcm Scope*](hooks.gcm.php "Chapter 62. Hooks in the gcm Scope") .

| [Prev](hooks.gcm.php)  | [Up](hooks.gcm.php) |  [Next](hooks.gcm.request_eval.php) |
| Chapter 62. Hooks in the gcm Scope  | [Table of Contents](index.php) |  request_eval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)