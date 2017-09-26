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

| 4.3. Logging |
| [Prev](operations.console-commands.php)  | Chapter 4. Operations |  [Next](operations.multivip.php) |

## 4.3. Logging

Momentum provides an extremely flexible and robust logging API, and ships with five bundled implementations: ec_logger, Exim format, Postfix format, Sendmail format, and a freeform custom_logger that lets you specify your own logging format.

### 4.3.1. ec_logger

ec_logger writes three main log files, `mainlog.ec`, `paniclog.ec`, and `rejectlog.ec`. The `mainlog.ec` format was designed to be a concise, machine-parseable and computationally inexpensive format for writing complete information about every message received and delivered by Momentum. Fixed position codes signify whether the log line represents a reception, delivery, transient failure or permanent failure. The ec_logger module is a self-contained entity that tracks the full disposition status of every message that goes through Momentum. Everything either ends up in the mainlog or rejectlog. Both of these logs together provide a full picture of all the mail transiting the system.

The `paniclog.ec` is a debugging log where system events are logged depending on the level of Debug_Flags set in your configuration. Under normal circumstances Debug_Flags should be empty or should be omitted from the `ecelerity.conf` file. For debugging purposes, set up Debug_Flags as described in [debug_flags](conf.ref.debug_flags.php "debug_flags"). When a problem event occurs, if it is within the logging level set by the `Debug_Flags` option, then the event is written to the paniclog. Excepting informational startup messages, the paniclog should be empty under normal circumstances. It is recommended that you periodically check your `paniclog.ec` (or schedule a cron job to do it for you) to look for any anomalous events.

The `rejectlog.ec` is a debugging log where records of inbound mails that are rejected by Momentum (either due to policy or protocol deviations) are stored. Momentum lists the full context for all rejected messages, as well as a summary of why the mail was rejected.

**4.3.1.1. ec_logger Configuration**

The writing of ec_logger format logs is configured in your `ecelerity.conf` file. All logging capabilities in Momentum are implemented through the extension API. To load the ec_logger module, you add the following lines to the main body of your `ecelerity.conf` file.

<a name="example.operations.ec_logger"></a>

**Example 4.1. ec_logger module**

```
Logger logging/ec_logger ec_logger
{
   mainlog = /var/log/ecelerity/mainlog.ec
   paniclog = /var/log/ecelerity/paniclog.ec
   rejectlog = /var/log/ecelerity/rejectlog.ec
   # the following option has been available since version 2.2
   acctlog = /var/log/ecelerity/acctlog.ec
   # the following option has been available since version 2.2.2.29
   importlog = /var/log/ecelerity/importlog.ec
}
```

In the default configuration, the ec_logger module is enabled and logging is configured for the reject log, the panic log and the main log. Detailed configuration information is available in [Section 14.26, “ec_logger – Momentum-Style Logging”](modules.ec_logger.php "14.26. ec_logger – Momentum-Style Logging").

**Configuration Change. ** This feature is available starting from Momentum 2.2.

ec_logger can also write an accounting log by configuring a path for the `acctlog` option. This log records authentication and authorization events. You should note that, by default, no log rotation is performed for the accounting log. For more information on this topic see [Section 2.2.2, “Configuring Authentication for the Control Listener”](conf.aaa.php#conf.control_authen "2.2.2. Configuring Authentication for the Control Listener").

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

You can also record the outcome of a spool import operation (see [spool import](console_commands.spool_import.php "spool import")) by configuring a path for the `importlog`. Again, by default, no log rotation is performed for the import log.

### Note

If you find that you have rejectlog entries with the reason "550 5.7.1 [internal] discarded by policy", and you are having difficulty in correlating those rejections with your policy rules, it could be because your bounce processing configuration is set to blackhole any detected bounces. If this is the case, you should expect to see a corresponding entry in your bounce log, except in the case where the internal bounce classifier has determined that the incoming message was classified as BC_SUBSCRIBE, a subscription request. The bounce logger does not log this type of incoming mail because it does not relate to a specific outgoing message originating from your site.

**4.3.1.2. Using System Console Commands**

The ec_logger module is accessible through ec_console for run-time configuration.

The information types logged can be toggled as in the following example.

<a name="example.operations.ec_logger.options"></a>

**Example 4.2. Setting options**

`ecelerity> ec_logger set log_transient_failures off`

If the command is successful, then `Set` is output to the screen. Set other options in exactly the same way.

The **internal stats**       command shows internal metrics such as the pending journal size. If you move a log, use the ec_console command **ec_logger reopen logs**             to reopen all the log files. .

For more information see [Section 14.26.2, “ec_logger Management Using Console Commands”](modules.ec_logger.php#modules.ec_logger.console "14.26.2. ec_logger Management Using Console Commands").

**4.3.1.3. Statistical Reporting with ec_stats**

Momentum provides a script called ec_rt_stats that performs statistical analysis on your `mainlog.ec` files. ec_rt_stats provides copious information regarding the volume and delivery performance of mail transiting the system. For more information see [ec_rt_stats](executable.ec_rt_stats.php "ec_rt_stats").

**4.3.1.4. Statistical Reporting with ec_stats**

Momentum provides a script called ec_stats that performs statistical analysis on your `mainlog.ec` files. ec_stats provides copious information regarding the volume and delivery performance of mail transiting the system.

### Note

This command is deprecated and as of version 3.0, will no longer be available. Use **ec_rt_stats** instead.

The report contains data:

*   Total number and size of receptions, deliveries and failures.

*   Minimum, maximum and average message size.

*   Breakdown of messages by size for successful and failed attempts.

*   Breakdown of deliveries by delivery time.

*   Top domains by traffic.

*   Top domains by delivery time.

*   Breakdown of failure rejection causes by classification.

*   Detailed report on top X failed domains.

To generate the report on the current (active) logfile, you run the following command:

`/opt/ecelerity/bin/ec_stats`

Additionally the following options are available

<dl class="variablelist">

<dt>`-multivip`</dt>

<dd>

Selects a specific MultiVIP© binding to which to limit the select. Can be specified multiple times to select multiple MultiVIP© bindings. Default behavior is to use all bindings.

</dd>

<dt>`-l, -logfile`</dt>

<dd>

Specify the log file on which to run. Default value is `/var/log/ecelerity/mainlog.ec`

</dd>

<dt>`-b, -bouncefile`</dt>

<dd>

Specify the bounce log file on which to run. Default value is `/var/log/ecelerity/bouncelog.ec`

</dd>

<dt>`-bounce-details`</dt>

<dd>

Specify the number of domains to be shown in the detailed bounce analysis section. Default value is 20.

</dd>

<dt>`-h, -help`</dt>

<dd>

An online help message.

</dd>

</dl>

### 4.3.2. The `mainlog.ec` Format

The `mainlog.ec` file logs reception, delivery, transient failure, permanent failure and heartbeat events. The log entry format differs depending upon the event type. The different formats are described in [Section C.1.1, “The `mainlog.ec`”](log_formats.version_2.php#log_formats.mainlog "C.1.1. The mainlog.ec").

A permanent failure indicates that the message that was attempted failed in such a way that it should not be retried further. After logging a permanent failure the message will be discarded.

A transient failure is a failure which allows retrying the same message. The ec_logger module allows for optional logging of transient failures. Since they are not permanent failures and only indicate that a message will be attempted later due to temporary problems, many users opt to disable them to conserve log space. Note that if you have enabled the bounce_logger, transient failures will also be recorded there. The bounce_logger is a supplemental log that contains additional information and different formatting. For more information see [Section 14.10, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "14.10. bounce_logger – Momentum-Style Bounce Logging").

### 4.3.3. bounce_logger

bounce_logger writes a single logfile, `bouncelog.ec`, which records both inband (or protocol-time) and out-of-band bounces. The format was designed to be a concise, machine-parseable, computationally inexpensive and complete format for writing information about every bounce message.

For a description of the bounce_logger file format see [Section C.1.6, “The bounce_logger”](log_formats.version_2.php#log_formats.bouncelog "C.1.6. The bounce_logger").

**4.3.3.1. bounce_logger Configuration**

The writing of bounce_logger format logs is determined by the `ecelerity.conf` file. To load the bounce_logger module, add the following lines to the main body of your `ecelerity.conf` file:

For a description of how the `bouncelog.ec` file is formatted see [Section C.1.6, “The bounce_logger”](log_formats.version_2.php#log_formats.bouncelog "C.1.6. The bounce_logger").

<a name="example.operations.bounce_logger"></a>

**Example 4.3. bounce_logger module**

```
Logger logging/bounce_logger bounce_logger
{
   bouncelog = "/var/log/ecelerity/bouncelog.ec"
   log_inband_bounces = true
   log_outofband_bounces = true
}
```

Detailed configuration information is available in [Section 14.10, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "14.10. bounce_logger – Momentum-Style Bounce Logging").

**4.3.3.2. bounce_logger Management**

The bounce_logger module allows for a limited set of online commands via ec_console.

The information types logged can be toggled as in the following examples. For example, to disable logging of inband bounces, you could use the following:

```
ecelerity> ec_logger log_inband_bounces off
Set
```

If you move a log, the ec_console command 'reopen logs' will cause ec_logger to reopen all its logfiles.

For a complete list of the bounce_logger system console commands see [Section 14.10, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "14.10. bounce_logger – Momentum-Style Bounce Logging").

### 4.3.4. custom_logger Configuration

custom_logger is configured through the `ecelerity.conf` file with a stanza such as:

<a name="example.operations.custom_logger"></a>

**Example 4.4. custom_logger module**

```
Logging logging/custom_logger custom_logger
{
  delivery_format = "%t %r@%R"
  delivery_logfile = "/var/log/ecelerity/delivery_log"
}
```

Detailed configuration information is available in [Section 14.19, “custom_logger – Customizable Logging”](modules.custom_logger.php "14.19. custom_logger – Customizable Logging").

**4.3.4.1. ec_console Accessibility**

custom_logger is accessible through ec_console for run-time configuration. For more information see [Section 14.19.8, “custom_logger Management Using Console Commands”](modules.custom_logger.php#modules.custom_logger.console "14.19.8. custom_logger Management Using Console Commands").

### 4.3.5. Rotating Logs

Momentum provides a utility script `ec_rotate` which will rotate and compress logs for you. The number of previous days logs to keep can be set. It is recommended that you run this script daily from your system's crontab.

Momentum opens its logfiles at startup and maintains an open filehandle to them throughout its life cycle. When you invoke ec_rotate, the `mainlog.ec` and `paniclog.ec` are moved to `mainlog.ec.1` and `paniclog.ec.1` and Momentum is instructed to re-open its logfiles. This creates new `mainlog.ec` and `paniclog.ec` files. Unix file I/O semantics guarantee that no log lines will be lost between the time the file is moved and the logs are re-opened; they will simply appear in the older of the logs. To avoid the overhead of checking the logfile on every attempt, Momentum relies on the user to tell it when the logfile needs to be re-opened.

To invoke ec_rotate you can simply execute **ec_rotate** as the root user. This will rotate the `mainlog.ec` and `paniclog.ec` files in the `/var/log/ecelerity` directory, compress them using bzip, and keep seven days of logs on disk. You can modify this behavior by passing the following options:

<dl class="variablelist">

<dt>`-r, -retention`</dt>

<dd>

Specify the maximum number of logs to keep on disk. Default is 7.

</dd>

<dt>`-c, -compress`</dt>

<dd>

Specify the compression utility to use for compressing logfiles. Default is /usr/bin/bzip2.

</dd>

<dt>`-l, -logfile`</dt>

<dd>

Specify the logfile(s) to be rotated. May be specified multiple times to handle multiple logs.

</dd>

</dl>

If your logfiles are in `/var/log/email/` and you only want to keep 3 days, you should use:

```
/opt/ecelerity/bin/ec_rotate -l /var/log/email/mainlog.ec \
  -l /var/log/email/paniclog.ec -r 3
```

### 4.3.6. custom_logger

Using the custom_logger module, Momentum can write logs for every stage of a message's life cycle in user-defined formats. custom_logger lets you log each phase to its own logfile, or use a combined logfile for all stages. Logging stages can be enabled or disabled individually. For more information see [Section 14.19, “custom_logger – Customizable Logging”](modules.custom_logger.php "14.19. custom_logger – Customizable Logging").

| [Prev](operations.console-commands.php)  | [Up](operations.php) |  [Next](operations.multivip.php) |
| 4.2. Console Commands  | [Table of Contents](index.php) |  4.4. MultiVIP© Interfaces |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)