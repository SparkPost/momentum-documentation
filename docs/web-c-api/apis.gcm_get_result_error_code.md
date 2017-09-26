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

| gcm_get_result_error_code |
| [Prev](apis.gcm_classify_error.php)  | Chapter 35. Miscellaneous Functions |  [Next](apis.if_arp_cache.php) |

<a name="apis.gcm_get_result_error_code"></a>
## Name

gcm_get_result_error_code — Get the error code from the response results error

## Synopsis

`#include "modules/mobility/gcm.h"`

| `int **gcm_get_result_error_code** (` | <var class="pdparam">error</var>`)`; |   |

`const char * <var class="pdparam">error</var>`;<a name="idp30116560"></a>
## Description

**Configuration Change. ** This function is available as of Momentum version 3.5.5.

In the context of a Google push notification, get the error code from a response results error. If you need to determine the delivery method use [ec_message_get_delivery_method](apis.ec_message_get_delivery_method.php "ec_message_get_delivery_method").

**Parameters**

<dl class="variablelist">

<dt>error</dt>

<dd>

A character pointer to the GCM response error.

</dd>

</dl>

**Return Values**

This function returns one of the following values:

*   `GCM_NO_ERROR`

*   `GCM_UNAVAILABLE`

*   `GCM_MISSING_REGISTRATION`

*   `GCM_INVALID_REGISTRATION`

*   `GCM_MISMATCH_SENDER_ID`

*   `GCM_NOT_REGISTERED`

*   `GCM_MESSAGE_TOO_BIG`

*   `GCM_INVALID_DATA_KEY`

*   `GCM_INVALID_TTL`

*   `GCM_INTERNAL_SERVER_ERROR`

*   `GCM_INVALID_PACKAGE_NAME`

*   `GCM_UNKNOWN`

**Threading**

It is legal to call this function in any thread.

<a name="idp30141600"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/), [Chapter 62, *Hooks in the gcm Scope*                 ](hooks.gcm.php "Chapter 62. Hooks in the gcm Scope") and [gcm_classify_error](apis.gcm_classify_error.php "gcm_classify_error")

| [Prev](apis.gcm_classify_error.php)  | [Up](misc.php) |  [Next](apis.if_arp_cache.php) |
| gcm_classify_error  | [Table of Contents](index.php) |  if_arp_cache |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)