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

| 14.25. delay_dsn – Delay DSN Generation |
| [Prev](modules.custom_logger.php)  | Chapter 14. Modules Reference |  [Next](modules.disclaimer.php) |

## 14.25. delay_dsn – Delay DSN Generation

<a class="indexterm" name="idp19133984"></a>

The `delay_dsn` module allows delivery status notifications (DSNs) to be sent to the purported sender of a message, when that message has not yet been delivered.

By default, no delay DSNs are sent. When enabled, delay DSNs are sent based on an exponential back-off schedule. The schedule is independent of the schedule used for delivery attempts. Delay DSNs are sent as RFC 3464-compliant messages.

The sending of delay DSNs and the schedules can be configured in various scopes. If further customization is required, there are a number of hooks available. These hooks can be used to achieve: different types of schedules, such as every N hours instead of exponential back-off; customization of the message content; finer-grained control over who delay DSNs are sent to.

<a name="example.delay_dsn.3"></a>

**Example 14.42. delay_dsn module**

```
delay_dsn "delay_dsn1" { }

generate_delay_dsn = "true"

# don't generate delay dsns for mail from foo.com
domain "foo.com" {
  generate_delay_dsn = "false"
}

domain "bar.com" {
  # custom delay dsn schedule. send a delay dsn on 3 hours, then 9 hours
  # (6 hours after 3 hours), 21 hours (12 hours after 9 hours),
  # 45 hours (24 hours after 21 hours), then every 24 hours
  # (maximum interval).
  delay_dsn_retry_interval = 10800
  delay_dsn_max_retry_interval = 86400
}
```

### 14.25.1. Customized Delay DSN Messages

The following example shows how to build a customized delay DSN message using the send_notification hook from Sieve. Here is the configuration fragment to load the delay DSN module and to associate a Sieve script with the send_notification hook:

<a name="example.delay_dsn.hook.3"></a>

**Example 14.43. delay_dsn customized messages**

```
delay_dsn "delay_dsn1" {}

sieve "sieve1" {
  hook:delay_dsn_send_notification [
    script = "/path/to/send_notification.siv"
    async = "false"
    return = "1"
  ]
}
```

Here is the Sieve script which generates a simple custom message:

<a name="example.delay_dsn.send.hook"></a>

**Example 14.44. send_notification hook Sieve example**

```
$from = envelope :all "to";
$to = envelope :all "from";

# Don't bounce to the null sender.
if ec_test :is $to "" {
  stop;
}

generate_mail_raw $from $to text:
Subject: Your message has been delayed

Your message has been delayed.  We are still trying to deliver it.
You may receive further notifications until we can deliver it.
We will notify you if delivery fails.
.
;
```

### 14.25.2. delay_dsn Management Using Console Commands

The delay_dsn module can be controlled through the `ec_console`; the following command is available:

### Note

In version 3.0, non-singleton module commands are issued using *`Scope_Name`*:*`Instance_Name`* followed by the command. Use the **module list**      command from the system console to determine the scope name or instance name of a module. If a module does not have an instance name it is a singleton.

As of version 3.0, all module-specific commands related to setting or getting module options have been removed. Use the following syntax to set or get module-specific options: **config {set | eval | get} *`Scope_Name [Instance_Name] option [value]`*** . Note that there is no ‘`:`’ between the Scope_Name and the Instance_Name and that the Instance_Name is not used with singleton modules.

**14.25.2.1. delay_dsn:*`delay_dsn1`* show pending events**

This command lists all pending events.

| [Prev](modules.custom_logger.php)  | [Up](modules.php) |  [Next](modules.disclaimer.php) |
| 14.24. custom_logger – Customizable Logging  | [Table of Contents](index.php) |  14.26. disclaimer – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)