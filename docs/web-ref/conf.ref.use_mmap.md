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

| Use_MMAP |
| [Prev](conf.ref.use_ipv6.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.use_sendfile.php) |

<a name="conf.ref.use_mmap"></a>
## Name

Use_MMAP — use mmap when spooling messages from disk

## Synopsis

`Use_MMAP = false`

`Use_MMAP = true`

<a name="idp12394496"></a>
## Description

When set to true, Momentum will attempt to memory map message bodies (via `mmap` ), rather than allocating memory from the heap and reading the file from disk.

The default for this option is `false`. This option should be set dependent on the performance and stability of `mmap` on your system.

### Warning

If you set `Use_MMAP` to `true` the `compress_spool` module will not load. For more information see [Section 14.20, “compress_spool – Dynamic Spool Compression”](modules.compress_spool.php "14.20. compress_spool – Dynamic Spool Compression")

<a name="idp12400800"></a>
## Scope

use_mmap is valid in the global scope.

<a name="idp12402432"></a>
## See Also

[malloc2mmap_threshold](conf.ref.malloc2mmap_threshold.php "malloc2mmap_threshold") and [Use_SendFile](conf.ref.use_sendfile.php "Use_SendFile")

| [Prev](conf.ref.use_ipv6.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.use_sendfile.php) |
| Use_IPv6  | [Table of Contents](index.php) |  Use_SendFile |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)