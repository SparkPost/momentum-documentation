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

| 68.19. ec_cache_elt |
| [Prev](structs.ec_blobject_class.php)  | Chapter 68. Structs |  [Next](structs.ec_cache_head.php) |

## 68.19. ec_cache_elt

This struct is defined as follows:

```
typedef struct ec_cache_element {
  char *key;
  void *value;
  ec_atomic_t ref;
  int keylen;
  /* last use time */
  time_t last;
  /* time at which this element expires */
  time_t expiry_time;

  /* this represents the actual cache entry */
  ec_fc_entry_t entry;
  ec_cache_elt_dtor_func dtor;
} ec_cache_elt;
```

To use this struct, include the file `ec_cache.h`.

### 68.19.1. See Also

[ec_cache_create](apis.ec_cache_create.php "ec_cache_create"), [ec_cache_create2](apis.ec_cache_create2.php "ec_cache_create2"), [ec_cache_delref](apis.ec_cache_delref.php "ec_cache_delref"), [ec_cache_destroy](apis.ec_cache_destroy.php "ec_cache_destroy"), [ec_cache_find](apis.ec_cache_find.php "ec_cache_find"), and [ec_cache_insert](apis.ec_cache_insert.php "ec_cache_insert").

| [Prev](structs.ec_blobject_class.php)  | [Up](structs.php) |  [Next](structs.ec_cache_head.php) |
| 68.18. ec_blobject_class  | [Table of Contents](index.php) |  68.20. ec_cache_head |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)