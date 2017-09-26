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

| 9.7. Log Rotation Configuration Files |
| [Prev](mc-logs-web-ui.php)  | Chapter 9. Files Associated with Message Central |  [Next](mc-template-syntax.php) |

## 9.7. Log Rotation Configuration Files

The log rotation configuration files are found in the `/etc/logrotate.d` directory. The files are as follows:

*   `pe2batch.conf` – The configuration file associated with the **pe2batch** script. As of version 3.7, the mc_logger module replaces the pe2_logger module and this file and the **pe2batch** script are no longer used.

*   `pe2clicktrack.conf` – The configuration file for clicktracker.

*   `pe2httpd.conf` – The configuration file for the web server. As of version 3.5, this file is no longer used.

*   `pe2sched.conf` – The configuration file for the scheduler.

*   `pe2mgr.conf` – The configuration file for the manager.

| [Prev](mc-logs-web-ui.php)  | [Up](mc-logs-files.php) |  [Next](mc-template-syntax.php) |
| 9.6. The Web UI Files  | [Table of Contents](index.php) |  Chapter 10. Template Syntax |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)