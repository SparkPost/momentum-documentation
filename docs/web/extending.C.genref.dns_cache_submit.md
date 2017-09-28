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

| dns_cache_submit |
| [Prev](extending.C.genref.dns_cache_lookup_wait.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.dns_cache_submit2.php) |

<a name="extending.C.genref.dns_cache_submit"></a>
## Name

dns_cache_submit — Submit a query to the dns cache.

## Synopsis

`#include "/dns-cache.h"`

| `void **dns_cache_submit**(` | <var class="pdparam">q</var>, |   |
|   | <var class="pdparam">cb</var>, |   |
|   | <var class="pdparam">cl</var>`)`; |   |

`dns_cache_query * <var class="pdparam">q</var>`;
`dns_cache_callback <var class="pdparam">cb</var>`;
`void * <var class="pdparam">cl</var>`;<a name="idp18594048"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Submit a query to the dns cache.

When the query completes, the completion callback will be called. If called from the scheduler thread, then the query will be queued immediately and may call the completion routine before the call to [dns_cache_submit](extending.C.genref.dns_cache_submit.php "dns_cache_submit") returns.

This can make it difficult to write asynchronous code, as things may appear to complete before they have finished starting.

This function is equivalent to dns_cache_submit2(q, cb, cl, DNS_CACHE_DISPATCH_NOW).

**See Also**

[dns_cache_submit2](extending.C.genref.dns_cache_submit2.php "dns_cache_submit2").

| [Prev](extending.C.genref.dns_cache_lookup_wait.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.dns_cache_submit2.php) |
| dns_cache_lookup_wait  | [Table of Contents](index.php) |  dns_cache_submit2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)