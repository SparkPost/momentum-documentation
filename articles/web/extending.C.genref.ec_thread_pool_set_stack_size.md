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

| ec_thread_pool_set_stack_size |
| [Prev](extending.C.genref.ec_thread_pool_set_backlog.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.echash_track_versioning.php) |

<a name="extending.C.genref.ec_thread_pool_set_stack_size"></a>
## Name

ec_thread_pool_set_stack_size — set the stack size for an existing thread pool.

## Synopsis

`#include "/ec_thread_pool.h"`

| `int **ec_thread_pool_set_stack_size**(` | <var class="pdparam">jobclass</var>, |   |
|   | <var class="pdparam">size</var>`)`; |   |

`int <var class="pdparam">jobclass</var>`;
`size_t <var class="pdparam">size</var>`;<a name="idp20039712"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

set the stack size for an existing thread pool.

The stack size will take effect for threads that are spawned after this call; it is not possible to change the stack size of existing threads.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>jobclass</dt>

<dd>

the thread pool id

</dd>

<dt>size</dt>

<dd>

the stack size to use, in bytes.

</dd>

</dl>

**Return Values**

returns 0 on failure and 1 on success.

| [Prev](extending.C.genref.ec_thread_pool_set_backlog.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.echash_track_versioning.php) |
| ec_thread_pool_set_backlog  | [Table of Contents](index.php) |  echash_track_versioning |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)