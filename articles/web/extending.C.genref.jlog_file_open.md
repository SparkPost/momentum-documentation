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

| jlog_file_open |
| [Prev](extending.C.genref.jlog_file_map_read.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.jlog_file_pread.php) |

<a name="extending.C.genref.jlog_file_open"></a>
## Name

jlog_file_open — opens a jlog_file

## Synopsis

`#include "/libjlog/jlog_io.h"`

| `jlog_file * **jlog_file_open**(` | <var class="pdparam">path</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">mode</var>`)`; |   |

`const char * <var class="pdparam">path</var>`;
`int <var class="pdparam">flags</var>`;
`int <var class="pdparam">mode</var>`;<a name="idp20109104"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

opens a jlog_file

since a jlog_file is a shared handle potentially used by many threads, the underlying open mode is always O_RDWR; only the O_CREAT and O_EXCL flags are honored

**Return Values**

pointer to jlog_file on success, NULL on failure

| [Prev](extending.C.genref.jlog_file_map_read.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.jlog_file_pread.php) |
| jlog_file_map_read  | [Table of Contents](index.php) |  jlog_file_pread |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)