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

| 71.40. ilf_logger – Incremental License Fee Logging |
| [Prev](modules.icu.php)  | Chapter 71. Modules Reference |  [Next](modules.inbound_audit.php) |

## 71.40. ilf_logger – Incremental License Fee Logging

The Incremental License Fee (ilf) logger module is designed for users who have usage-based licenses. It provides an easy way to comply with the usage reporting requirements contained in the agreement with Message Systems. Usage files are written to `/var/log/ecelerity/ilf`. Bundle these files and sent them to Message Systems as appropriate.

In its default configuration, this module collects data on a daily basis. The following information is captured:

*   SMTP Receptions

*   SMTP Deliveries

*   SMPP Receptions

*   SMPP Deliveries

*   MM7 Receptions

*   MM7 Deliveries

*   Push Deliveries

### 71.40.1. Configuration

The ilf_logger module is configured through a configuration file using a stanza such as:

```
ilf_logger {
  write_interval = 60
  filename_format = "/var/log/ecelerity/ilf/%m-%d-%Y.ilfdata"
}
```

The following are configuration options valid in the ilf_logger scope:

<dl class="variablelist">

<dt>filename_format</dt>

<dd>

Set the name and location of the log files. Default value is `/var/log/ecelerity/ilf/%m-%d-%Y.ilfdata`.

</dd>

<dt>write_interval</dt>

<dd>

How often to write to file. Default value is `60` seconds.

</dd>

</dl>

| [Prev](modules.icu.php)  | [Up](modules.php) |  [Next](modules.inbound_audit.php) |
| 71.39. icu – ICU  | [Table of Contents](index.php) |  71.41. inbound_audit – Inbound traffic analytics |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)