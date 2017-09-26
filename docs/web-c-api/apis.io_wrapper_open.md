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

| io_wrapper_open |
| [Prev](apis.io_wrapper_mkpath_and_open.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_open2.php) |

<a name="apis.io_wrapper_open"></a>
## Name

io_wrapper_open — Open a handle to a resource

## Synopsis

`#include "io_wrapper.h"`

| `io_object * **io_wrapper_open** (` | <var class="pdparam">filename</var>, |   |
|   | <var class="pdparam">options</var>, |   |
|   | <var class="pdparam">mode</var>`)`; |   |

`const char * <var class="pdparam">filename</var>`;
`int <var class="pdparam">options</var>`;
`int <var class="pdparam">mode</var>`;<a name="idp26380256"></a>
## Description

Open a handle to a resource.

### Note

This function may induce IO or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

You must use [io_wrapper_delref](apis.io_wrapper_delref.php "io_wrapper_delref") to dispose of any object opened using this function. The object won't be destroyed until its last reference is dropped.

**Parameters**

<dl class="variablelist">

<dt>filename</dt>

<dd>

The name of the resource.

</dd>

<dt>options</dt>

<dd>

Options can be any bitwise OR of the flags used with `open(3)`, for example `O_RDWR`, `O_CREAT` etc.

</dd>

<dt>mode</dt>

<dd>

The file mode in octal notation.

</dd>

</dl>

**Return Values**

This function returns a handle to the resource.

**Threading**

It is legal to call this function in any thread.

<a name="idp26393968"></a>
## See Also

[Section 68.55, “io_object”](structs.io_object.php "68.55. io_object")

| [Prev](apis.io_wrapper_mkpath_and_open.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_open2.php) |
| io_wrapper_mkpath_and_open  | [Table of Contents](index.php) |  io_wrapper_open2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)