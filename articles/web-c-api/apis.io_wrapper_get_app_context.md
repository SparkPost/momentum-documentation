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

| io_wrapper_get_app_context |
| [Prev](apis.io_wrapper_flush.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_get_context.php) |

<a name="apis.io_wrapper_get_app_context"></a>
## Name

io_wrapper_get_app_context — Retrieve the application context value

## Synopsis

`#include "io_wrapper.h"`

| `void * **io_wrapper_get_app_context** (` | <var class="pdparam">io</var>`)`; |   |

`io_object * <var class="pdparam">io</var>`;<a name="idp26201552"></a>
## Description

Retrieve the application context value.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

The io object.

</dd>

</dl>

**Return Values**

Retreive the application defined context value that was set via [io_wrapper_set_context_and_dtor](apis.io_wrapper_set_app_context_and_dtor.php "io_wrapper_set_app_context_and_dtor").

**Threading**

It is legal to call this function in any thread.

<a name="idp26208304"></a>
## See Also

[Section 68.42, “ec_spool_ctx”](structs.ec_spool_ctx.php "68.42. ec_spool_ctx")

| [Prev](apis.io_wrapper_flush.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_get_context.php) |
| io_wrapper_flush  | [Table of Contents](index.php) |  io_wrapper_get_context |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)