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
| [Prev](hooks.apn.php)  | Chapter 58. Hooks in the apn Scope |  [Next](hooks.apn.response_eval.php) |

<a name="hooks.apn.request_eval"></a>
## Name

request_eval — Called prior to sending to APNs

## Synopsis

`#include "modules/mobility/apn/apn.h"`

| `int **request_eval** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">request</var>, |   |
|   | <var class="pdparam">msg</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`apn_request * <var class="pdparam">request</var>`;
`ec_message * <var class="pdparam">msg</var>`;<a name="idp13812848"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.5.5.

This hook is called prior to sending to the Apple push notification server.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function.

</dd>

<dt>request</dt>

<dd>

The APN request. For a description of this data type see [Section 68.5, “apn_request”](structs.apn_request.php "68.5. apn_request").

</dd>

<dt>msg</dt>

<dd>

The message. For a description of this data type see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

</dl>

**Return Values**

This hook returns zero or 1\. If non-zero, no further hook providers are called.

**Threading**

This hook will be called in any thread.

<a name="idp13801600"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [Chapter 58, *Hooks in the apn Scope*](hooks.apn.php "Chapter 58. Hooks in the apn Scope") .

| [Prev](hooks.apn.php)  | [Up](hooks.apn.php) |  [Next](hooks.apn.response_eval.php) |
| Chapter 58. Hooks in the apn Scope  | [Table of Contents](index.php) |  response_eval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)