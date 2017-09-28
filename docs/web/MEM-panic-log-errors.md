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

| D.8. The MEM Errors |
| [Prev](LOG1-panic-log-errors.php)  | Appendix D. Panic Log Errors |  [Next](MOD-panic-log-errors.php) |

## D.8. The MEM Errors

In this section errors are sorted by severity.

<a name="MEM-table-panic-log-errors"></a>

**Table D.8. MEM errors**

| Error Level | Facility | Error Message | Action |
| --- | --- | --- | --- |
| DCRITICAL | MEM | Global queue-id duplicate found *`message`* *`spoolname`* *`dup`* *`spoolname_dup`* | No corrective action is required. The system restarted itself to avoid a pathological state. |
| DCRITICAL | MEM | MEM-*`xxxxx`*: *`block->memtype`* found vs *`memtype`* expected | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEM-*`xxxxx`*: *`block->memtype`* found vs *`block->memtype`* expected | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEMORY-*`xxxxx`* invalid type: *`expected_type`* | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEMORY-*`xxxxx`* acct mismatch on memtype *`impl->def.memtype_description`* | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEMORY-*`xxxxx`* invalid *`impl->def.memtype_description`* | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEMORY-*`xxxxx`* invalid alloc: *`impl->def.memtype_description`* | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEMORY-*`xxxxx`* *`def->memtype_description`*: invalid alignment *`def->aligned`* | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEMORY-*`xxxxx`* *`def->memtype_description`*: invalid memory size *`def->size`* for allocator type *`def->allocator_type`* | An internal error has occurred (memory corruption). Please contact support. |
| DCRITICAL | MEM | MEMORY-*`xxxxx`* umem_cache_create failed for *`def->memtype_description`* | An internal error has occurred during memory initialization. Please contact support. |
| DCRITICAL | MEM | SCHEP-*`xxxxx`* failed scheduler initialization | An internal error occurred, please contact support. |
| DCRITICAL | MEM | epoll: asynch event notification initializer failed | An internal error occurred, please contact support. |
| DCRITICAL | MEM | epoll: asynch event notification non-block failed | An internal error occurred, please contact support. |
| DCRITICAL | MEM | SCHKQ-*`xxxxx`*: failed scheduler initialization *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | MEM | SCHKQ-*`xxxxx`*: failed scheduler initialization *`strerror`* | An internal error occurred, please contact support. |
| DCRITICAL | MEM | kqueue: asynch event notification initializer failed | An internal error occurred, please contact support. |
| DCRITICAL | MEM | kqueue: asynch event notification non-block failed | An internal error occurred, please contact support. |
| DCRITICAL | MEM | malloc failed in poll scheduler initialization | Check memory usage |
| DCRITICAL | MEM | Event corruption: fd *`ps[offset].fd`* triggered fd *`e->fd`* | An internal error occurred, please contact support. |
| DCRITICAL | MEM | Malloc failed: *`FILE`* *`LINE`* | Check memory usage |
| DCRITICAL | MEM | SPOOL-*`xxxxx`* out-of-memory *`body_len`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | SPOOL-*`xxxxx`* mmap failed *`errno`*, *`filename`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | deliberately sleeping for *`n_seconds`* seconds to trigger watchdog | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | no watchdog interval configured, aborting instead | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | "crash abort" requested by *`auth_info.user`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | "crash watchdog" request by *`auth_info.user`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | "crash" requested by *`auth_info.user`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | DNS-*`xxxxx`* OOM! | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | malloc failed in poll secheduler initialization | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | Event corruption: fd *`ps[offset].fd`* triggered fd *`e->fd`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | Malloc failed: *`FILE`* *`LINE`* | Check memory usage |
| DCRITICAL | MEM | umem: *`error_str`* | An internal error occurred. Contact support if it persists. |
| DCRITICAL | MEM | *`format va`*     | An internal error occurred. Contact support if it persists. |
| DERROR | MEM | *`hook_lookup`*e prototype: '*`hook_proto`*' != *`pun.head->decl_proto`* | An internal error happened during hook registration, the module in question has an error or is using an outdated API. |
| DERROR | MEM | ARES-*`xxxxx`* Failed to remove *`query`* | An internal error occurred. Contact support if it persists. |
| DERROR | MEM | memory allocation failure in auth | An internal error occurred. Contact support if it persists. |
| DERROR | MEM | memory allocation failure in auth | An internal error occurred. Contact support if it persists. |
| DWARNING | MEM | MQ-*`xxxxx`* memory shortage not yet fixed | The system is operating over memory_hwm. Performance will be impaired until the system can free more memory. |
| DWARNING | MEM | MEM-*`xxxxx`*: a memory pool is being destroyed without releasing all of the memory associated with it | An internal error has occurred (memory corruption). Please contact support. |
| DWARNING | MEM | DTOOLS-*`xxxxx`* resolution failure | An internal error occurred. Contact support if it persists. |
| DWARNING | MEM | Registering function *`name`*, conflicts with *`detail->name`* | An internal error occurred. Contact support if it persists. |

| [Prev](LOG1-panic-log-errors.php)  | [Up](error-messages.php) |  [Next](MOD-panic-log-errors.php) |
| D.7. The LOG1 Errors  | [Table of Contents](index.php) |  D.9. The MOD Errors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)