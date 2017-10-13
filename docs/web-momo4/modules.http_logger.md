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