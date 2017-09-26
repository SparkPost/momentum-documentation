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

| dns_cache_lookup |
| [Prev](apis.dns_cache_free_node.php)  | Chapter 20. DNS Functions |  [Next](apis.dns_cache_lookup_wait.php) |

<a name="apis.dns_cache_lookup"></a>
## Name

dns_cache_lookup — Check to see if the results for a given query are in the DNS cache

## Synopsis

`#include "dns-cache.h"`

| `dns_cache_cachenode * **dns_cache_lookup** (` | <var class="pdparam">query</var>`)`; |   |

`dns_cache_query * <var class="pdparam">query</var>`;<a name="idp23010064"></a>
## Description

Check to see if the results for a given query are in the DNS cache.

**Parameters**

<dl class="variablelist">

<dt>query</dt>

<dd>

The dns cache query. A pointer to a dns_cache_query struct. For documentation of this data structure see [Section 68.13, “dns_cache_query”](structs.dns_cache_query.php "68.13. dns_cache_query")

</dd>

</dl>

**Return Values**

This function returns a reference to a dns_cache_cachenode if present, or NULL if not present. For documentation of this data structure see [Section 68.12, “dns_cache_cachenode”](structs.dns_cache_cachenode.php "68.12. dns_cache_cachenode").

### Note

This function never blocks; it either has the answer in the cache or returns NULL.

### Note

If the cachenode is returned, it is the caller's responsibility to release its reference by calling [dns_cache_free_node](apis.dns_cache_free_node.php "dns_cache_free_node") when it has finished using it.

**Threading**

It is legal to call this function in any thread.

<a name="idp23020032"></a>
## See Also

[dns_cache_free_node](apis.dns_cache_free_node.php "dns_cache_free_node"), [dns_cache_lookup_wait](apis.dns_cache_lookup_wait.php "dns_cache_lookup_wait"), and [dns_cache_submit2](apis.dns_cache_submit2.php "dns_cache_submit2").

| [Prev](apis.dns_cache_free_node.php)  | [Up](dns.php) |  [Next](apis.dns_cache_lookup_wait.php) |
| dns_cache_free_node  | [Table of Contents](index.php) |  dns_cache_lookup_wait |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)