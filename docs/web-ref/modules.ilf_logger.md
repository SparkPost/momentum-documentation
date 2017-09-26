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

| 14.39. ilf_logger Module |
| [Prev](modules.icu.php)  | Chapter 14. Modules Reference |  [Next](modules.imageanalyzer.php) |

## 14.39. ilf_logger Module

**Configuration Change. ** This module is available as of version 3.5.6.

The Incremental License Fee module is designed for users who have usage-based licenses. It provides an easy way to comply with the usage reporting requirements contained in the agreement with Message Systems. Usage files are written to `/var/log/ecelerity/ilf`; bundle these files and sent them to Message Systems as appropriate.

In its default configuration, this module collects data on a daily basis. The following information is captured:

*   SMTP Receptions

*   SMTP Deliveries

*   SMPP Receptions

*   SMPP Deliveries

*   MM7 Receptions

*   MM7 Deliveries

*   Push Deliveries

### 14.39.1. Configuration

```
ilf_logger {
  write_interval = 60
  filename_format = "/var/log/ecelerity/ilf/%m-%d-%Y.ilfdata"
}
```

<dl class="variablelist">

<dt>filename_format</dt>

<dd>

Set the name and location of the log files. The default value for this option is `/var/log/ecelerity/ilf/%m-%d-%Y.ilfdata`.

</dd>

<dt>write_interval</dt>

<dd>

How often to write to file. The default value for this option is `60` seconds.

</dd>

</dl>

| [Prev](modules.icu.php)  | [Up](modules.php) |  [Next](modules.imageanalyzer.php) |
| 14.38. icu – ICU  | [Table of Contents](index.php) |  14.40. imageanalyzer – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)