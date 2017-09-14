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

| ec_convert_buffer |
| [Prev](apis.ec_base64_encode_to_string.php)  | Chapter 6. Base64 Encode/Decode and Related Functions |  [Next](apis.ec_convert_buffer_to_string.php) |

<a name="apis.ec_convert_buffer"></a>
## Name

ec_convert_buffer — Convert a fixed length buffer from one encoding to another

## Synopsis

`#include "misc/converter.h"`

| `int **ec_convert_buffer** (` | <var class="pdparam">fromcode</var>, |   |
|   | <var class="pdparam">frombuf</var>, |   |
|   | <var class="pdparam">frombuflen</var>, |   |
|   | <var class="pdparam">tocode</var>, |   |
|   | <var class="pdparam">tobuf</var>, |   |
|   | <var class="pdparam">tobuflen</var>, |   |
|   | <var class="pdparam">bytes_consumed</var>, |   |
|   | <var class="pdparam">bytes_produced</var>`)`; |   |

`const char * <var class="pdparam">fromcode</var>`;
`const char * <var class="pdparam">frombuf</var>`;
`size_t <var class="pdparam">frombuflen</var>`;
`const char * <var class="pdparam">tocode</var>`;
`char * <var class="pdparam">tobuf</var>`;
`size_t <var class="pdparam">tobuflen</var>`;
`size_t * <var class="pdparam">bytes_consumed</var>`;
`size_t * <var class="pdparam">bytes_produced</var>`;<a name="idp20076768"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Convert a fixed length buffer from one encoding to another.

Converts data from one encoding to another using fixed length buffers.

**Parameters**

<dl class="variablelist">

<dt>fromcode</dt>

<dd>

the encoding used for the input data

</dd>

<dt>frombuf</dt>

<dd>

the source of the input data

</dd>

<dt>frombuflen</dt>

<dd>

the size of the source buffer

</dd>

<dt>tobuf</dt>

<dd>

the destination buffer

</dd>

<dt>tobuflen</dt>

<dd>

the size of the destination buffer

</dd>

<dt>bytes_consumed</dt>

<dd>

the number of bytes consumed from the source buffer.

</dd>

<dt>bytes_produced</dt>

<dd>

the number of bytes that wound up in the destination buffer.

</dd>

</dl>

**Return Values**

Returns ECCONV_OK on success, or some other value on error.

| [Prev](apis.ec_base64_encode_to_string.php)  | [Up](base64.php) |  [Next](apis.ec_convert_buffer_to_string.php) |
| ec_base64_encode_to_string  | [Table of Contents](index.php) |  ec_convert_buffer_to_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)