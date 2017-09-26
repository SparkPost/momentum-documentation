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

| assess_batch |
| [Prev](hooks.core.annotate_batch.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.binding_group_choose_binding.php) |

<a name="hooks.core.assess_batch"></a>
## Name

assess_batch — Allow a module to assume responsibility for batch assessment

## Synopsis

`#include "hooks/core/assess_batch.h"`

| `int **core_assess_batch** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">bs</var>, |   |
|   | <var class="pdparam">conn</var>, |   |
|   | <var class="pdparam">limit_pb</var>, |   |
|   | <var class="pdparam">limit_pc</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`delivery_construct * <var class="pdparam">dc</var>`;
`domain_record * <var class="pdparam">dr</var>`;
`ec_binding_slot <var class="pdparam">bs</var>`;
`connection * <var class="pdparam">conn</var>`;
`int <var class="pdparam">limit_pb</var>`;
`int <var class="pdparam">limit_pc</var>`;<a name="idp18180144"></a>
## Description

This hook allows a module to assume responsibility for batch assessment. It must read the custom annotation set in the [annotate_batch](hooks.core.annotate_batch.php "annotate_batch") hook from the message context for each message in the batch, set up the batch in the delivery context (see below for "successfully assessed"), and set the `batch_assessed` flag in the delivery context to true. This hook must be used in conjunction with the `core_annotate_batch` hook.

If the batch is successfully assessed, the messages must be dequeued from the live queue, validated that the messages belong to the same binding and domain container, and the message pointer must be appended to the delivery_construct.batch ec_ptr_array. When the batch is successfully assessed '1' must be returned. Returning '1' also means no other implementations of this hook will be called.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure function.

</dd>

<dt>dc</dt>

<dd>

The delivery construct for the message about to be delivered. The message can be found in dc->message. The other parameters are optional, however the caller will take responsibility for determining which messages in a batch are actually eligible for delivery in this batch. For more information about this structure see [Section 68.11, “delivery_construct”](structs.delivery_construct.php "68.11. delivery_construct").

</dd>

<dt>dr</dt>

<dd>

The domain record. For information about this structure see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record"). This parameter is optional.

</dd>

<dt>conn</dt>

<dd>

The connection. For information about this structure see [Section 68.9, “connection”](structs.connection.php "68.9. connection"). This parameter is optional.

</dd>

<dt>bs</dt>

<dd>

The binding associated with a message. This parameter is optional.

</dd>

<dt>limit_pb</dt>

<dd>

Limit the number of messages per batch. See the configuration option, [max_messages_per_connection](https://support.messagesystems.com/docs/web-ref/conf.ref.max_recipients_per_connection.php). This parameter is optional.

</dd>

<dt>limit_pc</dt>

<dd>

Limit the number of messages per connection. See the configuration option, [max_deliveries_per_connection](https://support.messagesystems.com/docs/web-ref/conf.ref.max_deliveries_per_connection.php). This parameter is optional.

</dd>

</dl>

**Return Values**

When the batch is successfully assessed, `1` must be returned. Returning `1` also means no other implementations of this hook will be called.

**Threading**

This hook will be called in the `Scheduler` thread.

<a name="idp17335824"></a>
## See Also

[annotate_batch](hooks.core.annotate_batch.php "annotate_batch")

| [Prev](hooks.core.annotate_batch.php)  | [Up](hooks.core.php) |  [Next](hooks.core.binding_group_choose_binding.php) |
| annotate_batch  | [Table of Contents](index.php) |  binding_group_choose_binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)