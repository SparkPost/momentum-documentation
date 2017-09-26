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

| ec_gauge_cache |
| [Prev](sieve.ref.ec_forward.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_get_message_code.php) |

<a name="sieve.ref.ec_gauge_cache"></a>
## Name

ec_gauge_cache_init, ec_gauge_cache_inc, ec_gauge_cache_dec, ec_gauge_cache_get — gauge cache functions for Sieve

## Synopsis

`ec_gauge_cache_init` { *`name for the cache`*                } { *`max number of elements`*                     } { *`time to expiration of an element`*                              } [ *`replicate`* ]

`ec_gauge_cache_inc` { *`name for the cache`*                } { *`name for the key to inc`*                     }

`ec_gauge_cache_dec` { *`name for the cache`*                } { *`name for the key to dec`*                     }

`ec_gauge_cache_get` { *`name for the cache`*                } { *`name for the key to get`*                     }

<a name="idp29598912"></a>
## Description

`ec_gauge_cache_init` creates the cache with the given max number of elements and max time in seconds before an element automatically expires out of the cache. The final, optional argument is an integer replication flag. If non-zero, it indicates that increments and decrements for this cache should be broadcast among all nodes on a cluster. For this to be used, gauge cache replication must first be enabled; see [Section 7.7.1.9, “Shared Gauge Caches”](cluster.config.replication.php#cluster.replication.gauge_cache "7.7.1.9. Shared Gauge Caches").

`ec_gauge_cache_inc` creates the given key in a given cache if it does not exist and increments it.

`ec_gauge_cache_dec` creates the given key in a given cache if it does not exist and decrements it.

`ec_gauge_cache_get` returns the value of the specified key in the specified cache.

<a name="example.ec_guage_cache"></a>

**Example 16.44. ec_gauge_cache example**

```
$user = vctx_conn_get "auth_user";
ec_gauge_cache_init "cache1" 10 300;
ec_gauge_cache_inc "cache1" "${user}";
$test = ec_gauge_cache_get "cache1" "${user}";
if ec_test :value "gt" :comparator "i;ascii-numeric""${test}" "10" {
  ec_action "550" "Too much spamming";
}
```

| [Prev](sieve.ref.ec_forward.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_get_message_code.php) |
| ec_forward  | [Table of Contents](index.php) |  ec_get_message_code |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)