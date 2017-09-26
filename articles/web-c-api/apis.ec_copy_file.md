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

| ec_copy_file |
| [Prev](file.php)  | Chapter 26. File-related Functions |  [Next](apis.ec_find_conf_file.php) |

<a name="apis.ec_copy_file"></a>
## Name

ec_copy_file — Copy a file from one location to another

## Synopsis

`#include "util.h"`

| `int **ec_copy_file** (` | <var class="pdparam">srcpath</var>, |   |
|   | <var class="pdparam">destpath</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">mode</var>`)`; |   |

`const char * <var class="pdparam">srcpath</var>`;
`const char * <var class="pdparam">destpath</var>`;
`int <var class="pdparam">flags</var>`;
`int <var class="pdparam">mode</var>`;<a name="idp24912832"></a>
## Description

Copy a file from one location to another.

**Parameters**

<dl class="variablelist">

<dt>srcpath</dt>

<dd>

The location of the source file.

</dd>

<dt>destpath</dt>

<dd>

The location of the destination file.

</dd>

<dt>flags</dt>

<dd>

The file creation flags for the destination `open()` call. For valid flags see **`man open`**      .

</dd>

<dt>mode</dt>

<dd>

The mode for the destination file. For valid modes see **`man open`**      .

</dd>

</dl>

This is a convenience wrapper that opens both files and then copies data from the source to the destination.

**Return Values**

This function returns `0` on success.

**Threading**

It is legal to call this function in any thread.

| [Prev](file.php)  | [Up](file.php) |  [Next](apis.ec_find_conf_file.php) |
| Chapter 26. File-related Functions  | [Table of Contents](index.php) |  ec_find_conf_file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)