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

| tcp_buffer_size |
| [Prev](conf.ref.suspend_delivery.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.threadpool.php) |

<a name="conf.ref.tcp_buffer_size"></a>
## Name

tcp_buffer_size — maximum tcp buffer size for outbound connections

## Synopsis

`tcp_buffer_size = 32768`

<a name="idp6854704"></a>
## Description

Momentum uses an auto-scaling algorithm to ensure that the tcp buffer size is set optimally. This option allows you to set an upper bound on the tcp buffer size selected.

The default for this option is 32768 bytes.

### Warning

This is an advanced option. Setting the value too high can cause memory exhaustion. Thorough testing is recommended before deployment in a production environment.

<a name="idp6857904"></a>
## Scope

tcp_buffer_size is valid in the global scope.

<a name="idp6859552"></a>
## See Also

[Use_MMAP](conf.ref.use_mmap.php "Use_MMAP")

| [Prev](conf.ref.suspend_delivery.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.threadpool.php) |
| suspend_delivery  | [Table of Contents](index.php) |  threadpool |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)