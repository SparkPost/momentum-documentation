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

| ec_convert_string |
| [Prev](apis.ec_convert_register.php)  | Chapter 6. Base64 Encode/Decode and Related Functions |  [Next](apis.ec_qp_encode.php) |

<a name="apis.ec_convert_string"></a>
## Name

ec_convert_string — Convert a string from one encoding to another

## Synopsis

`#include "misc/converter.h"`

| `int **ec_convert_string** (` | <var class="pdparam">fromcode</var>, |   |
|   | <var class="pdparam">fromstring</var>, |   |
|   | <var class="pdparam">tocode</var>, |   |
|   | <var class="pdparam">deststring</var>`)`; |   |

`const char * <var class="pdparam">fromcode</var>`;
`string * <var class="pdparam">fromstring</var>`;
`const char * <var class="pdparam">tocode</var>`;
`string * <var class="pdparam">deststring</var>`;<a name="idp20175936"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Convert a string from one encoding to another.

This is a convenience wrapper around opening a converter and converting each portion of the source string through it and storing it in the destination string.

**Parameters**

<dl class="variablelist">

<dt>fromcode</dt>

<dd>

the encoding used for the input data

</dd>

<dt>fromstring</dt>

<dd>

the source of the input data

</dd>

<dt>tocode</dt>

<dd>

the encoding to be used for the output data

</dd>

<dt>deststring</dt>

<dd>

the destination for the converted data

</dd>

</dl>

Data is read from the start of the buffer in fromstring. If it is disk backed, the next chunk will be requested until no more chunks are available.

**Return Values**

Returns ECCONV_OK on success, or some other value on error.

### Note

This function may induce IO or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

| [Prev](apis.ec_convert_register.php)  | [Up](base64.php) |  [Next](apis.ec_qp_encode.php) |
| ec_convert_register  | [Table of Contents](index.php) |  ec_qp_encode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)