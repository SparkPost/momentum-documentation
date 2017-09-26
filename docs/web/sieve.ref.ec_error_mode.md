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

| ec_error_mode |
| [Prev](sieve.ref.ec_dns_lookup.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_floor.php) |

<a name="sieve.ref.ec_error_mode"></a>
## Name

ec_error_mode — set the error mode to "fail" or "continue"

## Synopsis

`ec_error_mode` { *`continue|fail`* }

<a name="idp14173264"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

**ec_error_mode** affects how Sieve handles certain kinds of errors (for instance, passing incorrect parameters to Sieve functions, failed includes, low memory conditions). The default is to `fail` the incoming session with a transient error response, but you may set it to `continue` to have the script continue executing past the failure point.

The ability to change this behavior was introduced in 2.2, and the default was changed to `fail`. In prior releases, the default was effectively `continue` and this could not be altered.

| [Prev](sieve.ref.ec_dns_lookup.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_floor.php) |
| ec_dns_lookup  | [Table of Contents](index.php) |  ec_floor |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)