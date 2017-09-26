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

| 68.12. dns_cache_cachenode |
| [Prev](structs.delivery_construct.php)  | Chapter 68. Structs |  [Next](structs.dns_cache_query.php) |

## 68.12. dns_cache_cachenode

This struct is defined as follows:

```
typedef struct _dns_cache_cachenode {
  dns_cache_query query;
  ec_atomic_t refcnt;
  u_int8_t answer_type;   /* This should match unless CNAME */
  u_int8_t answer_count;
  u_int8_t resolver_status;
  union _dns_cache_cachenode_answer {
    char **name;
    struct in_addr *ip4;
    struct in6_addr *ip6;
  } answer;
  void *__private;
  u_int64_t expiry;
  int *preference;
  pthread_cond_t cv;
  int *weight;
  int *port;
} dns_cache_cachenode;
```

To use this struct, include the file `dns-cache.h`.

### 68.12.1. See Also

[Section 68.13, “dns_cache_query”](structs.dns_cache_query.php "68.13. dns_cache_query"), [dns_cache_free_node](apis.dns_cache_free_node.php "dns_cache_free_node"), [dns_cache_lookup_wait](apis.dns_cache_lookup_wait.php "dns_cache_lookup_wait"), [dns_cache_submit2](apis.dns_cache_submit2.php "dns_cache_submit2"), [dns_cache_lookup](apis.dns_cache_lookup.php "dns_cache_lookup"), and [dns_get_domain](apis.dns_get_domain.php "dns_get_domain").

| [Prev](structs.delivery_construct.php)  | [Up](structs.php) |  [Next](structs.dns_cache_query.php) |
| 68.11. delivery_construct  | [Table of Contents](index.php) |  68.13. dns_cache_query |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)