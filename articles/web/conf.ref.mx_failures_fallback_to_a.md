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

| mx_failures_fallback_to_a |
| [Prev](conf.ref.module.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.mx_failures_to_delay.php) |

<a name="conf.ref.mx_failures_fallback_to_a"></a>
## Name

mx_failures_fallback_to_a — configure the maximum number of times an MX lookup will be attempted

## Synopsis

`mx_failures_fallback_to_a = 3`

<a name="idp6043360"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.35.

The number of times an MX lookup will be attempted before attempting an A lookup. The default value is "3".

<a name="idp6047760"></a>
## Scope

mx_failures_fallback_to_a is valid in the domain and global scopes.

<a name="idp6049424"></a>
## See Also

[dns_failures_to_purge](conf.ref.dns_failures_to_purge.php "dns_failures_to_purge")

| [Prev](conf.ref.module.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.mx_failures_to_delay.php) |
| module  | [Table of Contents](index.php) |  mx_failures_to_delay |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)