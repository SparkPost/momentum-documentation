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

| unlink stats |
| [Prev](console_commands.trace_smtp.php)  | 12.2. System Console Commands |  [Next](console_commands.version.php) |

<a name="console_commands.unlink_stats"></a>
## Name

unlink stats — show statistics of removing messages from the disk

## Synopsis

`unlink stats`

<a name="idp10332032"></a>
## Description

This command shows statistics of unlinking messages on the disk.

```
10:47:35 /tmp/2025> unlink stats
                   Messages    Headers    Bodies
Submissions    :        6000      6000      6000
Attempts       :        6000      6000      6000
  Failures     :           0         0         0
  Successes    :        6000      6000      6000
  Success Rate :      100.00%   100.00%   100.00%
Current Backlog:      0
Batch Backlog  :      0
```

| [Prev](console_commands.trace_smtp.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.version.php) |
| trace smtp  | [Table of Contents](index.php) |  version |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)