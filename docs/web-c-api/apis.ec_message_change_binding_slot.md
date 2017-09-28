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

| ec_message_change_binding_slot |
| [Prev](apis.ec_message_builder.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_context_clean.php) |

<a name="apis.ec_message_change_binding_slot"></a>
## Name

ec_message_change_binding_slot — Set the binding for a message

## Synopsis

`#include "ec_message.h"`

| `void **ec_message_change_binding_slot** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">newslot</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`ec_binding_slot <var class="pdparam">newslot</var>`;<a name="idp27812592"></a>
## Description

Set the binding for a message.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>newslot</dt>

<dd>

The new binding slot to which the message should be bound

</dd>

</dl>

*   `EC_BINDING_SLOT_REBIND_IF_NOT_BOUND` If newslot has the value EC_BINDING_SLOT_REBIND_IF_NOT_BOUND then the validation infrastructure will be invoked to assign a binding only if the message is currently unbound.

*   `EC_BINDING_SLOT_REBIND_ALWAYS` If newslot has the value EC_BINDING_SLOT_REBIND_ALWAYS then the validation infrastructure will be invoked to assign a binding.

*   Otherwise, the value of newslot will be used as the new binding for the message, and appropriate counters will be updated.

### Note

You **must** use this API to perform binding assignments, otherwise the binding statistics will be skewed.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_message_builder.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_context_clean.php) |
| ec_message_builder  | [Table of Contents](index.php) |  ec_message_context_clean |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)