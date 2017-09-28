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

| gcm_classify_error |
| [Prev](apis.ec_messagescope_query.php)  | Chapter 35. Miscellaneous Functions |  [Next](apis.gcm_get_result_error_code.php) |

<a name="apis.gcm_classify_error"></a>
## Name

gcm_classify_error — Determine the meaning of the delivery status code

## Synopsis

`#include "modules/mobility/gcm.h"`

| `int **gcm_classify_error** (` | <var class="pdparam">status</var>`)`; |   |

`int <var class="pdparam">status</var>`;<a name="idp30092112"></a>
## Description

**Configuration Change. ** This function is available as of Momentum version 3.5.5.

In the context of a Google push notification, determine the meaning of the delivery status code. If you need to determine the delivery method use [ec_message_get_delivery_method](apis.ec_message_get_delivery_method.php "ec_message_get_delivery_method").

**Parameters**

<dl class="variablelist">

<dt>status</dt>

<dd>

The "DLV_Response_Status" context variable which contains the protocol-specific error code.

</dd>

</dl>

**Return Values**

This function returns one of the following values:

*   `DELIVERY_SUCCESS`

*   `DELIVERY_TEMPFAILED`

*   `DELIVERY_PERMFAILED`

**Threading**

It is legal to call this function in any thread.

<a name="idp30105056"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/), [Chapter 62, *Hooks in the gcm Scope*                 ](hooks.gcm.php "Chapter 62. Hooks in the gcm Scope") and [gcm_get_result_error_code](apis.gcm_get_result_error_code.php "gcm_get_result_error_code")

| [Prev](apis.ec_messagescope_query.php)  | [Up](misc.php) |  [Next](apis.gcm_get_result_error_code.php) |
| ec_messagescope_query  | [Table of Contents](index.php) |  gcm_get_result_error_code |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)