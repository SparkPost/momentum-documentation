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

| ec_cache_find |
| [Prev](apis.ec_cache_destroy.php)  | Chapter 21. ec_cache Functions |  [Next](apis.ec_cache_get_stats.php) |

<a name="apis.ec_cache_find"></a>
## Name

ec_cache_find — Find a cache item determined by a `key`

## Synopsis

`#include "ec_cache.h"`

| `ec_cache_elt * **ec_cache_find** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">keylen</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;
`const char * <var class="pdparam">key</var>`;
`int <var class="pdparam">keylen</var>`;<a name="idp23287440"></a>
## Description

Find a cache item determined by a `key`. If the element is found, its reference count will be incremented and the element returned to you.

**Parameters**

<dl class="variablelist">

<dt>cache</dt>

<dd>

The address of the cache. The following typedef applies to the `ec_cache_t` data type:

`typedef struct ec_cache_head ec_cache_t;`.

</dd>

<dt>key</dt>

<dd>

Identifies the entry in the cache. It will be copied into the [Section 68.19, “ec_cache_elt”](structs.ec_cache_elt.php "68.19. ec_cache_elt") structure.

</dd>

<dt>keylen</dt>

<dd>

The length of the key, in bytes.

</dd>

</dl>

**Return Values**

Returns the address of the [Section 68.19, “ec_cache_elt”](structs.ec_cache_elt.php "68.19. ec_cache_elt") structure associated with the `key`. Returns `NULL` if no corresponding value to `key` is found.

### Note

You are responsible for calling [ec_cache_delref](apis.ec_cache_delref.php "ec_cache_delref") on this structure when you are finished using it. This is to ensure that the cache doesn't cause it to be deleted **and** to ensure that allocated memory is released.

**Threading**

It is legal to call this function in any thread.

<a name="idp23304288"></a>
## See Also

[ec_cache_create](apis.ec_cache_create.php "ec_cache_create"), [ec_cache_create2](apis.ec_cache_create2.php "ec_cache_create2"), [ec_cache_delete](apis.ec_cache_delete.php "ec_cache_delete"), [ec_cache_delref](apis.ec_cache_delref.php "ec_cache_delref"), [ec_cache_destroy](apis.ec_cache_destroy.php "ec_cache_destroy"), [ec_cache_insert](apis.ec_cache_insert.php "ec_cache_insert"), [ec_cache_purge](apis.ec_cache_purge.php "ec_cache_purge"), [Section 68.19, “ec_cache_elt”](structs.ec_cache_elt.php "68.19. ec_cache_elt"), and [Section 68.20, “ec_cache_head”](structs.ec_cache_head.php "68.20. ec_cache_head")

| [Prev](apis.ec_cache_destroy.php)  | [Up](eccache.php) |  [Next](apis.ec_cache_get_stats.php) |
| ec_cache_destroy  | [Table of Contents](index.php) |  ec_cache_get_stats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)