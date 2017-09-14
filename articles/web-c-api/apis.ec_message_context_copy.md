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

| ec_message_context_copy |
| [Prev](apis.ec_message_context_delete.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_context_discard.php) |

<a name="apis.ec_message_context_copy"></a>
## Name

ec_message_context_copy — Copy a context variable from one ec_message to another

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_context_copy** (` | <var class="pdparam">src</var>, |   |
|   | <var class="pdparam">dest</var>, |   |
|   | <var class="pdparam">ctx</var>`)`; |   |

`ec_message * <var class="pdparam">src</var>`;
`ec_message * <var class="pdparam">dest</var>`;
`const char * <var class="pdparam">ctx</var>`;<a name="idp27873168"></a>
## Description

**Configuration Change. ** This function is available as of Momentum version 3.5.6.

Copy a context variable from one ec_message to another.

**Parameters**

<dl class="variablelist">

<dt>src</dt>

<dd>

The source ec_message. See [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message") for a description of this data type.

</dd>

<dt>dest</dt>

<dd>

The destination ec_message.

</dd>

<dt>ctx</dt>

<dd>

The name of the context variable that you wish to copy.

</dd>

</dl>

**Return Values**

This function returns `0` on failure; on success, `1` is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp27885984"></a>
## See Also

[Chapter 34, *Message Functions*](ec_message.php "Chapter 34. Message Functions") 

| [Prev](apis.ec_message_context_delete.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_context_discard.php) |
| ec_message_context_delete  | [Table of Contents](index.php) |  ec_message_context_discard |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)