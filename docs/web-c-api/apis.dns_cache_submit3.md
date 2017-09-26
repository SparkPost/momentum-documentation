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

| dns_cache_submit3 |
| [Prev](apis.dns_cache_submit2.php)  | Chapter 20. DNS Functions |  [Next](apis.dns_get_domain.php) |

<a name="apis.dns_cache_submit3"></a>
## Name

dns_cache_submit3 — Submit a query to the dns cache, asking an alternative ares channel

## Synopsis

`#include "dns-cache.h"`

| `void **dns_cache_submit3** (` | <var class="pdparam">q</var>, |   |
|   | <var class="pdparam">cb</var>, |   |
|   | <var class="pdparam">cl</var>, |   |
|   | <var class="pdparam">flags</var>, |   |
|   | <var class="pdparam">mychannel</var>`)`; |   |

`dns_cache_query * <var class="pdparam">q</var>`;
`dns_cache_callback <var class="pdparam">cb</var>`;
`void * <var class="pdparam">cl</var>`;
`int <var class="pdparam">flags</var>`;
`ares_channel <var class="pdparam">mychannel</var>`;<a name="idp23102416"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Submit a query to the dns cache, asking an alternative ares channel.

When the query completes, the completion callback will be called. If flags is set to DNS_CACHE_DISPATCH_NOW, and if called from the scheduler thread, then the query will be queued immediately and may call the completion routine before the call to [dns_cache_submit2](apis.dns_cache_submit2.php "dns_cache_submit2") returns.

This can make it difficult to write asynchronous code, as things may appear to complete before they have finished starting.

Also note that while two different servers may return different answers for the same query, the cache is unified, so whomever resolves a domain first will control its value in the cache.

**See Also**

[dns_cache_submit2](apis.dns_cache_submit2.php "dns_cache_submit2").

| [Prev](apis.dns_cache_submit2.php)  | [Up](dns.php) |  [Next](apis.dns_get_domain.php) |
| dns_cache_submit2  | [Table of Contents](index.php) |  dns_get_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)