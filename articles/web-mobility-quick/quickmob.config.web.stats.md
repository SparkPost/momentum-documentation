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

| 3.3. Configuring for Web UI Stats |
| [Prev](quickmob.mm7.modules.php)  | Chapter 3. Configuring the Mobile Momentum Modules |  [Next](quickmob.config.options.php) |

## 3.3. Configuring for Web UI Stats

In the Mobile Momentum web UI you can view statistics by protocol. In order to do this you must create additional SMPP and MM7 modules that log in jlog format. Add the following modules to your configuration in order to view web statistics by protocol:

<a name="quickmob.example.web.stats"></a>

**Example 3.7. Configuration for web UI statistics**

```
smpp_logger "smpp_logger_rt" {
  logfile = "jlog:///var/log/ecelerity/smpp.rt=>ec_rt_stats"
}
mms_logger "mms_logger_rt" {
  logfile = "jlog:///var/log/ecelerity/mm7.rt=>ec_rt_stats"
}
```

You must create log files exactly as indicated in [Example 3.7, “Configuration for web UI statistics”](quickmob.config.web.stats.php#quickmob.example.web.stats "Example 3.7. Configuration for web UI statistics") if you want web reporting by protocol to work. You *cannot* change the format for these jlogs.

| [Prev](quickmob.mm7.modules.php)  | [Up](quickmob.config.modules.php) |  [Next](quickmob.config.options.php) |
| 3.2. The MM7 Modules  | [Table of Contents](index.php) |  Chapter 4. Configuration Options in the Global, Domain and Binding Scopes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)