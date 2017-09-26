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

| 2.5. smpp_logger Module Configuration |
| [Prev](mobility.smpp.caveats.php)  | Chapter 2. Mobile Momentum SMPP |  [Next](modules.mobility.smpp_bounce_logger.php) |

## 2.5. smpp_logger Module Configuration

The smpp_logger module determines the location of the SMPP log file, which types of records are created and the format of those records. Find below a sample smpp_logger configuration:

```
smpp_logger "smpp_logger1" {
  logfile = "/var/log/ecelerity/smpplog.ec"
  logmode = 0644
  log_reception_format = "%t@R@%i@%sa@%da@%d@%g@%b@%H@%B@%sg"
  log_permfail_format = "%t@P@%i@%sa@%da@%d@%g@%b@%H@%e"
  log_delivery_format = "%t@D@%i@%sa@%da@%d@%g@%b@%H@%B@%sg@%rm"
  log_tempfail = false
  log_status = false
}
```

smpp_logger module configuration options can be set through the web UI in exactly the same way as other options. Setting module options through the web UI is described in [Changing Module Configuration Options](https://support.messagesystems.com/docs/web-ref/web3.php#web3.module_config). Options specific to this module are described below.

<dl class="variablelist">

<dt>concurrency</dt>

<dd>

If the `thread_pool` option is not configured, this option specifies the number of threads that will be in the pool the logger creates for itself. The default value for this option is `1`.

</dd>

<dt>log_conversion</dt>

<dd>

Whether or not message conversion events are logged. The default value for this option is `true`.

</dd>

<dt>log_conversion_format</dt>

<dd>

This option specifies the log line format for message conversion log entries. The default value is `"%t@X@%i@%sa@%da@%d@%g@%b@%H@%e"`. See [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros") for a description of how these macros are expanded. The literal value ‘`X`’ in the second field indicates that the log entry is a conversion.

</dd>

<dt>log_delivery</dt>

<dd>

Whether or not to log MT-SMS deliveries to the SMSC. The default value for this option is `true`.

</dd>

<dt>log_delivery_format</dt>

<dd>

The delivery log format. The default value for this option is `"%t@D@%i@%sa@%da@%d@%g@%b@%H@%B@%sg@%rm"`. See [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros") for a description of how these macros are expanded. The literal value ‘`D`’ in the second field indicates that the log entry is a delivery.

</dd>

<dt>log_permfail</dt>

<dd>

Whether or not to log MT-SMS permanent failures to the SMSC. The default value for this option is `true`.

</dd>

<dt>log_permfail_format</dt>

<dd>

The permanent failure log format. The default value for this option is `"%t@P@%i@%sa@%da@%d@%g@%b@%H@%e"`. See [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros") for a description of how these macros are expanded. The literal value ‘`P`’ in the second field indicates that the log entry is a permanent failure.

</dd>

<dt>log_reception</dt>

<dd>

Whether or not MO-SMS receptions from the SMSC are logged. The default value for this option is `true`.

</dd>

<dt>log_reception_format</dt>

<dd>

The reception log format. The default value for this option is `"%t@R@%i@%sa@%da@%d@%g@%b@%H@%B@%sg"`. See [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros") for a description of how these macros are expanded. The literal value ‘`R`’ in the second field indicates that the log entry is a reception.

</dd>

<dt>log_status</dt>

<dd>

Whether or not to log delivery status messages such as SMSC Delivery receipts, SME acknowledgements and interim delivery notifications. The default value for this option is `true`.

</dd>

<dt>log_status_format</dt>

<dd>

The status log format. The default value for this option is `"%t@S@%sa@%da@%d@%g@%b@%H@%rm@%drl@%T@%S@%e"`. See [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros") for a description of how these macros are expanded. The literal value ‘`S`’ in the second field indicates that the log entry is a status message.

The SMPP status message contains its own type indicated by the macro `%T`, which can be one of `SMSC Status`, `SME Delivery`, `SME User` `Intermediate`. Other values may exist, but are represented as `Unknown`.

</dd>

<dt>log_tempfail</dt>

<dd>

This option specifies the log line format for temporary failures to deliver an MT-SMS to the SMSC The default value for this option is `true`.

</dd>

<dt>log_tempfail_format</dt>

<dd>

The temporary failure log format. The default value for this option is `"%t@T@%i@%sa@%da@%d@%g@%b@%H@%e"`. See [Table 2.1, “Log format macros”](mobility.configuration.smpp.php#mobility.log.macros "Table 2.1. Log format macros") for a description of how these macros are expanded. The literal value ‘`T`’ in the second field indicates that the log entry is a temporary failure.

</dd>

<dt>logfile</dt>

<dd>

The logfile option controls the path to the file where SMPP events are logged by this logger instance. The default value for this option is `/var/log/ecelerity/smpplog.ec`.

</dd>

<dt>logmode</dt>

<dd>

The log file permissions in octal notation. The default value for this option is `0644`.

</dd>

<dt>namespace</dt>

<dd>

The log line formats are composed of static parts and Sieve-style macros. This option allows you to change the namespace used during macro substitution. The default is `smpp_logger,sieve,custom_logger` meaning the system will first look for an smpp_logger macro with the given name, then a sieve macro, and finally a custom_logger macro.

</dd>

<dt>thread_pool</dt>

<dd>

Specify a thread pool to use. There is no default value for this option. If it is not set, the logger creates a pool named smpp_logger:*`instance_name`*_io with concurrency determined by the `concurrency` option. If `thread_pool` is set, then the smpp_logger module `concurrency` option is not used. For more information about creating thread pools see [https://support.messagesystems.com/docs/web-ref/conf.ref.threadpool.php](https://support.messagesystems.com/docs/web-ref/conf.ref.threadpool.php) .

</dd>

</dl>

Like other modules, smpp_logger options can be set or retrieved from the system console. For example, you can set the `logmode` in the following way: **config set smpp_logger *`smpp_logger1`* logmode 0644**                                              . For more information see [config](https://support.messagesystems.com/docs/web-ref/console_commands.config.php).

### 2.5.1. Log Format Macros

The macros used to determine the content of log entries are described in the following:

<a name="mobility.log.macros"></a>

**Table 2.1. Log format macros**

| Macro | Description |
| --- | --- |
| %t | The time in seconds since the Unix epoch when the event was logged. |
| %i | The Momentum message ID of the message; this will be the same in all log lines related to a message, even in different protocol logs (i.e. SMTP and SMPP). |
| %d | The routing domain of the SMS message. |
| %g | The binding group to which the message belongs. If the binding is not in a group, the group is logged as "default". |
| %b | The binding to which the message is assigned. |
| %H | The remote IP address of the connection on which the log event occurred |
| %dc | The SMS data coding used in the SMS message. |
| %sa | The source address of the SMS message. Note that for status events, this refers to the source of the original message for which we are getting status, not the status message itself. |
| %sn | The source numbering plan of the SMS message. Note that for status events, this refers to the source of the original message for which we are getting status, not the status message itself. |
| %st | The source type of number of the SMS message. Note that for status events, this refers to the source of the original message for which we are getting status, not the status message itself. |
| %da | The destination address. |
| %dn | The destination numbering plan of the SMS message. Note that for status events, this refers to the destination of the original message for which we are getting status, not the status message itself. |
| %dt | The destination type of number of the SMS message. Note that for status events, this refers to the destination of the original message for which we are getting status, not the status message itself. |
| %rm | the MessageID in the response. It is assigned by the remote server/SMSC. |
| %rM | The message ID returned by the SMSC in the submit_sm_response. This is the raw version, and may contain arbitrary characters! |
| %T | The status type in the status event, i.e. "SMSC Delivery", "SME User", etc. |
| %S | The status in the status event, i.e. "Enroute", "Delivered", "Accepted", etc. |
| %e | The error description in the SMPP response, as defined in the spec or may be vendor-specific. |
| %B | The message size. |
| %sg | When a large message gets sent through multiple SMSes, this field indicates the segment number of the log line. |
| %text | The SMS message payload (in the character set indicated by the %dc macro). |
| %drl | The delivery report latency. The interval between submission and receipt. |

| [Prev](mobility.smpp.caveats.php)  | [Up](momentum.mobility.php) |  [Next](modules.mobility.smpp_bounce_logger.php) |
| 2.4. SMPP Caveats  | [Table of Contents](index.php) |  2.6. The smpp_bounce_logger Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)