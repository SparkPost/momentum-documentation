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

| ec_message_set_code |
| [Prev](apis.ec_message_set__object.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_set_envelope.php) |

<a name="apis.ec_message_set_code"></a>
## Name

ec_message_set_code — Set the message delivery code meta information

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_set_code** (` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">code</var>, |   |
|   | <var class="pdparam">codestr</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;
`int <var class="pdparam">code</var>`;
`const char * <var class="pdparam">codestr</var>`;<a name="idp29536448"></a>
## Description

Set the message delivery code meta information.

### Note

Before setting the code you must lock the message using [ec_message_lock](apis.ec_message_lock.php "ec_message_lock"). Once the code is set unlock it using [ec_message_unlock](apis.ec_message_unlock.php "ec_message_unlock").

<a name="idp29539792"></a>

**Example 34.4. ec_message_set_code**

```
ec_message_set_code(mess, 0, "554 5.1.2 No Valid Domain")
ec_message_set_code(message, 551, "5.1.3 [internal] rcptto is invalid")
```

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>code</dt>

<dd>

An int representing the SMTP delivery status code

</dd>

<dt>codestr</dt>

<dd>

A string with the delivery code meta information

</dd>

</dl>

**Return Values**

This function returns a -1 if the code is an invalid SMTP code (outside the range [1, 999]) **or** the prior code value, if it existed.

**Threading**

It is legal to call this function in any thread.

<a name="idp29551472"></a>
## See Also

[ec_message_get_code](apis.ec_message_get_code.php "ec_message_get_code"), [ec_message_lock](apis.ec_message_lock.php "ec_message_lock"), and [ec_message_unlock](apis.ec_message_unlock.php "ec_message_unlock")

| [Prev](apis.ec_message_set__object.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_set_envelope.php) |
| ec_message_set__object  | [Table of Contents](index.php) |  ec_message_set_envelope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)