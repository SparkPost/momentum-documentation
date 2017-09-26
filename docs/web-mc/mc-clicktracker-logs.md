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

| 4.2. Clicktracker Log Rotation |
| [Prev](mc-clicktracker-component.php)  | Chapter 4. Clicktracker |  [Next](mc-clicktracker-external-db.php) |

## 4.2. Clicktracker Log Rotation

The activity files created by the `pe2-clicktracker` script need to be compressed and rotated. The `clicktrack.log` file in the `/var/log/pe2` directory contains activity for the current day and gzipped files in this directory contain the activity for previous days. Log rotation is handled by the **logrotate** utility. These files are rotated according to the settings specified in the `/etc/logrotate.d/pe2clicktrack.conf` configuration file. That file is reproduced below:

/var/log/pe2-webui/clicktrack/clicktrack.log {
  daily
  rotate 5
  missingok
  notifempty
  compress
  postrotate
  /usr/bin/kill -HUP `cat /var/run/pe2-clicktracker.pid` 2> /dev/null || true
  endscript
}

In this case, log files are rotated daily and no more than five days of files are preserved.

| [Prev](mc-clicktracker-component.php)  | [Up](mc-clicktracker-component.php) |  [Next](mc-clicktracker-external-db.php) |
| Chapter 4. Clicktracker  | [Table of Contents](index.php) |  4.3. Processing clicktracker jlog Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)