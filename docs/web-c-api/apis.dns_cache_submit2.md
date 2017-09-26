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

| dns_cache_submit2 |
| [Prev](apis.dns_cache_submit.php)  | Chapter 20. DNS Functions |  [Next](apis.dns_cache_submit3.php) |

<a name="apis.dns_cache_submit2"></a>
## Name

dns_cache_submit2 — Submit a query to the dns cache

## Synopsis

`#include "dns-cache.h"`

| `void **dns_cache_submit2** (` | <var class="pdparam">query</var>, |   |
|   | <var class="pdparam">callback</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`dns_cache_query * <var class="pdparam">query</var>`;
`dns_cache_callback <var class="pdparam">callback</var>`;
`void * <var class="pdparam">closure</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp23071856"></a>
## Description

Submit a query to the dns cache.

When the query completes, the completion callback will be called. If flags is set to DNS_CACHE_DISPATCH_NOW, and if called from the scheduler thread, then the query will be queued immediately and may call the completion routine before the call to [dns_cache_submit2](apis.dns_cache_submit2.php "dns_cache_submit2") returns.

### Warning

This can make it difficult to write asynchronous code, as things may appear to complete before they have finished starting.

**Parameters**

<dl class="variablelist">

<dt>query</dt>

<dd>

The dns cache query. A pointer to a dns_cache_query struct. For documentation of this data structure see [Section 68.13, “dns_cache_query”](structs.dns_cache_query.php "68.13. dns_cache_query")

</dd>

<dt>callback</dt>

<dd>

The dns cache callback. A pointer to function.

`typedef void (*dns_cache_callback)(dns_cache_cachenode *, void *closure);`

For documentation of a dns_cache_cachenode structure see [Section 68.12, “dns_cache_cachenode”](structs.dns_cache_cachenode.php "68.12. dns_cache_cachenode").

</dd>

<dt>closure</dt>

<dd>

A pointer to void.

</dd>

<dt>flags</dt>

<dd>

Integer parameter. Typically either 0 or DNS_CACHE_DISPATCH_NOW.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is only legal to call this function in the `Scheduler` thread.

<a name="idp23088224"></a>
## See Also

[dns_cache_free_node](apis.dns_cache_free_node.php "dns_cache_free_node"), [dns_cache_lookup_wait](apis.dns_cache_lookup_wait.php "dns_cache_lookup_wait"), and [dns_cache_lookup](apis.dns_cache_lookup.php "dns_cache_lookup").

| [Prev](apis.dns_cache_submit.php)  | [Up](dns.php) |  [Next](apis.dns_cache_submit3.php) |
| dns_cache_submit  | [Table of Contents](index.php) |  dns_cache_submit3 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)