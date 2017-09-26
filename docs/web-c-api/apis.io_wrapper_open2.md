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

| io_wrapper_open2 |
| [Prev](apis.io_wrapper_open.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_open_memory.php) |

<a name="apis.io_wrapper_open2"></a>
## Name

io_wrapper_open2 — Open a handle to a resource with context

## Synopsis

`#include "io_wrapper.h"`

| `io_object * **io_wrapper_open2** (` | <var class="pdparam">filename</var>, |   |
|   | <var class="pdparam">options</var>, |   |
|   | <var class="pdparam">mode</var>, |   |
|   | <var class="pdparam">context</var>`)`; |   |

`const char * <var class="pdparam">filename</var>`;
`int <var class="pdparam">options</var>`;
`int <var class="pdparam">mode</var>`;
`ECDict <var class="pdparam">context</var>`;<a name="idp26406320"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Open a handle to a resource with context.

This is semantically equivalent to setting the context via [io_wrapper_set_context](apis.io_wrapper_set_context.php "io_wrapper_set_context") prior to calling [io_wrapper_open](apis.io_wrapper_open.php "io_wrapper_open").

The io object takes a reference on the context.

### Note

This function may induce IO or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

| [Prev](apis.io_wrapper_open.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_open_memory.php) |
| io_wrapper_open  | [Table of Contents](index.php) |  io_wrapper_open_memory |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)