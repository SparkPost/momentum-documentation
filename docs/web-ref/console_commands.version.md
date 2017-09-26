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

| version |
| [Prev](console_commands.unlink_stats.php)  | 12.2. System Console Commands |  [Next](console_commands.write_config.php) |

<a name="console_commands.version"></a>
## Name

version — show version information of Momentum

## Synopsis

`version`

<a name="idp16569184"></a>
## Description

This command displays version information of the running Momentum instance.

```
10:47:35 /tmp/2025> version
##############################################
# ecelerity version: 3.0.12.31875 r(31889)
# Copyright (c) 1999-2009 Message Systems, Inc.
# All Rights Reserved.
##############################################
```

As of version 3.0.23, this command also displays the product type:

```
#############################################
# ecelerity version: 3.0.23.36220 r(36220)
# Momentum Sending
# Copyright (c) 1999-2010 Message Systems, Inc.
# All Rights Reserved.
##############################################
```

| [Prev](console_commands.unlink_stats.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.write_config.php) |
| unlink stats  | [Table of Contents](index.php) |  write config |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)