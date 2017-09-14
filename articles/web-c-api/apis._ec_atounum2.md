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

| _ec_atounum2 |
| [Prev](apis._ec_atounum.php)  | Chapter 15. Conversion |  [Next](apis.ec_atoi.php) |

<a name="apis._ec_atounum2"></a>
## Name

_ec_atounum2 — Convert e string "str" to an unsigned integral value and store the result in "*nptr"

## Synopsis

`#include "util.h"`

| `int **_ec_atounum2** (` | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">nptr</var>, |   |
|   | <var class="pdparam">width</var>, |   |
|   | <var class="pdparam">minval</var>, |   |
|   | <var class="pdparam">maxval</var>, |   |
|   | <var class="pdparam">endptr</var>`)`; |   |

`const char * <var class="pdparam">str</var>`;
`void * <var class="pdparam">nptr</var>`;
`int <var class="pdparam">width</var>`;
`long long <var class="pdparam">minval</var>`;
`long long <var class="pdparam">maxval</var>`;
`char ** <var class="pdparam">endptr</var>`;<a name="idp22041376"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Convert e string "str" to an unsigned integral value and store the result in "*nptr".

Recognises decimal, hex and octal values.

**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

the source string

</dd>

<dt>nptr</dt>

<dd>

the destination pointer the number is stored in

</dd>

<dt>width</dt>

<dd>

the size in bytes of the integer type to be used

</dd>

<dt>minval</dt>

<dd>

the minimum value allowed for str

</dd>

<dt>maxval</dt>

<dd>

the maximum value allowed for str

</dd>

<dt>endptr</dt>

<dd>

if non-NULL, holds the address of the first non-digit found

</dd>

</dl>

**Return Values**

0 if "str" was not a valid unsigned integer, 1 if it was

| [Prev](apis._ec_atounum.php)  | [Up](data_type_conversion.php) |  [Next](apis.ec_atoi.php) |
| _ec_atounum  | [Table of Contents](index.php) |  ec_atoi |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)