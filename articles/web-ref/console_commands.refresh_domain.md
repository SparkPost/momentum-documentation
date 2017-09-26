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

| refresh domain |
| [Prev](console_commands.rebind.php)  | 12.2. System Console Commands |  [Next](console_commands.reopen_logs.php) |

<a name="console_commands.refresh_domain"></a>
## Name

refresh domain — refresh the DNS information for a domain

## Synopsis

`refresh domain` { *`domain`* }

<a name="idp16241952"></a>
## Description

This command takes a single argument in the form of a domain name and refreshes the DNS information for the specified domain. Instead of specifying a domain name you may specify `all` to view all domains.

### Note

This console command manipulates the *route cache* , and likewise with the [dig](console_commands.dig.php "dig") and [domain](console_commands.domain.php "domain") commands. The *DNS cache* , is manipulated by the [dns_cache](console_commands.dns_cache.php "dns_cache") series of console commands.

| [Prev](console_commands.rebind.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.reopen_logs.php) |
| rebind  | [Table of Contents](index.php) |  reopen logs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)