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

| 14.26. ec_logger – Momentum-Style Logging |
| [Prev](modules.ds_core.php)  | Chapter 14. Modules Reference |  [Next](modules.eleven.php) |

## 14.26. ec_logger – Momentum-Style Logging

<a class="indexterm" name="idp12040960"></a>

ec_logger module is a self-contained entity that tracks the full disposition status of every message that goes through Momentum. Everything either ends up in the mainlog or rejectlog. Together these two logs provide a full picture of all the mail transiting the system.

ec_logger writes three log files, mainlog.ec, paniclog.ec and rejectlog.ec. The mainlog.ec format was designed to be a concise, machine-parseable, computationally inexpensive and complete format for writing information about every message received and delivered by Momentum. Fixed position codes signify whether the log line represents a reception, delivery, transient failure or permanent failure. For more general information about ecelerity-style logging see [Section 4.3, “Logging”](operations.logging.php "4.3. Logging").

### 14.26.1. Configuration

The writing of ec_logger format logs is configured in your `ecelerity.conf` file. All logging capabilities in Momentum are implemented through the extension API. To load the ec_logger module, you add the following lines to the main body of your ecelerity.conf file:

<a name="example.ec_logger"></a>

**Example 14.46. ec_logger module**

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
   heartbeat = 60
}
```

This instructs Momentum to write a mainlog file containing message receipt and delivery records to `/var/log/ecelerity/mainlog.ec`, a paniclog containing error messages to `/var/log/ecelerity/paniclog.ec`, and a rejection log to `/var/log/ecelerity/rejectlog.ec`. The `heartbeat` option sets the interval at which "heartbeat" entries will be written to the log. `60` is the default value. The heartbeat entries in the log are essential for proper operation of the real time stats pieces, and changing the default value of `heartbeat` is not recommended unless advised to do so by Message Systems support.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The ec_logger module can log authentication and authorization events together in an accounting log using the `acctlog` option. You should note that, by default, no log rotation is performed for the acctlog. For more information on logging authorization and authentication events see [Section 2.2.2, “Configuring Authentication for the Control Listener”](conf.aaa.php#conf.control_authen "2.2.2. Configuring Authentication for the Control Listener").

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

You can also record the outcome of a spool import operation (see [spool import](console_commands.spool_import.php "spool import")) by configuring a path for the `importlog`. You should note that, by default, no log rotation is performed for the importlog.

You can also control the permissions of the various log files. The options to use are shown below with their default values.

```
mainlog_mode = 0644
paniclog_mode = 0644
rejectlog_mode = 0644
acctlog_log_mode = 0644
importlog_mode = 0644
```

Be sure to assign octal numbers to these options.

Additional configuration directives supported inside the ec_logger module configuration are:

```
log_receptions = <true|false:  default true>
log_deliveries = <true|false:  default true>
log_transient_failures = <true|false:  default true>
log_permanent_failures = <true|false:  default true>
log_rejections = <true|false:  default true>
log_errors = <true|false:  default true>
```

These directives allow you to specify precisely which events to log or not to log. Typically you will always want to log deliveries, receptions and errors. The log entry type is indicated by the fifth field. The type indicators are as follows:

*   `R` – Indicates a reception

*   `D` – Indicates a delivery

*   `X` – In a cluster configuration, transfers between nodes are indicated by an ‘`X`’. ‘`X`’ entries appear in the delivery log on the transferring node indicating that the message left for another cluster node. The node receiving the message will have an ‘`R`’ entry in its log.

*   `T` – Indicates a transient failure

*   `B` – Indicates both an in-band and an out-of-band bounce, if an in-band bounce, a `P` entry is logged in the main log.

There is no log type indicator for a rejection and the format of the rejection log differs from the other logs. Nor is there a log type indicator for the `log_errors` option which logs errors to the paniclog as unstructured text. The different log formats are described in [Appendix C, *Log Formats*](log_formats.php "Appendix C. Log Formats") .

*   `N` – indicates an autheNtication log entry

*   `Z` – indicates an authoriZation entry

*   `T` – indicates an authentication timeout

*   `?` – indicates an unknown type

For Windows, which has no `/var` directory by default, you should prefix the log filenames with `/opt/ecelerity/var` instead.

### Note

Momentum is no longer supported on Windows.

### 14.26.2. ec_logger Management Using Console Commands

The ec_logger module can be controlled through the `ec_console`; the following commands are available:

**14.26.2.1. ec_logger help**

Using this command displays the available console commands. The output is as follows:

```
set log_deliveries <on|off>
  Enable logging of deliveries
set log_receptions <on|off>
  Enable logging of receptions
set log_permanent_failures <on|off>
  Enable logging of permanent failures
set log_transient_failures <on|off>
  Enable logging of transient failures
set log_errors <on|off>
  Enable logging of errors
reopen logs
  Close and reopen log files
```
**14.26.2.2. ec_logger xml description**

This command outputs a description of the console commands in XML format.

| [Prev](modules.ds_core.php)  | [Up](modules.php) |  [Next](modules.eleven.php) |
| 14.25. ds_core – Datasource Query Core  | [Table of Contents](index.php) |  14.27. eleven – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)