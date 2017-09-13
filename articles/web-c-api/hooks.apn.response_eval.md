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
| [Prev](hooks.apn.request_eval.php)  | Chapter 58. Hooks in the apn Scope |  [Next](hooks.cluster.php) |

<a name="hooks.apn.response_eval"></a>
## Name

response_eval — Called when there is a response from APNs

## Synopsis

`#include "modules/mobility/apn/apn.h"`

| `int **response_eval** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">response</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`apn_response * <var class="pdparam">response</var>`;<a name="idp14364608"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.5.5.

This hook is called when there is a response from APNs.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function.

</dd>

<dt>response</dt>

<dd>

The APN response. For a description of this data type see [Section 68.6, “apn_error_response”](structs.apn_error_response.php "68.6. apn_error_response").

</dd>

</dl>

**Return Values**

This hook returns zero or 1\. If non-zero, no further hook providers are called. Examine the `status` field of the response to determine appropriate action. Values for this field are:

*   `APNS_NO_ERROR`

*   `APNS_PROCESSING_ERROR`

*   `APNS_MISSING_DEVICE_TOKEN`

*   `APNS_MISSING_TOPIC`

*   `APNS_MISSING_PAYLOAD`

*   `APNS_INVALID_TOKEN_SIZE`

*   `APNS_INVALID_TOPIC_SIZE`

*   `APNS_INVALID_PAYLOAD_SIZE`

*   `APNS_INVALID_TOKEN`

*   `APNS_SHUTDOWN`

**Threading**

This hook will be called in the `Scheduler` thread.

<a name="idp11613840"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [Chapter 58, *Hooks in the apn Scope*](hooks.apn.php "Chapter 58. Hooks in the apn Scope") 

| [Prev](hooks.apn.request_eval.php)  | [Up](hooks.apn.php) |  [Next](hooks.cluster.php) |
| request_eval  | [Table of Contents](index.php) |  Chapter 59. Hooks in the cluster Scope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)