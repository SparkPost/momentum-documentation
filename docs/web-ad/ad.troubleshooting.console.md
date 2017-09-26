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

| 8.2. Using the System Console |
| [Prev](ad.troubleshooting.php)  | Chapter 8. Troubleshooting |  [Next](ad.options.php) |

## 8.2. Using the System Console

There are system console commands specific to the adaptive module that are useful for troubleshooting:

*   **adaptive suspensions**             – Show suspended deliveries. Pass in parameters to view suspended deliveries from a specific binding to a specific domain.

*   **adaptive list**      – Show the values of the shaping parameters. Again, you may specify particular binding and domain pairings

*   **adaptive reset**       – Clear the values of the shaping parameters. You must specify a particular binding and domain pairing.

*   **adaptive rules**       – Show the adaptive rules that are in effect. You must specify a particular binding and domain pairing.

For more information about these commands (and a complete list of the commands available) see [adaptive Management using Console Commands](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console).

The various system console **cache** commands can be helpful for adjusting adaptive cache options. These commands are:

*   [cache list](https://support.messagesystems.com/docs/web-ref/console_commands.cache_list.php)

*   [cache statistics](https://support.messagesystems.com/docs/web-ref/console_commands.cache_stats.php)

*   [cache stat](https://support.messagesystems.com/docs/web-ref/console_commands.cache_stat.php)

Use the **cache stats**       command to determine the effectiveness of the `binding_domain_cache_size` and the `adaptive_cache_ttl` option settings. Both of these options are adaptive module options and are documented in [Options Valid in the adaptive Module Scope (3.3)](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.options.changes.3.3).

Depending on the number of bindings in your configuration and the number of domains being delivered to, the default value for the `binding_domain_cache_size` option may be too small. You can determine if this is the case by checking the cache statistics from the system console. Access the console with the command **`/opt/msys/ecelerity/bin/ec_console`**. Issue the **cache stats**       command and you should see output similar to the following:

```
05:40:31 /tmp/2025> cache stats
cache name                      lookups %                  deletions %
elts  hit miss pend    total  inserts man  ttl lru  total
---------------------- ----- -------------------- -------- -------------
adaptive_lookup
10000  42   58  0      7649361 651234   0   100 0   523487
```

`elts` identifies the number of elements in the cache, `ttl` the time to live and `lru` (least-recently-used) indicates the items evicted due to the cache being full. In this case the cache hit rate is only 42% and deletions by TTL is 100%; this means an old entry must be deleted in order to insert a new one.

Change the `adaptive_cache_size` to `100000` in the following way:

`05:45:31 /tmp/2025> config set adaptive adaptive_cache_size 100000`

Checking the cache statistics again shows:

```
06:45:42 /tmp/2025> cache stats
cache name                      lookups %                  deletions %
elts  hit miss pend   total  inserts man ttl lru  total
---------------------- ----- -------------------- -------- -------------
adaptive_lookup
100000  92   8   0   9033111 731760   0  20  80   645041
```

It is better to see more cache entries timing out due to TTL than being evicted due to the cache being full (lru). The better the cache hit rate, the faster the lookup of the adaptive-tuned configuration parameters will be.

There is no "magic" number that you can set this option to, but once you have satisfactory results make the change permanent by setting `adaptive_cache_size` in your configuration file.

### Note

If you reduce the cache size you will have to restart ecelerity for the change to take effect.

| [Prev](ad.troubleshooting.php)  | [Up](ad.troubleshooting.php) |  [Next](ad.options.php) |
| Chapter 8. Troubleshooting  | [Table of Contents](index.php) |  Appendix A. Adaptive Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)