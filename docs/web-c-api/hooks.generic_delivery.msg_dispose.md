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

| msg_dispose |
| [Prev](hooks.generic_delivery.php)  | Chapter 63. Hooks in the generic_delivery and httpclnt Scope |  [Next](hooks.http_request_eval.php) |

<a name="hooks.generic_delivery.msg_dispose"></a>
## Name

msg_dispose — Called immediately prior to disposing of an ec_message

## Synopsis

```
#include "ec_message.h"
#include "io_wrapper_int.h"
```

| `int **msg_dispose** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;<a name="idp12381136"></a>
## Description

**Configuration Change. ** This hook point is available as of Momentum version 3.5.5.

### Note

When a message fails, this hook is typically used to reroute messages to another channel. For example, you can use this hook point to convert an Apple or Google push notification to an SSMP message. This hook is accessible from Lua via the `generic_delivery_msg_dispose` callout.

This hook is called right before an ec_message is finally disposed as delivered successfully or failed, either permanently or temporarily. The context variable `VCTX_KEY_DLV_RESPONSE_STATUS` holds the protocol status code that indicates a message's status. The context variable `VCTX_KEY_DLV_RESPONSE_STATUS_DETAIL` holds the detailed string description of the status code.

Use [ec_message_context_get](apis.ec_message_context_get.php "ec_message_context_get") to determine the value of context variables. These values will differ depending upon the protocol. Use [ec_message_get_delivery_method](apis.ec_message_get_delivery_method.php "ec_message_get_delivery_method") to determine how a message was sent.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function.

</dd>

<dt>msg</dt>

<dd>

The message. For a description of this data type see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

</dl>

**Return Values**

Currently the return value has no significance.

**Threading**

This hook will be called in the `Scheduler` thread.

<a name="idp12396192"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [pre_mailq_message_requeue](hooks.core.pre_mailq_message_requeue.php "pre_mailq_message_requeue")

| [Prev](hooks.generic_delivery.php)  | [Up](hooks.generic_delivery.php) |  [Next](hooks.http_request_eval.php) |
| Chapter 63. Hooks in the generic_delivery and httpclnt Scope  | [Table of Contents](index.php) |  request_eval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)