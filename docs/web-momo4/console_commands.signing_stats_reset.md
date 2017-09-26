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

| signing_stats reset |
| [Prev](console_commands.signing_stats.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.sp_async.php) |

<a name="console_commands.signing_stats_reset"></a>
## Name

signing_stats reset — reset signing stats

## Synopsis

`signing_stats reset`

<a name="idp12851024"></a>
## Description

This command resets all DKIM and Domainkeys signing statistics.

```
10:56:11 ecelerity(/tmp/2025)> signing_stats reset
Signing Statistics are reset
```
<a name="idp12853296"></a>
## See Also

[Section 71.28, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "71.28. domainkeys – Yahoo! DomainKeys"), [Section 71.50, “opendkim – Open Source DKIM”](modules.opendkim.php "71.50. opendkim – Open Source DKIM"), [signing_stats](conf.ref.signing_stats.php "signing_stats"), and [signing_stats](console_commands.signing_stats.php "signing_stats")

| [Prev](console_commands.signing_stats.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.sp_async.php) |
| signing_stats  | [Table of Contents](index.php) |  sp_async |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)