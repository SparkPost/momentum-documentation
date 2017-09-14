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

| io_wrapper_create_read_job |
| [Prev](apis.io_wrapper_create_object.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_delref.php) |

<a name="apis.io_wrapper_create_read_job"></a>
## Name

io_wrapper_create_read_job — Creates a job to read the contents of a file

## Synopsis

`#include "io_wrapper.h"`

| `io_job * **io_wrapper_create_read_job** (` | <var class="pdparam">filename</var>`)`; |   |

`const char * <var class="pdparam">filename</var>`;<a name="idp26126368"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Creates a job to read the contents of a file.

a read job will read the contents of the resource named by filename before completing, storing the results in the string buffer pointed at by the buffer member of the job structure. The caller is responsible for setting buffer to point at a valid string, and also for setting the completion options on the job. The lifetime of buffer is entirely the responsibility of the caller.

job = io_wrapper_create_read_job("foobar"); job->buffer = &mystate->stringbuffer; ec_async_wake_validation_module(job, ctx); ec_queue_async_job(job); return VALIDATE_AGAIN;

| [Prev](apis.io_wrapper_create_object.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_delref.php) |
| io_wrapper_create_object  | [Table of Contents](index.php) |  io_wrapper_delref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)