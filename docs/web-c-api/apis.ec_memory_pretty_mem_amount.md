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

| ec_memory_pretty_mem_amount |
| [Prev](apis.ec_memory_is_low.php)  | Chapter 33. Memory Functions |  [Next](apis.ec_memory_print_allocator_details.php) |

<a name="apis.ec_memory_pretty_mem_amount"></a>
## Name

ec_memory_pretty_mem_amount — A utility to render an amount with commas

## Synopsis

`#include "ec_malloc.h"`

| `char * **ec_memory_pretty_mem_amount** (` | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">amount</var>`)`; |   |

`char * <var class="pdparam">buf</var>`;
`uint64_t <var class="pdparam">amount</var>`;<a name="idp27313600"></a>
## Description

A utility to render the amount of memory with appropriately placed commas.

**Parameters**

<dl class="variablelist">

<dt>buf</dt>

<dd>

A character array use dto hold the result.

</dd>

<dt>amount</dt>

<dd>

The amount to render.

</dd>

</dl>

**Return Value**

This function returns `buf`, NUL terminated and containing a readable amount.

**Threading**

You can call this function in any thread.

<a name="idp27321936"></a>
## See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](apis.ec_memory_is_low.php)  | [Up](memory.php) |  [Next](apis.ec_memory_print_allocator_details.php) |
| ec_memory_is_low  | [Table of Contents](index.php) |  ec_memory_print_allocator_details |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)