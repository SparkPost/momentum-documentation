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

| io_wrapper_writev |
| [Prev](apis.io_wrapper_vprintf.php)  | Chapter 30. io_wrapper Functions |  [Next](logging.php) |

<a name="apis.io_wrapper_writev"></a>
## Name

io_wrapper_writev — Write a vector

## Synopsis

`#include "io_wrapper.h"`

| `**io_wrapper_writev** (` | <var class="pdparam">io</var>, |   |
|   | <var class="pdparam">iov</var>, |   |
|   | <var class="pdparam">iovcnt</var>`)`; |   |

`io_object * <var class="pdparam">io</var>`;
`const struct iovec * <var class="pdparam">iov</var>`;
`int <var class="pdparam">iovcnt</var>`;<a name="idp26627888"></a>
## Description

Write a vector. This function behaves like the system function, `writev(2)`.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

The resource.

</dd>

<dt>options</dt>

<dd>

An iovec struct.

</dd>

<dt>iovcnt</dt>

<dd>

The number of bytes to write.

</dd>

</dl>

**Return Values**

On success, this function returns the number of bytes read and the file position is advanced by this number. On failure, it returns `-1` and sets `errno` appropriately to a system error defined by `writev(2)`.

**Threading**

It is legal to call this function in any thread.

<a name="idp26639488"></a>
## See Also

[Section 68.55, “io_object”](structs.io_object.php "68.55. io_object")

| [Prev](apis.io_wrapper_vprintf.php)  | [Up](io_wrapper.php) |  [Next](logging.php) |
| io_wrapper_vprintf  | [Table of Contents](index.php) |  Chapter 31. Logging Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)