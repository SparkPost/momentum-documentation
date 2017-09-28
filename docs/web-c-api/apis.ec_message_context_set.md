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

| ec_message_context_set |
| [Prev](apis.ec_message_context_nextkey.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_context_size.php) |

<a name="apis.ec_message_context_set"></a>
## Name

ec_message_context_set — Store a key/value pair in the appropriate context dictionary

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_context_set** (` | <var class="pdparam">m</var>, |   |
|   | <var class="pdparam">w</var>, |   |
|   | <var class="pdparam">k</var>, |   |
|   | <var class="pdparam">v</var>`)`; |   |

`ec_message * <var class="pdparam">m</var>`;
`int <var class="pdparam">w</var>`;
`const char * <var class="pdparam">k</var>`;
`const char * <var class="pdparam">v</var>`;<a name="idp28015504"></a>
## Description

Store a key/value pair in the appropriate context dictionary, either ECMESS_CTX_CONN or ECMESS_CTX_MESS

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>w</dt>

<dd>

An integer. Valid values are either ECMESS_CTX_CONN or ECMESS_CTX_MESS.

</dd>

<dt>k</dt>

<dd>

A constant string (char *) which is the dictionary key.

</dd>

<dt>v</dt>

<dd>

A constant string (char *) which is the dictionary value.

</dd>

</dl>

**Return Values**

Returns 1 if the key/value pair was successfully added to the appropriate dictionary. Returns 0 if you pass in a NULL value of k or v. Also returns 0 if the key/value pair already existed in the appropriate dictionary.

**Threading**

It is legal to call this function in any thread.

<a name="idp28028000"></a>
## See Also

[ec_message_context_exists](apis.ec_message_context_exists.php "ec_message_context_exists"),[ec_message_context_exists_and_get](apis.ec_message_context_exists_and_get.php "ec_message_context_exists_and_get"), and [ec_message_context_delete](apis.ec_message_context_delete.php "ec_message_context_delete")

| [Prev](apis.ec_message_context_nextkey.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_context_size.php) |
| ec_message_context_nextkey  | [Table of Contents](index.php) |  ec_message_context_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)