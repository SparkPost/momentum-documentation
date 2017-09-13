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

| ec_cache_destroy |
| [Prev](apis.ec_cache_delref.php)  | Chapter 21. ec_cache Functions |  [Next](apis.ec_cache_find.php) |

<a name="apis.ec_cache_destroy"></a>
## Name

ec_cache_destroy — Purge all entries from the cache and free all memory allocated to it

## Synopsis

`#include "ec_cache.h"`

| `void **ec_cache_destroy** (` | <var class="pdparam">cache</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;<a name="idp23263712"></a>
## Description

Purge all entries from the cache and free all memory allocated to it.

**Parameters**

<dl class="variablelist">

<dt>cache</dt>

<dd>

The address of the cache. The following typedef applies to the `ec_cache_t` data type:

`typedef struct ec_cache_head ec_cache_t;`

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

While it is legal to call this function in any thread, it **should only be called in the Scheduler thread.** 

<a name="idp23272208"></a>
## See Also

[ec_cache_create](apis.ec_cache_create.php "ec_cache_create"), [ec_cache_create2](apis.ec_cache_create2.php "ec_cache_create2"), [ec_cache_delref](apis.ec_cache_delref.php "ec_cache_delref"), [ec_cache_find](apis.ec_cache_find.php "ec_cache_find"), [ec_cache_insert](apis.ec_cache_insert.php "ec_cache_insert"), [Section 68.20, “ec_cache_head”](structs.ec_cache_head.php "68.20. ec_cache_head"), and [Section 68.19, “ec_cache_elt”](structs.ec_cache_elt.php "68.19. ec_cache_elt").

| [Prev](apis.ec_cache_delref.php)  | [Up](eccache.php) |  [Next](apis.ec_cache_find.php) |
| ec_cache_delref  | [Table of Contents](index.php) |  ec_cache_find |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)