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

| ec_converter_convert |
| [Prev](apis.ec_converter_close.php)  | Chapter 35. Miscellaneous Functions |  [Next](apis.ec_converter_open.php) |

<a name="apis.ec_converter_convert"></a>
## Name

ec_converter_convert — Convert a chunk of data

## Synopsis

`#include "misc/converter.h"`

| `int **ec_converter_convert** (` | <var class="pdparam">conv</var>, |   |
|   | <var class="pdparam">srcbuf</var>, |   |
|   | <var class="pdparam">srcbuflen</var>, |   |
|   | <var class="pdparam">destbuf</var>, |   |
|   | <var class="pdparam">destbuflen</var>, |   |
|   | <var class="pdparam">src_consumed</var>, |   |
|   | <var class="pdparam">dest_used</var>`)`; |   |

`ec_converter * <var class="pdparam">conv</var>`;
`const char * <var class="pdparam">srcbuf</var>`;
`size_t <var class="pdparam">srcbuflen</var>`;
`char * <var class="pdparam">destbuf</var>`;
`size_t <var class="pdparam">destbuflen</var>`;
`size_t * <var class="pdparam">src_consumed</var>`;
`size_t * <var class="pdparam">dest_used</var>`;<a name="idp29944848"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Convert a chunk of data.

Pushes a chunk of data through a converter. The converter transforms the data and stores it into your destination buffer.

**Parameters**

<dl class="variablelist">

<dt>conv</dt>

<dd>

an existing converter

</dd>

<dt>srcbuf</dt>

<dd>

the data buffer to convert

</dd>

<dt>srcbuflen</dt>

<dd>

the size of the input data buffer in bytes

</dd>

<dt>destbuf</dt>

<dd>

receives converted data

</dd>

<dt>destbuflen</dt>

<dd>

the size of the destination buffer

</dd>

<dt>src_consumed</dt>

<dd>

the number of bytes consumed from srcbuf

</dd>

<dt>dest_used</dt>

<dd>

the number of bytes used in destbuf

</dd>

</dl>

If you have reached the end of your input stream, you should call this function one final time with a NULL srcbuf and 0 srcbuflen. The converter may emit an epilogue to terminate the decoded data, so you should anticipate that you will receive data in your destination buffer in this case.

**Return Values**

Returns ECCONV_OK on success, or some other value on error.

| [Prev](apis.ec_converter_close.php)  | [Up](misc.php) |  [Next](apis.ec_converter_open.php) |
| ec_converter_close  | [Table of Contents](index.php) |  ec_converter_open |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)