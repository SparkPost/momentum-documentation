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

| sieve_delref |
| [Prev](apis.sieve_create_string_list.php)  | Chapter 44. Sieve Functions |  [Next](apis.sieve_error.php) |

<a name="apis.sieve_delref"></a>
## Name

sieve_delref — Delete a reference to a compiled Sieve script

## Synopsis

`#include "sieve/ecsieve.h"`

| `void **sieve_delref** (` | <var class="pdparam">script</var>`)`; |   |

`SIEVE * <var class="pdparam">script</var>`;<a name="idp32424464"></a>
## Description

Delete a reference to a compiled Sieve script.

The script will be freed when its refcount falls to zero.

**Parameters**

<dl class="variablelist">

<dt>script</dt>

<dd>

The script to delete. For more information about this data type see [sieve](structs.sieve.php "68.75. SIEVE (sieve_state)").

</dd>

</dl>

**Return Value**

This function returns void.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.sieve_create_string_list.php)  | [Up](sieve.php) |  [Next](apis.sieve_error.php) |
| sieve_create_string_list  | [Table of Contents](index.php) |  sieve_error |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)