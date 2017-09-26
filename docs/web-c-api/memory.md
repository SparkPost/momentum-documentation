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

| Chapter 33. Memory Functions |
| [Prev](apis.mail_queue_size.php)  | Part II. C API |  [Next](apis.ec_free.php) |

## Chapter 33. Memory Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_free](apis.ec_free.php) — Free memory allocated</dt>

<dt>[ec_malloc](apis.ec_malloc.php) — Allocate a new instance of a defined object type</dt>

<dt>[ec_malloc_size](apis.ec_malloc_size.php) — Allocate a block of memory of arbitrary size</dt>

<dt>[ec_mem_get_stats](apis.ec_mem_get_stats.php) — Return usage statistics for all memtypes</dt>

<dt>[ec_memory_get_total_allocated](apis.ec_memory_get_total_allocated.php) — Return the total memory allocated via ec_malloc and related functions</dt>

<dt>[ec_memory_is_low](apis.ec_memory_is_low.php) — Called when the core detects a memory shortage</dt>

<dt>[ec_memory_pretty_mem_amount](apis.ec_memory_pretty_mem_amount.php) — A utility to render an amount with commas</dt>

<dt>[ec_memory_print_allocator_details](apis.ec_memory_print_allocator_details.php) — Render low-level allocator information to a string buffer</dt>

<dt>[ec_memtype_by_name](apis.ec_memtype_by_name.php) — Returns the memtype id for a given memtype name</dt>

<dt>[ec_memtype_get_stats](apis.ec_memtype_get_stats.php) — Return usage statistics for a given memtype</dt>

<dt>[ec_memtype_range_by_module](apis.ec_memtype_range_by_module.php) — Returns the range of memtypes associated with a given module</dt>

<dt>[ec_memtype_register](apis.ec_memtype_register.php) — Register a new memtype with the system</dt>

<dt>[ec_mt_alloc](apis.ec_mt_alloc.php) — Makes an allocation against a given memtype</dt>

<dt>[ec_mt_asprintf](apis.ec_mt_asprintf.php) — Memory-typed asprintf function</dt>

<dt>[ec_mt_free](apis.ec_mt_free.php) — Reclaim allocated memory</dt>

<dt>[ec_mt_realloc](apis.ec_mt_realloc.php) — Reallocate memory against a given memtype</dt>

<dt>[ec_mt_register](apis.ec_mt_register.php) — Implementation specific memtype initialization routine</dt>

<dt>[ec_mt_strdup](apis.ec_mt_strdup.php) — Duplicate a string of the specified memory type</dt>

<dt>[ec_mt_strndup](apis.ec_mt_strndup.php) — Duplicate a string of the specified message type copying at most the specified number of bytes</dt>

<dt>[ec_mt_vasprintf](apis.ec_mt_vasprintf.php) — Memory-typed vasprintf function</dt>

<dt>[ec_realloc](apis.ec_realloc.php) — Re-allocate a block of memory, changing its size</dt>

</dl>

For an overview of the Momentum memory API see [Memory API](arch.primary.apis.php#arch.memory "1.3.6. Memory API"). Memory usage information is available from the ec_console [memory](https://support.messagesystems.com/docs/web-ref/console_commands.memory.php) command.

### Note

For SMPP-related memory functions see [Chapter 46, *SMPP Functions*](smpp.php "Chapter 46. SMPP Functions") .

| [Prev](apis.mail_queue_size.php)  | [Up](pt.apis.php) |  [Next](apis.ec_free.php) |
| mail_queue_size  | [Table of Contents](index.php) |  ec_free |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)