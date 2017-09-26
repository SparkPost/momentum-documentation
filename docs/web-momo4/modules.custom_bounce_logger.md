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

| 71.24. custom_bounce_logger – Custom Bounce Logging |
| [Prev](modules.csapi.php)  | Chapter 71. Modules Reference |  [Next](modules.custom_logger.php) |

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