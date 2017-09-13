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

| smtp_client_args_exists_and_fetch |
| [Prev](apis.smtp_client_args_delete.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.smtp_error_classify.php) |

<a name="apis.smtp_client_args_exists_and_fetch"></a>
## Name

smtp_client_args_exists_and_fetch — Check for the existence of and fetch an argument from an smtp_client_args structure

## Synopsis

`#include "smtp.h"`

| `int **smtp_client_args_exists_and_fetch** (` | <var class="pdparam">args</var>, |   |
|   | <var class="pdparam">extension</var>, |   |
|   | <var class="pdparam">value</var>`)`; |   |

`smtp_client_args * <var class="pdparam">args</var>`;
`const char * <var class="pdparam">extension</var>`;
`const char ** <var class="pdparam">value</var>`;<a name="idp34402080"></a>
## Description

Check for the existence of and fetch an argument from an smtp_client_args structure. For a description of this struct see [Section 68.81, “smtp_client_args”](structs.smtp_client_args.php "68.81. smtp_client_args").

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

The args structure to query.

</dd>

<dt>extension</dt>

<dd>

The extension name to query.

</dd>

<dt>value</dt>

<dd>

Where to place the pointer to the value of the extension.

</dd>

</dl>

**Return Values**

On success, this function returns non-zero and stores the value of the extension (if any) in `value`. On failure, it returns zero and does nothing to value.

**Threading**

It is legal to call this function in any thread.

<a name="idp34413456"></a>
## See Also

[Chapter 47, *SMTP-related Functions*          ](smtp.php "Chapter 47. SMTP-related Functions") and [smtp_client_args_add](apis.smtp_client_args_add.php "smtp_client_args_add")

| [Prev](apis.smtp_client_args_delete.php)  | [Up](smtp.php) |  [Next](apis.smtp_error_classify.php) |
| smtp_client_args_delete  | [Table of Contents](index.php) |  smtp_error_classify |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)