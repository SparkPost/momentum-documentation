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

| echash_create |
| [Prev](echash.php)  | Chapter 23. echash Functions |  [Next](apis.echash_delete.php) |

<a name="apis.echash_create"></a>
## Name

echash_create — Create a hash table

## Synopsis

`#include "echash.h"`

| `ec_hash_table * **echash_create** (` | <var class="pdparam">keyfree</var>, |   |
|   | <var class="pdparam">datafree</var>`)`; |   |

`ECHashFreeFunc <var class="pdparam">keyfree</var>`;
`ECHashFreeFunc <var class="pdparam">datafree</var>`;<a name="idp23653792"></a>
## Description

This function creates a hash table by allocating memory of the `MEMTYPE_EC_HASH_TABLE` type. Use [echash_delete](apis.echash_delete.php "echash_delete") or [echash_delete_item](apis.echash_delete_item.php "echash_delete_item") to free memory used by hash table entries.

### Note

The parameters passed to this function **must not**     be transient buffers, because the hash table implementation does not duplicate them. If ECHashFreeFunc functions are specified upon creation, these functions free up memory when you call echash_delete.

The keyfree and datafree functions are optional. If they do not exist, no function is invoked when data or keys are freed.

**Parameters**

<dl class="variablelist">

<dt>keyfree</dt>

<dd>

A pointer to the hash table keys—the ECHashFreeFunc function will allocate and destroy memory. *Note*: ECHashFreeFunc is defined as folows: `typedef void (*ECHashFreeFunc)(void *);`

</dd>

<dt>datafree</dt>

<dd>

A pointer to the hash table data—the ECHashFreeFunc function will allocate and destroy memory.

</dd>

</dl>

**Return Values**

This function returns an ec_hash_table.

**Threading**

It is legal to call this function in any thread.

The hash table data structure is not thread safe; any simultaneous access needs to be coordinated by the API consumer.

<a name="idp23668032"></a>
## See Also

[Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table"), [echash_init](apis.echash_init.php "echash_init")

| [Prev](echash.php)  | [Up](echash.php) |  [Next](apis.echash_delete.php) |
| Chapter 23. echash Functions  | [Table of Contents](index.php) |  echash_delete |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)