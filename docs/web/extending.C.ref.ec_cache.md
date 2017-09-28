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

| ec_cache |
| [Prev](extending.C.ref.declare_hook.php)  | Chapter 17. C API Reference |  [Next](extending.C.ref.events.php) |

<a name="extending.C.ref.ec_cache"></a>
## Name

ec_cache_create, ec_cache_insert, ec_cache_delref, ec_cache_delete, ec_cache_purge, ec_cache_find — generic caching facility

## Synopsis

```
#include "ec_cache.h"

typedef void (*ec_cache_elt_dtor_func)(void *value);
```

| `ec_cache_t ***ec_cache_create** (` | <var class="pdparam">max_elts</var>, |   |
|   | <var class="pdparam">max_ttl</var>, |   |
|   | <var class="pdparam">dtor</var>`)`; |   |

`unsigned int <var class="pdparam">max_elts</var>`;
`unsigned int <var class="pdparam">max_ttl</var>`;
`ec_cache_elt_dtor_func <var class="pdparam">dtor</var>`;

| `ec_cache_elt ***ec_cache_insert** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">keylen</var>, |   |
|   | <var class="pdparam">value</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;
`const char * <var class="pdparam">key</var>`;
`int <var class="pdparam">keylen</var>`;
`void *<var class="pdparam">value</var>`;

| `void **ec_cache_delref** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">elt</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;
`ec_cache_elt * <var class="pdparam">elt</var>`;

| `ec_cache_elt ***ec_cache_find** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">keylen</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;
`const char * <var class="pdparam">key</var>`;
`int <var class="pdparam">keylen</var>`;

| `int **ec_cache_delete** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">keylen</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;
`const char * <var class="pdparam">key</var>`;
`int <var class="pdparam">keylen</var>`;

| `int **ec_cache_purge** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">purge_all</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;
`time_t <var class="pdparam">now</var>`;
`int <var class="pdparam">purge_all</var>`;<a name="idp16710288"></a>
## Description

A common requirement for high performance modules is to cache information that is expensive to obtain. The generic cache implementation in Momentum operates by having an upper bound on the number of elements to be stored in a cache, pushing out the least recently used item when an insert is made and the cache is full. You may optionally set a time-to-live for the cache; elements that have been stored in the cache for longer than the time-to-live will, perioidcally, be expired from the cache.

`ec_cache_create` creates a new cache that can store a maximum of *`max_elts`* elements. The *`max_ttl`* parameter specifies the maximum time-to-live for elements in the cache in seconds. If *`max_ttl`* has the value `EC_CACHE_LIFETIME_INFINITE` , then the time-to-live will be ignored. The *`dtor`* parameter specifies a resource destruction function that will be called when the reference count on a cache element falls to zero.

`ec_cache_insert` will insert an entry in the cache keyed off the *`key`* parameter. The key can be a simple NUL terminated string, or it can be a binary blob; the caching infrastructure makes no assumption about the NUL terminated-ness of the key, which is why you must supply the correct length of the memory using the *`keylen`* parameter. The cache will make a copy of the *`key`*, so the memory that you supply may be a transient buffer on the stack. The *`value`* is an arbitrary pointer to the data that you want to cache. If an existing value with the same key is present in the cache, its reference count will be decremented and the new value you are inserting will take its place.

The return value of `ec_cache_insert` is an `ec_cache_elt *` that references your cache data.

```
typedef struct ec_cache_element {
        void *value;
      } ec_cache_elt;
```

Cache elements are reference counted so that they are safe to use in a multi-threaded environment. Immediately after inserting an element in the cache, the reference count on the cache element will be 2; one reference is owned by the cache and one reference is owned by you, the caller. The reason for this is that it is possible for a busy cache to decide to delete the element shortly after you insert it. You must explicitly call `ec_cache_delref` on the returned element once you have finished working with the cache data.

`ec_cache_find` will lookup an element from the cache based on the *`key`* and *`keylen`* parameters. If the element is found, its reference count will be incremented and the element returned to you. You can access your data pointer by accessing the `value` member of the structure. You are responsible for calling `ec_cache_delref` once you have finished using the returned value. If no corresponding entry is present for the requested key, `ec_cache_find` will return `NULL` .

`ec_cache_delref` decrements the reference count on a cache element. When the reference count falls to zero, then the cache destructor function that was registered with the *`cache`*, if any, will be called and passed the `value` member of the cache element. After calling `ec_cache_delref` the element and its contents must not be touched, as they may have been freed.

`ec_cache_purge` allows you to explicitly remove elements from the cache. If the the cache was configured with a time-to-live for the elements, then the *`now`* will be interpreted as the effective current time and elements older than *`now`*-`ttl` will be purged from the cache. If the *`purge_all`* is non-zero, then all elements will be purged from the cache.

<a name="idp16731200"></a>

**Example 17.1. Inserting into a cache, safely**

```
#include "config.h"
#include "ec_cache.h"

...

  ec_cache_elt *elt;
  elt = ec_cache_insert(cache, "key", strlen("key"), value);

  /* you can use value here if you want */

  ec_cache_delref(cache, elt);
  /* after this point, you MUST NOT touch value if your destructor
   * frees its memory */

...
```

| [Prev](extending.C.ref.declare_hook.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.ref.events.php) |
| hooks  | [Table of Contents](index.php) |  events |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)