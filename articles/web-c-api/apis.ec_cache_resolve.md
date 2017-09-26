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

| ec_cache_resolve |
| [Prev](apis.ec_cache_purge.php)  | Chapter 21. ec_cache Functions |  [Next](apis.ec_cache_resolver_delref.php) |

<a name="apis.ec_cache_resolve"></a>
## Name

ec_cache_resolve — Look up an element from the cache

## Synopsis

`#include "ec_cache.h"`

| `int **ec_cache_resolve** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">keylen</var>, |   |
|   | <var class="pdparam">elt</var>, |   |
|   | <var class="pdparam">resolver</var>`)`; |   |

`ec_cache_t * <var class="pdparam">cache</var>`;
`const char * <var class="pdparam">key</var>`;
`int <var class="pdparam">keylen</var>`;
`ec_cache_elt ** <var class="pdparam">elt</var>`;
`ec_cache_resolver ** <var class="pdparam">resolver</var>`;<a name="idp23425680"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Look up an element from the cache.

Operates similarly to ec_cache_find: If there is a cache hit, *elt will be set to reference the cache element and EC_CACHE_HIT will be returned. The caller is responsible for delref'ing the cache element when it is done using it.

If there is a cache miss, *elt will be set to NULL and *resolver will be set to a resolver object that represents the resolution process for satisfying the lookup. If this is the first lookup for a given key, a fresh resolver will be created and ec_cache_resolve will return EC_CACHE_MISS. This key will now be considered pending until the resolver is destroyed. The caller is expected to complete the resolution in whatever way it sees fit; once "complete", it should call [ec_cache_resolver_set_complete](apis.ec_cache_resolver_set_complete.php "ec_cache_resolver_set_complete") and release its reference on the resolver.

If there is a cache miss and there is a pending resolver for the requested key, *resolver will be set to reference that resolver and [ec_cache_resolve](apis.ec_cache_resolve.php "ec_cache_resolve") will return EC_CACHE_PENDING. The caller is expected to call [ec_cache_resolver_run_on_completion](apis.ec_cache_resolver_run_on_completion.php "ec_cache_resolver_run_on_completion") to inform the resolver how to wake the caller when the lookup completes. After calling [ec_cache_resolver_run_on_completion](apis.ec_cache_resolver_run_on_completion.php "ec_cache_resolver_run_on_completion"), the caller MUST also call [ec_cache_resolver_delref](apis.ec_cache_resolver_delref.php "ec_cache_resolver_delref") to release the resolver context; completion routines are not triggered until all references are released.

It is an error to pass in NULL as the resolver parameter.

| [Prev](apis.ec_cache_purge.php)  | [Up](eccache.php) |  [Next](apis.ec_cache_resolver_delref.php) |
| ec_cache_purge  | [Table of Contents](index.php) |  ec_cache_resolver_delref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)