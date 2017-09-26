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

| Chapter 8. Troubleshooting |
| [Prev](ad.rules.sweep.rules.php)  |   |  [Next](ad.troubleshooting.console.php) |

## Chapter 8. Troubleshooting

**Table of Contents**

<dl class="toc">

<dt>[8.1\. Logs, Alerts and Summaries](ad.troubleshooting.php#ad.troubleshooting.logs)</dt>

<dt>[8.2\. Using the System Console](ad.troubleshooting.console.php)</dt>

</dl>

One troubleshooting strategy is to change the log level for the adaptive module. Do this by making the following change to the configuration of the adaptive module:

```
adaptive {
  ...
  debug_level = "debug"
}
```

The different debug levels are described at [Debug Levels](https://support.messagesystems.com/docs/web-ref/conf.ref.debug_flags.php#conf.ref.debug.levels). Remove this setting when you have finished debugging. You can also set this option from the system console as described in the following section.

If you suspect that there are other issues—scripting problems, for example—you can reset the logging level for a specific module or set it globally using [debug_flags](https://support.messagesystems.com/docs/web-ref/conf.ref.debug_flags.php).

## 8.1. Logs, Alerts and Summaries

The adaptive module logs its actions and sends out alerting emails and activity summaries.

### Note

For more verbose log entries set the debug level in the configuration file or by using the system console. From the console issue the command **`config set adaptive debug_level debug`**                                . When you have finished debugging be sure to reset the debug level in the following way: **`config set adaptive debug_level warning`**                                  .

When an alerting email is sent, a log entry starting with `ALERT on " .. hostname .. : .. action.` is created. The frequency of alerting emails depends upon the volume of traffic and the `adaptive_notification_interval` setting. For a sample summary email see [Summary Email](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.sample.email).

Whenever the adaptive module makes an adjustment to delivery parameters, it logs that fact to the adaptive log. To confirm that AD is behaving as expected you can check these logs. The logs are located in the `/var/log/ecelerity/adaptive` directory. The messages in the adaptive logs are detailed in [Appendix C, *Adaptive Logs*](ad.appendix.logs.php "Appendix C. Adaptive Logs") . *Note*: Log entries differ from alerting emails.

Adaptive logging is enabled by default but you can ensure that it is turned on by checking the value of the adaptive module option, `enable_logging`. The adaptive module option `operational_log_level` sets the log level for the adaptive log. This option defaults to `notice`. Change this value for more verbose logging. For easier readability you can also use the `split_logs_by_binding` option to create logs by binding.

| [Prev](ad.rules.sweep.rules.php)  |   |  [Next](ad.troubleshooting.console.php) |
| Chapter 7. Sweep Rules – Configuring Bounce and FBL Behavior  | [Table of Contents](index.php) |  8.2. Using the System Console |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)