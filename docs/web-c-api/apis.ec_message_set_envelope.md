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

| ec_message_set_envelope |
| [Prev](apis.ec_message_set_code.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_set_first_part.php) |

<a name="apis.ec_message_set_envelope"></a>
## Name

ec_message_set_envelope — Sets envelope information for the message

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_set_envelope** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">localpart</var>, |   |
|   | <var class="pdparam">llen</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">dlen</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;
`const char * <var class="pdparam">localpart</var>`;
`int <var class="pdparam">llen</var>`;
`const char * <var class="pdparam">domain</var>`;
`int <var class="pdparam">dlen</var>`;<a name="idp29566368"></a>
## Description

Sets envelope information for the message.

<a name="idp29567584"></a>

**Example 34.5. ec_message_set_envelope Example**

`ec_message_set_envelope(bounce_mess, EC_MSG_ENV_TO|EC_MSG_ENV_COMPLETE, emailaddr, -1, NULL, 0);`
**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>flags</dt>

<dd>

An int parameter which is passed one or more of:

*   If flags includes EC_MSG_ENV_FROM then the envelope sender will be set.

*   If flags includes EC_MSG_ENV_TO, then the envelope recipient will be set.

*   If EC_MSG_ENV_COMPLETE is contained in flags, then the entire address in the localpart buffer will be copied to the appropriate field in ec_message (envelope to or from), and the domain buffer will be ignored.

### Warning

It is not valid to pass EC_MSG_ENV_FROM | EC_MSG_ENV_TO as a parameter to flags.

</dd>

<dt>localpart</dt>

<dd>

The address of the provided localpart buffer. The localpart of the email address will be set, assuming the localpart buffer is not NULL.

</dd>

<dt>llen</dt>

<dd>

llen bytes will be copied from the localpart buffer, which need not be NUL terminated. If llen is -1, then the corresponding buffer is assumed to be NUL terminated and data up until the NUL terminator will be copied.

</dd>

<dt>domain</dt>

<dd>

The address of the provided domain buffer. The domain of the email address will be set, assuming the domain buffer is not NULL.

</dd>

<dt>dlen</dt>

<dd>

dlen bytes will be copied from the buffer, which need not be NUL terminated. If dlen is -1, then the corresponding buffer is assumed to be NUL terminated and data up until the NUL terminator will be copied.

</dd>

</dl>

### Note

If localpart and domain are both NULL, then the address will be set to the null sender address.

**Return Values**

Returns 1 on success, 0 in case of error (such as out-of-memory).

**Threading**

It is legal to call this function in any thread.

<a name="idp29590240"></a>
## See Also

[ec_message_get_envelope](apis.ec_message_get_envelope.php "ec_message_get_envelope")

| [Prev](apis.ec_message_set_code.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_set_first_part.php) |
| ec_message_set_code  | [Table of Contents](index.php) |  ec_message_set_first_part |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)