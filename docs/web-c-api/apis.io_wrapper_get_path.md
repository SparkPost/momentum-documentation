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

| io_wrapper_get_path |
| [Prev](apis.io_wrapper_get_options.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_get_scheme.php) |

<a name="apis.io_wrapper_get_path"></a>
## Name

io_wrapper_get_path — Retrieve the path associated with an io object

## Synopsis

`#include "io_wrapper.h"`

| `const char * **io_wrapper_get_path** (` | <var class="pdparam">io</var>`)`; |   |

`io_object * <var class="pdparam">io</var>`;<a name="idp26276816"></a>
## Description

Retrieve the path associated with an io object.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

The io object.

</dd>

</dl>

**Return Values**

The path. The buffer is guaranteed to exist only until the next call to [io_wrapper_set_path](apis.io_wrapper_set_path.php "io_wrapper_set_path"), or until the object is destroyed.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.io_wrapper_get_options.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_get_scheme.php) |
| io_wrapper_get_options  | [Table of Contents](index.php) |  io_wrapper_get_scheme |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)