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

| dns_cache_free_node |
| [Prev](dns.php)  | Chapter 20. DNS Functions |  [Next](apis.dns_cache_lookup.php) |

<a name="apis.dns_cache_free_node"></a>
## Name

dns_cache_free_node — Release a reference on a dns cache node

## Synopsis

`#include "dns-cache.h"`

| `void **dns_cache_free_node** (` | <var class="pdparam">node</var>`)`; |   |

`dns_cache_cachenode * <var class="pdparam">node</var>`;<a name="idp22990736"></a>
## Description

Release a reference on a dns cache node. When the reference count falls to 0, the resources for the node are released.

### Note

After calling [dns_cache_free_node](apis.dns_cache_free_node.php "dns_cache_free_node"), you must assume that the node has been freed.

**Parameters**

<dl class="variablelist">

<dt>node</dt>

<dd>

The dns cache node. A pointer to a dns_cache_cachenode struct. For documentation of this data structure see [Section 68.12, “dns_cache_cachenode”](structs.dns_cache_cachenode.php "68.12. dns_cache_cachenode")

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp22998992"></a>
## See Also

[dns_cache_lookup_wait](apis.dns_cache_lookup_wait.php "dns_cache_lookup_wait"), [dns_cache_submit2](apis.dns_cache_submit2.php "dns_cache_submit2"), and [dns_cache_lookup](apis.dns_cache_lookup.php "dns_cache_lookup").

| [Prev](dns.php)  | [Up](dns.php) |  [Next](apis.dns_cache_lookup.php) |
| Chapter 20. DNS Functions  | [Table of Contents](index.php) |  dns_cache_lookup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)