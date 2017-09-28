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

| sp_make_swap_out_job |
| [Prev](apis.sp_async_schedule_event.php)  | Chapter 24. Event Functions |  [Next](apis.sp_sync_close.php) |

<a name="apis.sp_make_swap_out_job"></a>
## Name

sp_make_swap_out_job — Create and return a job that will manage swap out processing

## Synopsis

`#include "sp_async.h"`

| `ec_async_job * **sp_make_swap_out_job** (` | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">samfunc</var>, |   |
|   | <var class="pdparam">info</var>`)`; |   |

`accept_construct * <var class="pdparam">ac</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`ec_message * <var class="pdparam">mess</var>`;
`sp_async_swapout_samfunc <var class="pdparam">samfunc</var>`;
`void * <var class="pdparam">info</var>`;<a name="idp24523568"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Create and return a job that will manage swap out processing.

Allocates and fills out a job that will perform internal swap out processing, and that will call back to the supplied samfunc to expand the recipient list to multiple messages.

The returned job is set to run in the SWAPOUT pool and has no completion options set. The job will be automatically freed on completion.

The intended use is for the caller to update the completion options, for example, to arrange for resumption of some other processing.

**Parameters**

<dl class="variablelist">

<dt>ac</dt>

<dd>

the accept construct for the session

</dd>

<dt>ctx</dt>

<dd>

the validate_context for the session

</dd>

<dt>mess</dt>

<dd>

the message (may be NULL)

</dd>

<dt>samfunc</dt>

<dd>

an optional function to use to expand batched recipients

</dd>

<dt>info</dt>

<dd>

a parameter that will be passed to the samfunc

</dd>

</dl>

**Return Values**

an ec_async_job or NULL if insufficient memory was available.

| [Prev](apis.sp_async_schedule_event.php)  | [Up](event.php) |  [Next](apis.sp_sync_close.php) |
| sp_async_schedule_event  | [Table of Contents](index.php) |  sp_sync_close |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)