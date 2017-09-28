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

| 68.36. ec_mem_type_def |
| [Prev](structs.ec_mem_stats.php)  | Chapter 68. Structs |  [Next](structs.ec_mem_type_usage.php) |

## 68.36. ec_mem_type_def

This struct is defined as follows:

```
static struct ec_mem_type_def memtypes[MEMTYPE_MAX] = {
  {0, 0, 0, 0},
};
```

`MEMTYPE_MAX` is the maximum possible number of memory types and is defined in `ec_malloc.h` as follows: `#define MEMTYPE_MAX 512`.

To use this struct, include the file `memory.c`.

### 68.36.1. See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](structs.ec_mem_stats.php)  | [Up](structs.php) |  [Next](structs.ec_mem_type_usage.php) |
| 68.35. ec_mem_stats  | [Table of Contents](index.php) |  68.37. ec_mem_type_usage |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)