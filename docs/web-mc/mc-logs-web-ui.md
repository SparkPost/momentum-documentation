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

| 9.6. The Web UI Files |
| [Prev](mc-logs-postgres.php)  | Chapter 9. Files Associated with Message Central |  [Next](mc-files-log-rotation.php) |

## 9.6. The Web UI Files

The following table gives the names and locations of the web UI files and describes their function.

<a name="mc-web-ui-files"></a>

**Table 9.2. Web UI files**

| File Name | Description |
| --- | --- |
| /var/log/pe2-webui/error_log.*`number`* | The web server error log file for the day of the week indicated by *`number`*. |
| /var/log/pe2-webui/access_log.*`number`* | The web server access log file for the day of the week indicated by *`number`*. |
| `/var/log/pe2-webui/httpd.pid` | The web server process id file |
| `/var/log/pe2-webui/httpd.scoreboard` | The web server scoreboard file |
| `/opt/msys/pe2/etc/pe2_rewrite.conf` | The rewrite rules for the web UI |
| `/opt/msys/pe2/etc/httpd.conf` | The configuration file for the web server |
| `/opt/msys/pe2/etc/ecelerity_logger.conf` | Delivery and message disposition reporting |

The terminating number for access and error files indicates the day of the week applicable to the file, `0` indicates Sunday and so on. These numbers change on UTC not on local time.

The format of the access and error files is standard Apache format. The log files are piped through `/opt/msys/3rdParty/apache/sbin/rotatelogs` and rotated every 24 hours. Only the the most recent week's files are preserved. For more information see the logging options in the `/opt/msys/pe2/etc/httpd.conf` file.

| [Prev](mc-logs-postgres.php)  | [Up](mc-logs-files.php) |  [Next](mc-files-log-rotation.php) |
| 9.5. PostgreSQL Files  | [Table of Contents](index.php) |  9.7. Log Rotation Configuration Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)