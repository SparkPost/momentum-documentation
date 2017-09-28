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

| ec_message_should_reduce_resources |
| [Prev](apis.ec_message_set_rcptto.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_snapshot.php) |

<a name="apis.ec_message_should_reduce_resources"></a>
## Name

ec_message_should_reduce_resources — Determines whether or not a message should be removed from memory

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_should_reduce_resources** (` | <var class="pdparam">message</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;<a name="idp29689008"></a>
## Description

Determines whether a message should be removed from memory, based on the value of max_resident_messages.

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

</dl>

**Return Values**

This function returns a boolean value (0 or 1) indicating whether a message should be forced out of memory depending on whether the max_resident_messages count has been exceeded for the binding (or global value of max_resident_messages).

**Threading**

It is legal to call this function in any thread.

<a name="idp29695920"></a>
## See Also

[max_resident_messages](https://support.messagesystems.com/docs/web-ref/conf.ref.max_resident_messages.php)

| [Prev](apis.ec_message_set_rcptto.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_snapshot.php) |
| ec_message_set_rcptto  | [Table of Contents](index.php) |  ec_message_snapshot |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)