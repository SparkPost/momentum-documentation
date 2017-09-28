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

| 14.38. icu – ICU |
| [Prev](modules.httpio.php)  | Chapter 14. Modules Reference |  [Next](modules.ilf_logger.php) |

## 14.38. icu – ICU

<a class="indexterm" name="idp20092640"></a>

The International Component for Unicode (ICU) is a mature, portable set of C/C++ libraries for Unicode support, software internationalization (I18N) and globalization (G11N), giving applications the same results on all platforms. The icu module for Momentum leverages ICU's robust set of unicode character set handling facilities to assist converting between various character sets and UTF-8.

### 14.38.1. Configuration

ICU configuration is very simple. It takes no configuration parameters and enabling ICU is accomplished by adding the following to your configuration:

**Configuration Change. ** In version 3.0, this module is loaded automatically as required and does not need to be explicitly included.

### Note

If you are deploying on the GA release of Solaris 10, and icu fails to load because libicuuc.so.3 or liblcudata.so.3 is not found, you need to apply Sun patch #119810 to resolve this issue.

| [Prev](modules.httpio.php)  | [Up](modules.php) |  [Next](modules.ilf_logger.php) |
| 14.37. http_io – HTTP I/O Provider  | [Table of Contents](index.php) |  14.39. ilf_logger Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)