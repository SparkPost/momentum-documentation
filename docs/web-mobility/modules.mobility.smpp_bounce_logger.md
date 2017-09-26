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

| 2.6. The smpp_bounce_logger Module |
| [Prev](mobility.configuration.smpp.php)  | Chapter 2. Mobile Momentum SMPP |  [Next](mobility.runtime.php) |

## 2.6. The smpp_bounce_logger Module

It is often convenient to look at bounced SMPP messages only. The smpp_bounce_logger makes this much easier by writing bounces—both in-band and out-of-band bounce messages—to a single file in ‘`@`’ delimited format.

The writing of smpp_bounce_logger format logs is configured in your `ecelerity.conf` file. To load the smpp_bounce_logger module, add the following lines to the main body of your `ecelerity.conf` file or add the smpp_bounce_logger module using the web console:

```
smpp_bounce_logger "smpp_bounce_logger1" {
  bounce_concurrency = 1
  bounce_logfile = "/var/log/ecelerity/smppbouncelog.ec"
}
```

A complete list of the available configuration options follows:

<dl class="variablelist">

<dt>bounce_concurrency</dt>

<dd>

This option defines the number of threads in the pool. The default value for this option is `1`.

</dd>

<dt>bounce_logfile</dt>

<dd>

This option determines the name of the log file. The default value for this option is `/var/log/ecelerity/smppbouncelog.ec`.

</dd>

<dt>bounce_logmode</dt>

<dd>

The mode of the log file in octal notation. The default value for this option is `0644`.

</dd>

<dt>bounce_namespace</dt>

<dd>

This option specifies which macro namespaces should be searched, when expanding the format strings. This variable is set using commas to separate different namespaces. The default value for this option is `smpp_bounce_logger,sieve,custom_logger`.

</dd>

<dt>bounce_thread_pool</dt>

<dd>

Define a separate thread pool for bounces. Otherwise the `io` pool is used. For more information about defining thread pools see [threadpool](https://support.messagesystems.com/docs/web-ref/conf.ref.threadpool.php).

</dd>

<dt>heartbeat</dt>

<dd>

The interval at which "heartbeat" entries will be written to the log. The default value for this option is `60`.

</dd>

<dt>log_bounce_heartbeat_format</dt>

<dd>

This option determines the format of the heartbeat log. The default value for this option is `%t@M` where the macro `%t` indicates a Unix timestamp and `M` is a literal indicating that this log entry is a heartbeat.

</dd>

<dt>log_bounce_inband</dt>

<dd>

Whether or not to log inband bounces. The default value for this option is `true`.

</dd>

<dt>log_bounce_inband_format</dt>

<dd>

This option defines the format of the inband bounces log. The default value for this option is `%t@I@%i@%sa@%da@%d@%g@%b@%H@%e`. How these macros are expanded is described in [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros"). In this case `I` is a literal indicating that this is an inband log entry.

</dd>

<dt>log_bounce_outband</dt>

<dd>

Whether or not to log out-of-band bounces. The default value for this option is `true`.

</dd>

<dt>log_bounce_outband_format</dt>

<dd>

This option defines the format of the out-of-band bounces log. The default value for this option is `%t@O@%i@%sa@%da@%d@%g@%b@%H@%e`. How these macros are expanded is described in [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros"). In this case `O` is a literal indicating that this is an out-of-band log entry.

</dd>

<dt>log_bounce_transient</dt>

<dd>

Whether or not to log transient bounces. The default value for this option is `true`.

</dd>

<dt>log_bounce_transient_format</dt>

<dd>

This option defines the format of transient bounces log. The default value for this option is `%t@T@%i@%sa@%da@%d@%g@%b@%H@%e`. How these macros are expanded is described in [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros"). In this case `T` is a literal indicating that this is a transient failure log entry.

</dd>

</dl>

| [Prev](mobility.configuration.smpp.php)  | [Up](momentum.mobility.php) |  [Next](mobility.runtime.php) |
| 2.5. smpp_logger Module Configuration  | [Table of Contents](index.php) |  2.7. Message Context Variables |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)