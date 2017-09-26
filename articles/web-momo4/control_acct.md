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

| 17.3. Control_Listener Accounting |
| [Prev](control_auth.php)  | Chapter 17. Configuring Momentum's System Console |  [Next](control_authz.php) |

## 17.3. Control_Listener Accounting

Momentum contains an extensible authorization and accounting subsystem that can be configured to restrict access to console commands based on role while recording an audit trail. Accounting is enabled by default for Unix socket connections. However, if you are connecting via TCP/IP then accounting for the Control_Listener will not be enabled unless you explicitly turn it on. To employ an authentication scheme such as `DIGEST-MD5` and to log authentication events use the following syntax:

```
Control_Listener {
  Listen "/tmp/2025" {
    File_Mode = 0666
  }
  Listen ":2025" {
    AuthDigestMD5Parameters = [
      uri = digest:///opt/msys/ecelerity/etc/console_passwd
      log_authentication = "true"
    ]
  }
}
```

Logging of authentication events is enabled by turning on `log_authentication` in the Control_Listener configuration *and* configuring an accounting log in the [Section 71.30, “EC_logger – Momentum-Style Logging”](modules.ec_logger.php "71.30. EC_logger – Momentum-Style Logging") module. You may also develop your own accounting modules by implementing a hook.

More information about authentication modules can be found at [Section 71.8, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "71.8. auth_ds – Datasource based SMTP Authentication").

| [Prev](control_auth.php)  | [Up](control_listener.php) |  [Next](control_authz.php) |
| 17.2. Control_Listener Authentication  | [Table of Contents](index.php) |  17.4. Control_Listener Authorization |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)