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

| ec_message_addref |
| [Prev](apis.ec_async_fail.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_assemble_to_legacy_email_message.php) |

<a name="apis.ec_message_addref"></a>
## Name

ec_message_addref — Create a reference to an existing message

## Synopsis

`#include "ec_message.h"`

| `ec_message * **ec_message_addref** (` | <var class="pdparam">sm</var>`)`; |   |

`ec_message * <var class="pdparam">sm</var>`;<a name="idp27701632"></a>
## Description

Create a reference to an existing message.

Intended to be used when performing async processing where part of the processing would otherwise free the message while it is still in use.

**Parameters**

<dl class="variablelist">

<dt>sm</dt>

<dd>

A pointer to an ec_message struct (the source message). For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

</dl>

**Return Values**

An ec_message pointer (the source message). You are responsible for releasing the reference via [ec_message_free](apis.ec_message_free.php "ec_message_free") when you no longer need it.

**Threading**

It is legal to call this function in any thread.

<a name="idp27709488"></a>
## See Also

[ec_message_free](apis.ec_message_free.php "ec_message_free")

| [Prev](apis.ec_async_fail.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_assemble_to_legacy_email_message.php) |
| ec_async_fail  | [Table of Contents](index.php) |  ec_message_assemble_to_legacy_email_message |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)