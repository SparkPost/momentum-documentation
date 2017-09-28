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

| ec_message_get_envelope |
| [Prev](extending.C.genref.ec_message_get_code.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.ec_message_get_first_part.php) |

<a name="extending.C.genref.ec_message_get_envelope"></a>
## Name

ec_message_get_envelope — Returns information from the envelope of the message.

## Synopsis

`#include "/ec_message.h"`

| `int **ec_message_get_envelope**(` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">localpart</var>, |   |
|   | <var class="pdparam">llen</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">dlen</var>, |   |
|   | <var class="pdparam">isnull</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">flags</var>`;
`char * <var class="pdparam">localpart</var>`;
`int <var class="pdparam">llen</var>`;
`char * <var class="pdparam">domain</var>`;
`int <var class="pdparam">dlen</var>`;
`int * <var class="pdparam">isnull</var>`;<a name="idp19225216"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Returns information from the envelope of the message.

If flags includes EC_MSG_ENV_FROM then the envelope sender will be the source of the information. If flags includes EC_MSG_ENV_TO, then the envelope recipient will be the source of the information. The local portion of the address will be copied into the provided localpart buffer if it is not NULL. No more than llen bytes will be copied into the buffer, and the buffer is guaranteed to be NUL terminated. Similarly, the domain portion of the address will be copied into the provided domain buffer if it is not NULL. No more than dlen bytes will be copied into the buffer. Is isnull is not NULL, then it will be set to 1 if the address is the null sender address, 0 otherwise. If EC_MSG_ENV_COMPLETE is contained in flags, then the address will be copied into the localpart buffer only, without any protocol decoration (eg: no MAIL FROM:<>CRLF).

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message

</dd>

<dt>flags</dt>

<dd>

EC_MSG_ENV_XXX flags

</dd>

<dt>localpart</dt>

<dd>

will hold the local portion of the address. It is llen bytes long.

</dd>

<dt>llen</dt>

<dd>

the size of the localpart buffer.

</dd>

<dt>domain</dt>

<dd>

will hold the domain portion of the address.

</dd>

<dt>dlen</dt>

<dd>

the size of the domain buffer.

</dd>

<dt>isnull</dt>

<dd>

if not NULL, will be set to 1 to indicate that the address is the null sender address, 0 otherwise.

</dd>

</dl>

**Return Values**

Returns 1 on success, 0 if the address is not understood by the system.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Related Constants**

<dl class="variablelist">

<dt>EC_MSG_ENV_FROM</dt>

<dd>

Operate on the envelope sender.

</dd>

<dt>EC_MSG_ENV_TO</dt>

<dd>

Operate on the envelope recipient.

</dd>

<dt>EC_MSG_ENV_COMPLETE</dt>

<dd>

Ignore the domain parameter; the entire address is either in or will be placed in the localpart buffer.

</dd>

</dl>

| [Prev](extending.C.genref.ec_message_get_code.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.ec_message_get_first_part.php) |
| ec_message_get_code  | [Table of Contents](index.php) |  ec_message_get_first_part |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)