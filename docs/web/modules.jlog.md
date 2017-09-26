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

| 14.34. jlog – The jlog Module |
| [Prev](modules.inbound_audit.php)  | Chapter 14. Modules Reference |  [Next](modules.kaspersky.php) |

## 14.34. jlog – The jlog Module

<a class="indexterm" name="idp12291760"></a>

jlog-formatted logs are binary logs used by the web console and by centralized cluster logging. Additionally, custom deployments can log data to jlog files for consumption by perl scripts. In turn, these scripts may push the data elsewhere, to a database for example.

### Warning

We expressly recommend **against** writing jlogs to an NFS file system because of concerns about its performance in general and its reliability, especially on Linux.

### 14.34.1. Configuration

The jlog module is defined in the following way:

<a name="example.jlog"></a>

**Example 14.54. jlog module**

```
Module generic/jlog jlog{
}
```

The **ec_rt_stats** command performs statistical analysis on jlog files. For more information see [ec_rt_stats](executable.ec_rt_stats.php "ec_rt_stats").

| [Prev](modules.inbound_audit.php)  | [Up](modules.php) |  [Next](modules.kaspersky.php) |
| 14.33. inbound_audit – Inbound traffic analytics  | [Table of Contents](index.php) |  14.35. kaspersky – Kaspersky |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)