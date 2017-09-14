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

| 68.37. ec_mem_type_usage |
| [Prev](structs.ec_mem_type_def.php)  | Chapter 68. Structs |  [Next](structs.ec_message.php) |

## 68.37. ec_mem_type_usage

This struct is defined as follows:

```
struct ec_mem_type_usage {
  /** the registered object_type */
  int object_type;
  /** the corresponding label for the object_type */
  const char *memtype_description;
  /** the number of allocations.
   *
   * Effectively, the number of calls to ec_malloc, ec_malloc_size, less
   * the number of calls to ec_free.
   *
   * This gives the number of outstanding instances that are active
   * in the system.
   *
   * For variable-size allocations, this value is the same as the
   * "current" field.
   *
   * This number includes allocations satisfied via malloc2mmap.
   */
  uint64_t allocations;
  /** peak utilization for this memtype.
   *
   * For fixed size allocations, this is the peak number of objects.
   * For variable size allocations, this is the peak number of bytes.
   *
   * This number includes allocations satisfied via malloc2mmap.
   */
  uint64_t peak;
  /** current utilization for this memtype, in bytes
   *
   * This number includes allocations satisfied via malloc2mmap.
   */
  uint64_t current;
  /** number of allocations satisfied by mmap
   *
   * Tracks the number of allocations satisfied by the malloc2mmap
   * threshold condition.
   */
  uint64_t mmap_allocations;
  /** peak number of mmap allocations
   *
   * Tracks the peak of mmap_allocations.
   */
  uint64_t mmap_peak_allocations;
  /** peak mmap utilization for this memtype, in bytes.
   *
   * Tracks the peak value of allocations satisfied by the
   * malloc2mmap threshold condition.
   */
  uint64_t mmap_peak_bytes;
  /** current mmap utilization for this memtype, in bytes.
   *
   * Tracks the current amount of memory satified by the malloc2mmap
   * threshold condition.
   */
  uint64_t mmap_current;
  /** for fixed size memtypes, this is the size of each instance */
  size_t object_size;
};
```

To use this struct, include the file `ec_malloc.h`.

### 68.37.1. See Also

[Chapter 33, *Memory Functions*](memory.php "Chapter 33. Memory Functions") 

| [Prev](structs.ec_mem_type_def.php)  | [Up](structs.php) |  [Next](structs.ec_message.php) |
| 68.36. ec_mem_type_def  | [Table of Contents](index.php) |  68.38. ec_message |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)