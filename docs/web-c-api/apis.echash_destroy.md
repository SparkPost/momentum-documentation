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

| echash_destroy |
| [Prev](apis.echash_delref.php)  | Chapter 23. echash Functions |  [Next](apis.echash_init.php) |

<a name="apis.echash_destroy"></a>
## Name

echash_destroy — Destroy a hash table created using echash_create

## Synopsis

`#include "echash.h"`

| `void **echash_destroy** (` | <var class="pdparam">h</var>, |   |
|   | <var class="pdparam">keyfree</var>, |   |
|   | <var class="pdparam">datafree</var>`)`; |   |

`ec_hash_table * <var class="pdparam">h</var>`;
`ECHashFreeFunc <var class="pdparam">keyfree</var>`;
`ECHashFreeFunc <var class="pdparam">datafree</var>`;<a name="idp23781392"></a>
## Description

Destroy a hash table created using `echash_create`.

**Parameters**

<dl class="variablelist">

<dt>h</dt>

<dd>

The hash table that you wish to destroy.

</dd>

<dt>keyfree</dt>

<dd>

A pointer to the hash table keys function.

</dd>

<dt>datafree</dt>

<dd>

A pointer to the hash table data function.

</dd>

</dl>

### Note

The keyfree and datafree functions are optional. If they do not exist, no function is invoked when data or keys are freed.

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

The hash table data structure is not thread safe; any simultaneous access needs to be coordinated by the API consumer.

<a name="idp23793888"></a>
## See Also

[echash_delref](apis.echash_delref.php "echash_delref"), [echash_create](apis.echash_create.php "echash_create")

| [Prev](apis.echash_delref.php)  | [Up](echash.php) |  [Next](apis.echash_init.php) |
| echash_delref  | [Table of Contents](index.php) |  echash_init |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)