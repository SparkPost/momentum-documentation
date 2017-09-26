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

| ec_converter_open |
| [Prev](apis.ec_converter_convert.php)  | Chapter 35. Miscellaneous Functions |  [Next](apis.ec_if_list.php) |

<a name="apis.ec_converter_open"></a>
## Name

ec_converter_open — open a converter

## Synopsis

`#include "misc/converter.h"`

| `ec_converter * **ec_converter_open** (` | <var class="pdparam">fromcode</var>, |   |
|   | <var class="pdparam">tocode</var>, |   |
|   | <var class="pdparam">status</var>`)`; |   |

`const char * <var class="pdparam">fromcode</var>`;
`const char * <var class="pdparam">tocode</var>`;
`int * <var class="pdparam">status</var>`;<a name="idp29973680"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

open a converter.

The converter can be used to convert from one encoding to another, optionally applying case folding.

The converter is a fairly low-level streaming capable API that maintains conversion state between chunks of data.

By default, the system iconv(3) routines are used, so the supported encodings are those provided by your system iconv(3) library. You may also load the ICU module in your `ecelerity.conf` to increase the number of supported encodings.

In addition, we provide "base64" and "quoted-printable" converters that allow you to convert to and from those transfer encoding schemes.

**Parameters**

<dl class="variablelist">

<dt>fromcode</dt>

<dd>

the encoding used for the input data

</dd>

<dt>tocode</dt>

<dd>

the encoding to be used for the output data

</dd>

<dt>status</dt>

<dd>

returns additional information about the operation of opening the converter.

</dd>

</dl>

You must not use a converter from multiple threads; create and destroy them as you need them, and the infrastructure will ensure that this is as efficient as possible.

| [Prev](apis.ec_converter_convert.php)  | [Up](misc.php) |  [Next](apis.ec_if_list.php) |
| ec_converter_convert  | [Table of Contents](index.php) |  ec_if_list |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)