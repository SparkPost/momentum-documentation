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

| 68.35. ec_mem_stats |
| [Prev](structs.ec_interpolate_context.php)  | Chapter 68. Structs |  [Next](structs.ec_mem_type_def.php) |

## 68.35. ec_mem_stats

This struct is defined as follows:

```
/** overall system memory utilization stats */
struct ec_mem_stats {
  /** the total amount of memory allocated via ec_malloc, ec_malloc_size,
   * ec_realloc.  Note that this will not include memory allocated via
   * malloc(), or other memory allocated for things like stack space for
   * threads and other lower level memory utilization. */
  uint64_t total_allocated;
  /** The resident set size, as reported by the system */
  uint64_t system_rss;
  /** The amount of physical memory installed in the system */
  uint64_t physmem;
};
```

To use this struct, include the file `ec_malloc.h`.

### 68.35.1. See Also

[Chapter 33, *Memory Functions*          ](memory.php "Chapter 33. Memory Functions") and [ec_mem_get_stats](apis.ec_mem_get_stats.php "ec_mem_get_stats")

| [Prev](structs.ec_interpolate_context.php)  | [Up](structs.php) |  [Next](structs.ec_mem_type_def.php) |
| 68.34. ec_interpolate_context  | [Table of Contents](index.php) |  68.36. ec_mem_type_def |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)