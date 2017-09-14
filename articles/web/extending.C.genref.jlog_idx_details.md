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

| jlog_idx_details |
| [Prev](extending.C.genref.jlog_file_unlock.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.jlog_inspect_datafile.php) |

<a name="extending.C.genref.jlog_idx_details"></a>
## Name

jlog_idx_details — fetches the last marker in the index and the closedness thereof

## Synopsis

`#include "/libjlog/jlog_private.h"`

| `int **jlog_idx_details**(` | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">log</var>, |   |
|   | <var class="pdparam">marker</var>, |   |
|   | <var class="pdparam">closed</var>`)`; |   |

`jlog_ctx * <var class="pdparam">ctx</var>`;
`u_int32_t <var class="pdparam">log</var>`;
`u_int32_t * <var class="pdparam">marker</var>`;
`int * <var class="pdparam">closed</var>`;<a name="idp20190256"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

fetches the last marker in the index and the closedness thereof

**Return Values**

0 OK, -1 error

| [Prev](extending.C.genref.jlog_file_unlock.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.jlog_inspect_datafile.php) |
| jlog_file_unlock  | [Table of Contents](index.php) |  jlog_inspect_datafile |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)