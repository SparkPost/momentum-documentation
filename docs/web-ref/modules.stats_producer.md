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

| 14.71. statp – Stats Producer Module |
| [Prev](modules.static_routes.php)  | Chapter 14. Modules Reference |  [Next](modules.suppress_spool.php) |

## 14.71. statp – Stats Producer Module

<a class="indexterm" name="idp21514992"></a>

The `stats_producer` module is used internally by the MTA to provide real-time graphing data for both the single-node web console as well as the cluster-wide web console. However, you must also configure the logging modules as described in [Section 4.5.5, “Logging and the Web UI”](operations.logging.php#operations.logging.web.ui "4.5.5. Logging and the Web UI").

This module is configured as follows:

<a name="example.statp.3"></a>

**Example 14.101. statp module**

```
statp "statp1" {
  log_file = "jlog:///var/log/ecelerity/statp.rt"
  interval = 60
}
```

The the default value for `interval` is `60` seconds. You should not need to change this option.

The `log_file` option defaults to `jlog:///var/log/ecelerity/statp.rt`. This option should not need to be changed from its default. This module is intended to be run in conjunction with **ec_rt_stats2**, with the rollup process running centrally on a single web UI node.

**Configuration Change. ** This feature is available starting from Momentum 3.0.13.

Sites with large numbers of bindings and a highly contended disk subsystem will need to enable the `watchlist_only` option to track bounces for domains on the watchlist only. In version 3.0.13 the default value for this option is `false`. As of version 3.0.14, the default value for this option is `true`. This reduces the amount of data generated and disk i/o.

The watchlist is a schema that is created automatically in the `ecelerity` PostgreSQL database. The `rt_stats_watchlist_only` option also needs to be enabled in the `ec_rotate.conf` file. For more information see [the section called “The `ec_rotate.conf` File”](executable.ec_rotate.php#ec_rotate.conf "The ec_rotate.conf File").

Apart from these three options, all other options have been removed in version 3.0.

### 14.71.1. See Also

[ec_rt_stats2](executable.ec_rt_stats2.php "ec_rt_stats2")

| [Prev](modules.static_routes.php)  | [Up](modules.php) |  [Next](modules.suppress_spool.php) |
| 14.70. static-routes - Static Routes  | [Table of Contents](index.php) |  14.72. suppress_spool – Deferred Message Spooling |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)