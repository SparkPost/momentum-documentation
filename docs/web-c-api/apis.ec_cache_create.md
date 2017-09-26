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

| ec_cache_create |
| [Prev](eccache.php)  | Chapter 21. ec_cache Functions |  [Next](apis.ec_cache_create2.php) |

<a name="apis.ec_cache_create"></a>
## Name

ec_cache_create — Create a cache with `max_elts`

## Synopsis

`#include "ec_cache.h"`

| `ec_cache_t * **ec_cache_create** (` | <var class="pdparam">max_elts</var>, |   |
|   | <var class="pdparam">max_lifetime</var>, |   |
|   | <var class="pdparam">dtor</var>`)`; |   |

`unsigned int <var class="pdparam">max_elts</var>`;
`unsigned int <var class="pdparam">max_lifetime</var>`;
`ec_cache_elt_dtor_func <var class="pdparam">dtor</var>`;<a name="idp23138096"></a>
## Description

Create a cache with `max_elts`.

### Note

This is equivalent to calling `ec_cache_create2` with a NULL `name` parameter.

**Parameters**

<dl class="variablelist">

<dt>max_elts</dt>

<dd>

The maximum number of elements that can be kept in the cache. If that number is exceeded, then the least recently used (LRU) element will be removed from the cache.

</dd>

<dt>max_lifetime</dt>

<dd>

Specifies a time-to-live (TTL) in seconds for the cache element. If `max_lifetime` is **not** given the value `EC_CACHE_LIFETIME_INFINITE`, then it specifies a time-to-live in seconds after which the entry will be removed from the cache. If using the cache in per-item-ttl mode, then `max_lifetime` is actually a number of *additional seconds beyond*                the ttl for which an element will not be removed.

</dd>

<dt>dtor</dt>

<dd>

Specifies a function that will be called when the refcount of an item becomes zero. The following typedef applies to this data type:

`typedef void (*ec_cache_elt_dtor_func)(void *value);` .

</dd>

</dl>

**Return Values**

Returns the address of an `ec_cache_t` type. The following typedef applies to this data type:

`typedef struct ec_cache_head ec_cache_t;`.

**Threading**

While it is legal to call this function in any thread, it **should only be called in the Scheduler thread.** 

<a name="idp23156576"></a>
## See Also

[ec_cache_create2](apis.ec_cache_create2.php "ec_cache_create2"), [ec_cache_delref](apis.ec_cache_delref.php "ec_cache_delref"), [ec_cache_delete](apis.ec_cache_delete.php "ec_cache_delete"), [ec_cache_destroy](apis.ec_cache_destroy.php "ec_cache_destroy"), [ec_cache_find](apis.ec_cache_find.php "ec_cache_find"), [ec_cache_insert](apis.ec_cache_insert.php "ec_cache_insert"), and [Section 68.20, “ec_cache_head”](structs.ec_cache_head.php "68.20. ec_cache_head").

| [Prev](eccache.php)  | [Up](eccache.php) |  [Next](apis.ec_cache_create2.php) |
| Chapter 21. ec_cache Functions  | [Table of Contents](index.php) |  ec_cache_create2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)