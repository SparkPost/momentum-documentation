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

| dns_get_domain |
| [Prev](apis.dns_cache_submit3.php)  | Chapter 20. DNS Functions |  [Next](eccache.php) |

<a name="apis.dns_get_domain"></a>
## Name

dns_get_domain — Retrieve information about the specified domain

## Synopsis

`#include "dns_ds.h"`

| `domain_record ***dns_get_domain** (` | <var class="pdparam">domain</var>`)`; |   |

`const char * <var class="pdparam">domain</var>`;<a name="idp23117488"></a>
## Description

Retrieve the domain record struct from a domain name.

**Parameters**

<dl class="variablelist">

<dt>domain</dt>

<dd>

The domain name as a string.

</dd>

</dl>

**Return Values**

This function returns a pointer to a domain_record struct. For documentation of this data structure see [Section 68.14, “domain_record”](structs.domain_record.php "68.14. domain_record").

**Threading**

It is only legal to call this function in the `Scheduler` thread.

| [Prev](apis.dns_cache_submit3.php)  | [Up](dns.php) |  [Next](eccache.php) |
| dns_cache_submit3  | [Table of Contents](index.php) |  Chapter 21. ec_cache Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)