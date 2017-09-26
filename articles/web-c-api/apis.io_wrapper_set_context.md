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

| io_wrapper_set_context |
| [Prev](apis.io_wrapper_set_app_context_and_dtor.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_set_handle.php) |

<a name="apis.io_wrapper_set_context"></a>
## Name

io_wrapper_set_context — Sets the context for an io object

## Synopsis

`#include "io_wrapper.h"`

| `void **io_wrapper_set_context** (` | <var class="pdparam">io</var>, |   |
|   | <var class="pdparam">ctx</var>`)`; |   |

`io_object * <var class="pdparam">io</var>`;
`ECDict <var class="pdparam">ctx</var>`;<a name="idp26520064"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Sets the context for an io object.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

| [Prev](apis.io_wrapper_set_app_context_and_dtor.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_set_handle.php) |
| io_wrapper_set_app_context_and_dtor  | [Table of Contents](index.php) |  io_wrapper_set_handle |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)