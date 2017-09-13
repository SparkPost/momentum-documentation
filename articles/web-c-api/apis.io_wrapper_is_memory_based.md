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

| io_wrapper_is_memory_based |
| [Prev](apis.io_wrapper_get_scheme.php)  | Chapter 30. io_wrapper Functions |  [Next](apis.io_wrapper_lookup.php) |

<a name="apis.io_wrapper_is_memory_based"></a>
## Name

io_wrapper_is_memory_based — returns the memtype if an io_object is an in-memory io_object

## Synopsis

`#include "io_wrapper.h"`

| `int **io_wrapper_is_memory_based** (` | <var class="pdparam">io</var>, |   |
|   | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`io_object * <var class="pdparam">io</var>`;
`char ** <var class="pdparam">buf</var>`;
`size_t * <var class="pdparam">len</var>`;<a name="idp26308896"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

returns the memtype if an io_object is an in-memory io_object.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>buf</dt>

<dd>

pointer to a variable to hold the buffer pointer (may be NULL)

</dd>

<dt>len</dt>

<dd>

pointer to a variable to hold the buffer length (may be NULL)

</dd>

</dl>

**Return Values**

Returns 0 if the object doesn't represent a memory based object, otherwise returns the memory type for the memory. If buf is non-NULL, it will be updated to hold the pointer to the start of the memory blob. If len is non-NULL, it will be updated to hold the size of the memory blob.

| [Prev](apis.io_wrapper_get_scheme.php)  | [Up](io_wrapper.php) |  [Next](apis.io_wrapper_lookup.php) |
| io_wrapper_get_scheme  | [Table of Contents](index.php) |  io_wrapper_lookup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)