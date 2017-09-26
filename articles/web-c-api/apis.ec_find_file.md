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

| ec_find_file |
| [Prev](apis.ec_find_conf_file2.php)  | Chapter 26. File-related Functions |  [Next](apis.ec_open_tmpfile.php) |

<a name="apis.ec_find_file"></a>
## Name

ec_find_file — Find a file in the given search path and return the resulting path

## Synopsis

`#include "util.h"`

| `int **ec_find_file** (` | <var class="pdparam">search_path</var>, |   |
|   | <var class="pdparam">base</var>, |   |
|   | <var class="pdparam">outstr</var>, |   |
|   | <var class="pdparam">errstr</var>`)`; |   |

`const char * <var class="pdparam">search_path</var>`;
`const char * <var class="pdparam">base</var>`;
`string * <var class="pdparam">outstr</var>`;
`string * <var class="pdparam">errstr</var>`;<a name="idp24981056"></a>
## Description

Find a filename in the given search path and return the resulting path.

**Parameters**

<dl class="variablelist">

<dt>search_path</dt>

<dd>

The colon-separated path to search.

</dd>

<dt>base</dt>

<dd>

The base filename to be found.

</dd>

<dt>outstr</dt>

<dd>

The string holding the resulting path.

</dd>

<dt>errstr</dt>

<dd>

The error message, set on failure.

</dd>

</dl>

**Return Values**

On success this function returns `1`; on failure it returns `0`.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_find_conf_file2.php)  | [Up](file.php) |  [Next](apis.ec_open_tmpfile.php) |
| ec_find_conf_file2  | [Table of Contents](index.php) |  ec_open_tmpfile |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)