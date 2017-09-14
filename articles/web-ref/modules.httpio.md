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

| 14.37. http_io – HTTP I/O Provider |
| [Prev](modules.host_fingerprint.php)  | Chapter 14. Modules Reference |  [Next](modules.icu.php) |

## 14.37. http_io – HTTP I/O Provider

<a class="indexterm" name="idp20081456"></a>

The `http_io` module provides facilities for reading content located in an URI with the schema `http` and `https`. Momentum uses an I/O abstraction layer for reading Sieve++ scripts (and their includes). With this module, you specify remote web-accessible locations for script files that will be fetched on the fly.

### Note

This module is designed so that Sieve scripts can include web-accessible files on the fly. It *cannot* be used to include start-up configuration files.

### 14.37.1. Configuration

**Configuration Change. ** In version 3.0, this module is loaded automatically as required and does not need to be explicitly included.

| [Prev](modules.host_fingerprint.php)  | [Up](modules.php) |  [Next](modules.icu.php) |
| 14.36. fingerprint – Host Fingerprinting  | [Table of Contents](index.php) |  14.38. icu – ICU |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)