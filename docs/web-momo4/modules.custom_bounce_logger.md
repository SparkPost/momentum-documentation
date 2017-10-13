## 71.24. custom_bounce_logger – Custom Bounce Logging

<a class="indexterm" name="idp20942912"></a>

**Configuration Change. ** This feature is available in Momentum 4.2 and later.

The `custom_bounce_logger` is similar to the `bounce_logger` module. It supports the same functionality as the `bounce_logger` and adds the capability to append a "User_String" to the end of each bounce record. This addition can be used to include some message context data in each bounce record.

### 71.24.1. Configuration

The writing of custom_bounce_logger format logs is configured in your `ecelerity.conf` file. To load the custom_bounce_logger module and include the connection context variable "foo" in each log record, add the following lines to the main body of your `ecelerity.conf` file:

<a name="example.custom_bounce_logger"></a>

**Example 71.39. custom_bounce_logger module**

```
custom_bounce_logger custom_bounce_logger1 {
    bouncelog = "/var/log/ecelerity/bouncelog.cl"
    user_string = "%{vctx_conn:foo}"
 }
```

### 71.24.2. See Also

[Section 71.13, “bounce_logger – Momentum-Style Bounce Logging”](modules.bounce_logger.php "71.13. bounce_logger – Momentum-Style Bounce Logging")

| [Prev](modules.csapi.php)  | [Up](modules.php) |  [Next](modules.custom_logger.php) |
| 71.23. csapi – Symantec CSAPI Antivirus Support  | [Table of Contents](index.php) |  71.25. custom_logger – User-defined Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)