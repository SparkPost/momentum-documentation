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

| 71.38. httpsrv – HTTP Server |
| [Prev](modules.http_logger.php)  | Chapter 71. Modules Reference |  [Next](modules.icu.php) |

## 71.38. httpsrv – HTTP Server

The httpsrv module is the HTTP server infrastructure module. It, along with the [HTTP_Listener](http_listener.php "Chapter 20. Configuring Inbound Mail Service Using HTTP"), enables you to use the REST API.

### 71.38.1. Configuration

The httpsrv module must be loaded in the `msg_gen.conf` file, as follows:

`httpsrv { }`

This module only supports the two options common to all modules, namely `enabled` and `debug_level`.

For more information about the `debug_level` option, see [Section 15.5.2, “Module Debugging”](module_config.php#module_config.debugging "15.5.2. Module Debugging").

| [Prev](modules.http_logger.php)  | [Up](modules.php) |  [Next](modules.icu.php) |
| 71.37. http_logger – HTTP Requests and Responses  | [Table of Contents](index.php) |  71.39. icu – ICU |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)