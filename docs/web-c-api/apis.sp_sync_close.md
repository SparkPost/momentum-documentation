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

| sp_sync_close |
| [Prev](apis.sp_make_swap_out_job.php)  | Chapter 24. Event Functions |  [Next](fastcache.php) |

<a name="apis.sp_sync_close"></a>
## Name

sp_sync_close — Close the specified file descriptor, and optionally dispatch the callback

## Synopsis

`#include "sp_async.h"`

| `int **sp_sync_close** (` | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">wants_shutdown</var>`)`; |   |

`int <var class="pdparam">fd</var>`;
`int <var class="pdparam">wants_shutdown</var>`;<a name="idp24548496"></a>
## Description

Close the specified file descriptor, and optionally dispatch the callback.

**Parameters**

<dl class="variablelist">

<dt>fd</dt>

<dd>

The file descriptor.

</dd>

<dt>wants_shutdown</dt>

<dd>

Set this option to `0` or `1` depending upon whether you need to execute a callback function.

</dd>

</dl>

**Return Value**

This function returns an int but this value does not seem to be used.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.sp_make_swap_out_job.php)  | [Up](event.php) |  [Next](fastcache.php) |
| sp_make_swap_out_job  | [Table of Contents](index.php) |  Chapter 25. Fast Cache Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)