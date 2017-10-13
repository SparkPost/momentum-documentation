| 71.56. postfix_logger – Postfix Logging |
| [Prev](modules.pipe_transport.php)  | Chapter 71. Modules Reference |  [Next](modules.reception_timing.php) |

## 71.56. postfix_logger – Postfix Logging

<a class="indexterm" name="idp22647248"></a>

Momentum supports logging in the same style as the Open Source MTA Postfix (http://www.postfix.org). This is mainly of use to sites migrating from a Postfix installation or those that have log-processing software that reads data in Postfix-compliant format.

The postfix_logger module writes to two logfiles: a `mainlog` where receptions, deliveries, and delviery failures are logged, and a `paniclog` where errors are logged.

### 71.56.1. Configuration

The postfix_logger module is configured through a configuration file using a stanza such as:

<a name="example.postfix_logger.3"></a>

**Example 71.81. posfix_logger Configuration**

```
postfix_logger "postfix_logger1" {
  mainlog  = "/var/log/postfix/mainlog"
  paniclog = "/var/log/postfix/paniclog"
  log_transient_failures = false
}
```

### Note

You must manually create the `postfix` directory and it must be writable by the user, `ecuser`. You must do this if you manually create the postfix module. You can change the ownership of the directory by issuing the shell command: **chown -R ecuser:ecuser /var/log/postfix** .

You can toggle the logging of transient failures using the `log_transient_failures` option.

| [Prev](modules.pipe_transport.php)  | [Up](modules.php) |  [Next](modules.reception_timing.php) |
| 71.55. pipe_transport – Module  | [Table of Contents](index.php) |  71.57. reception_timing - Reception Timing Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)