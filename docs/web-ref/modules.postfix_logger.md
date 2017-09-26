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

| 14.56. postfix_logger – Postfix-Compatible Logging |
| [Prev](modules.pipe_transport.php)  | Chapter 14. Modules Reference |  [Next](modules.reception_timing.php) |

## 14.56. postfix_logger – Postfix-Compatible Logging

<a class="indexterm" name="idp20881936"></a>

Momentum supports logging in the same style as the Open Source MTA Postfix (http://www.postfix.org). This is mainly of use to sites migrating from a Postfix installation or those that have log-processing software that reads data in Postfix-compliant format.

### 14.56.1. Configuration

The postfix_logger module writes to two logfiles: a mainlog where receptions, deliveries, and delviery failures are logged, and a paniclog where errors are logged. These are configured as in the following examples:

<a name="example.postfix_logger.3"></a>

**Example 14.84. posfix_logger module**

```
postfix_logger "postfix_logger1" {
  mainlog  = "/var/log/postfix/mainlog"
  paniclog = "/var/log/postfix/paniclog"
  log_transient_failures = false
}
```

### Note

You must manually create the `postfix` directory and it must be writable by the user, `ecuser`. You must do this if you manually create the postfix module*or* if you create it through the web UI. You can change the ownership of the directory by issuing the shell command: **chown -R ecuser:ecuser /var/log/postfix** .

Additionally, you can toggle the logging of transient failures using the `log_transient_failures` option.

| [Prev](modules.pipe_transport.php)  | [Up](modules.php) |  [Next](modules.reception_timing.php) |
| 14.55. pipe_transport – Module  | [Table of Contents](index.php) |  14.57. reception_timing - Reception Timing Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)