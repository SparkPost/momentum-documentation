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

| 14.13. bounce_logger – Momentum-Style Bounce Logging |
| [Prev](modules.bounce_classifier_override.php)  | Chapter 14. Modules Reference |  [Next](modules.brightmail.php) |

## 14.13. bounce_logger – Momentum-Style Bounce Logging

<a class="indexterm" name="idp18222288"></a>

The ec_logger module provides a full picture of all the mail transiting the system. However, it is often convenient to look at bounced messages only. The bounce_logger makes this much easier by writing bounces—both in-band and out-of-band bounce messages—to a single file in ‘`@`’ delimited format.

### 14.13.1. Configuration

The writing of bounce_logger format logs is configured in your `ecelerity.conf` file. All logging capabilities in Momentum are implemented through the extension API. To load the bounce_logger module, you add the following lines to the main body of your `ecelerity.conf` file:

<a name="example.bounce_logger.3"></a>

**Example 14.21. bounce_logger module**

```
bounce_logger "bounce_logger1"
{
   bouncelog = "/var/log/ecelerity/bouncelog.ec"
   bouncelog_mode = 0644
   heartbeat = 60
}
```

This instructs Momentum to write a bouncelog file containing message bounce records to `/var/log/ecelerity/bouncelog.ec` with the file permissions 0644\. The `heartbeat` option sets the interval at which "heartbeat" entries will write to the log. `60` is the default value. The heartbeat entries in the log are essential for proper operation of the real time stats pieces, and changing the default value of `heartbeat` is not recommended unless advised to do so by Message Systems support.

### Note

If you find that you have rejectlog entries with the reason "550 5.7.1 [internal] discarded by policy", and you are having difficulty in correlating those rejections with your policy rules, it could be because your bounce processing configuration is set to blackhole any detected bounces. If this is the case, you should expect to see a corresponding entry in your bounce log, except in the case where the internal bounce classifier has determined that the incoming message was classified as BC_SUBSCRIBE, a subscription request. The bounce logger does not log this type of incoming mail because it does not relate to a specific outgoing message originating from your site.

Heartbeat entries in the log take the following format:

`1251222268@@@@M1`

The first field is a Unix timestamp and the next three fields are unused. Having three unused fields ensures that, like other logs, the fifth field is the log entry type. This makes parsing easier.

The final field is a type identifier. Having a different `type` identifier in version 3.0, helps differentiate log entries when a log has both version 2.2 and version 3.0 entries.

Additional configuration directives supported inside the bounce_logger module configuration are

```
log_inband_bounces = <on|off:  default on>
log_outofband_bounces = <on|off:  default on>
```

These directives allow you to specify precisely which events to log or not to log.

`log_transient_failures = <on|off:  default on>`

The `log_transient_failures` option creates a log entry of type ‘`T`’ in the bounce log along with the actual bounce log line. Apart from the type identifier, the log entry for a transient failure is the same as other bounce log entries. Note that bounce log entries differ in format from ec_logger entries. You can find details of the bounce log file format in [Section E.1.5.1, “The bounce_logger Format”](log_formats.version_3.php#bounce_logger.format3 "E.1.5.1. The bounce_logger Format"). The default value for this option is `on`.

The bounce_logger relies on additional global configuration options: [bounce_domains](conf.ref.bounce_domains.php "bounce_domains"), [bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior"), [bounce_suppress_list](conf.ref.bounce_suppress_list.php "bounce_suppress_list") and [bounce_pattern](conf.ref.bounce_pattern.php "bounce_pattern").

### 14.13.2. bounce_loggers in a Cluster Configuration

In a cluster configuration that includes the web UI, there are typically three bounce_loggers defined. These loggers, with their conventional instance names, are as follows:

*   `bounce_logger "bounce_logger_cluster"` – this logger is defined in the `ecelerity-cluster.conf` file and creates a log in jlog format that is used for consolidating log files on the cluster manager

*   `bounce_logger "bounce_logger"` – the node-specific log files in text format

*   `bounce_logger "bounce_logger_rt"` – the node-specific log files in jlog format used by the web UI

### 14.13.3. bounce_logger Management Using System Console Commands

### Note

In version 3.0, non-singleton module commands are issued using *`Scope_Name`*:*`Instance_Name`* followed by the command. Use the **module list**      command from the system console to determine the scope name or instance name of a module. If a module does not have an instance name it is a singleton.

As of version 3.0, all module-specific commands related to setting or getting module options have been removed. Use the following syntax to set or get module-specific options: **config {set | eval | get} *`Scope_Name [Instance_Name] option [value]`*** . Note that there is no ‘`:`’ between the Scope_Name and the Instance_Name and that the Instance_Name is not used with singleton modules.

The bounce_logger module allows for a limited set of online commands via ec_console.

**14.13.3.1. bounce_logger:*`bounce_logger_rt`* reopen logs**

If you move a log, use the ec_console command **reopen logs**      to close and reopen all the log files.

### 14.13.4. See Also

[Table 9.7, “logging options”](options-summary.php#logging-options-table "Table 9.7. logging options")

| [Prev](modules.bounce_classifier_override.php)  | [Up](modules.php) |  [Next](modules.brightmail.php) |
| 14.12. bounce_classifier_override – The Bounce Classifier Override Module  | [Table of Contents](index.php) |  14.14. brightmail – Brightmail Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)