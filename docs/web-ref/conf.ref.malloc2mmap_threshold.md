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

| malloc2mmap_threshold |
| [Prev](conf.ref.maintainer_pool.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.masterdb_file.php) |

<a name="conf.ref.malloc2mmap_threshold"></a>
## Name

malloc2mmap_threshold — use mmap when allocations exceed this amount

## Synopsis

`malloc2mmap_threshold = 4092`

<a name="idp10117072"></a>
## Description

When set to a positive value, Momentum will use `mmap` to fulfill memory allocation requirements exeeding the `malloc2mmap_threshold` size, rather than allocating memory from the heap via `malloc` .

Lowering this setting can reduce heap fragmentation and the system RSS, but can use up more address space than heap allocations alone, since the minimum granularity of `mmap` is the system page size.

The default for this option is 4092.

<a name="idp10121664"></a>
## Scope

malloc2mmap_threshold is valid in the global scope.

<a name="idp10123312"></a>
## See Also

[Use_MMAP](conf.ref.use_mmap.php "Use_MMAP")

| [Prev](conf.ref.maintainer_pool.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.masterdb_file.php) |
| maintainer_pool  | [Table of Contents](index.php) |  masterdb_file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)