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

| spool_name_to_mid |
| [Prev](apis.spool_in_depfd.php)  | Chapter 49. Spool-related Functions |  [Next](apis.swap_out_multi.php) |

<a name="apis.spool_name_to_mid"></a>
## Name

spool_name_to_mid — Create a message ID

## Synopsis

`#include "spool.h"`

| `int **spool_name_to_mid** (` | <var class="pdparam">mid</var>, |   |
|   | <var class="pdparam">name</var>`)`; |   |

`message_id * <var class="pdparam">mid</var>`;
`const char * <var class="pdparam">name</var>`;<a name="idp35196368"></a>
## Description

Create a message ID.

**Parameters**

<dl class="variablelist">

<dt>mid</dt>

<dd>

The message id.

</dd>

<dt>name</dt>

<dd>

The spool name.

</dd>

</dl>

**Return Values**

On success, this function returns `1`; on failure, `0` is returned. After execution, `mid` contains the message id.

**Threading**

It is legal to call this function in any thread.

<a name="idp35205504"></a>
## See Also

[Section 68.60, “message_id”](structs.message_id.php "68.60. message_id")

| [Prev](apis.spool_in_depfd.php)  | [Up](spool.php) |  [Next](apis.swap_out_multi.php) |
| spool_in_depfd  | [Table of Contents](index.php) |  swap_out_multi |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)