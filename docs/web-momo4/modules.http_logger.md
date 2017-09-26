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

| 71.37. http_logger – HTTP Requests and Responses |
| [Prev](modules.host_fingerprint.php)  | Chapter 71. Modules Reference |  [Next](modules.httpsrv.php) |

## 71.37. http_logger – HTTP Requests and Responses

The http_logger module enables logging of HTTP requests and responses made by the [httpsrv Module](https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php).

### 71.37.1. Configuration

To configure the http_logger module, load it in the `ecelerity.conf` file. The following is the default configuration:

<a name="modules.http_logger.configuration.example"></a>

**Example 71.65. http_logger Configuration**

```
http_logger "http_logger"{
  log = "file:///var/log/ecelerity/httplog.ec"
}
```

The following is the configuration option defined by this module:

<dl class="variablelist">

<dt>log</dt>

<dd>

Define the logfile used by the http_logger. The default value for this option is `file:///var/log/ecelerity/httplog.ec`.

For details about the format of `httplog.ec`, see [Section 35.5, “`httplog`”](log_formats.httplog.php "35.5. httplog").

</dd>

</dl>

The default log file created by this logger is rotated by the utility script **ec_rotate**. For more information, see [ec_rotate](executable.ec_rotate.php "ec_rotate").

| [Prev](modules.host_fingerprint.php)  | [Up](modules.php) |  [Next](modules.httpsrv.php) |
| 71.36. fingerprint – Host Fingerprinting  | [Table of Contents](index.php) |  71.38. httpsrv – HTTP Server |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)