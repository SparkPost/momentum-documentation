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

| ec_spool_ctx_enum_messages |
| [Prev](apis.ec_spool_ctx_create.php)  | Chapter 49. Spool-related Functions |  [Next](apis.ec_spool_ctx_filter_open.php) |

<a name="apis.ec_spool_ctx_enum_messages"></a>
## Name

ec_spool_ctx_enum_messages — Enumerate messages in a spool

## Synopsis

`#include "spool.h"`

| `int **ec_spool_ctx_enum_messages** (` | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">ht</var>, |   |
|   | <var class="pdparam">on_insert</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_spool_ctx * <var class="pdparam">ctx</var>`;
`ec_hash_table * <var class="pdparam">ht</var>`;
`ec_spool_ctx_insertion_func <var class="pdparam">on_insert</var>`;
`void * <var class="pdparam">closure</var>`;<a name="idp34824000"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Enumerate messages in a spool.

This routine must be called after the spool lock has been obtained. It will migrate older spool formats to the current version and perform an initial summary of the contents of the spool, which are exposed in the provided hashtable.

on_insert is called just prior to inserting into ht; its return value will be used as the dataptr inserted to the hash. You may also perform other tasks here, such as queuing up jobs.

### Note

This function may induce IO or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

| [Prev](apis.ec_spool_ctx_create.php)  | [Up](spool.php) |  [Next](apis.ec_spool_ctx_filter_open.php) |
| ec_spool_ctx_create  | [Table of Contents](index.php) |  ec_spool_ctx_filter_open |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)