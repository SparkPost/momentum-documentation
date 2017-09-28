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

| io_wrapper_read |
| [Prev](apis.io_wrapper_printf.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_set_app_context_and_dtor.php) |

<a name="apis.io_wrapper_read"></a>
## Name

io_wrapper_read — Read the specified number of bytes

## Synopsis

`#include "io_wrapper.h"`

| `int **io_wrapper_read** (` | <var class="pdparam">io</var>, |   |
|   | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">nbytes</var>`)`; |   |

`io_object * <var class="pdparam">io</var>`;
`void * <var class="pdparam">buf</var>`;
`int <var class="pdparam">nbytes</var>`;<a name="idp26474864"></a>
## Description

Read the specified number of bytes into the buffer. This function behaves like the system function `read(2)`.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

The resource.

</dd>

<dt>buf</dt>

<dd>

The buffer to read into.

</dd>

<dt>nbytes</dt>

<dd>

The number of bytes to read.

</dd>

</dl>

**Return Values**

On success, this function returns the number of bytes read and the file position is advanced by this number. On failure, it returns `-1` and sets `errno` appropriately to a system error defined by `read(2)`.

**Threading**

It is legal to call this function in any thread.

<a name="idp26486480"></a>
## See Also

[Section 68.55, “io_object”](structs.io_object.php "68.55. io_object") and [io_wrapper_open](apis.io_wrapper_open.php "io_wrapper_open")

| [Prev](apis.io_wrapper_printf.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_set_app_context_and_dtor.php) |
| io_wrapper_printf  | [Table of Contents](index.php) |  io_wrapper_set_app_context_and_dtor |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)