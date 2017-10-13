## 71.63. sendmail_logger – Sendmail Logging

<a class="indexterm" name="idp22957696"></a>

Momentum supports logging in the same style as the Open Source MTA Sendmail (http://www.sendmail.org). This is mainly of use to sites which are moving from a Sendmail install or otherwise have log-processing software that reads data in Sendmail-compliant format.

The sendmail_logger module writes to two logfiles: a `mainlog` where receptions, deliveries, and delivery failures are logged, and a `paniclog` where errors are logged.

### 71.63.1. Configuration

The sendmail_logger module is configured through a configuration file using a stanza such as:

<a name="example.sendmail_logger.3"></a>

**Example 71.88. sendmail_logger module**

```
sendmail_logger "sendmail_logger1" {
  mainlog  = "/var/log/sendmail/mainlog"
  paniclog = "/var/log/sendmail/paniclog"
}
```

| [Prev](modules.seedlist.php)  | [Up](modules.php) |  [Next](modules.smtp_auth_proxy.php) |
| 71.62. seedlist – Seedlist Integration  | [Table of Contents](index.php) |  71.64. smtp_auth_proxy - SMTP Authentication Proxy |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)