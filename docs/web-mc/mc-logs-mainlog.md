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

| 9.2. Message Central `mainlog.ec` Log Entries |
| [Prev](mc-logs-files.php)  | Chapter 9. Files Associated with Message Central |  [Next](mc-logs-logger-files.php) |

## 9.2. Message Central `mainlog.ec` Log Entries

As with any other Momentum instance, the `mainlog.ec` file is in the `/var/log/ecelerity` directory on the MTA node. The format of this log is described in [Log Formats for Version 3.x](https://support.messagesystems.com/docs/web-ref/log_formats.version_3.php).

However, the localpart of the envelope sender, the field with an offset of 7, provides information about the mailing it is associated with. Consider the following `mainlog.ec` entry:

```
1318361196@ED/00-08917-C68949E4@ED/00-08917-C68949E4@57/00-0891768949E4@R@person@suspend.com »
  @bounces-3-c-a-2-2-0@verp.test.messagesystems.com@10.79.11.43@28512@esmtp@default@default
```

In this case the localpart of the sender is `bounces-3-c-a-2-2-0`. The hexadecimal numerals following `bounces` indicate:

1.  orgid

2.  mailingid

3.  segmentid

4.  messagetemplateid

5.  contactid

6.  progresscounter

| [Prev](mc-logs-files.php)  | [Up](mc-logs-files.php) |  [Next](mc-logs-logger-files.php) |
| Chapter 9. Files Associated with Message Central  | [Table of Contents](index.php) |  9.3. The MC Logger Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)