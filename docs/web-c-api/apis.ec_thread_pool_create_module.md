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

| ec_thread_pool_create_module |
| [Prev](apis.ec_thread_pool_count.php)  | Chapter 52. Threadpool Functions |  [Next](apis.ec_thread_pool_defer_spawn.php) |

<a name="apis.ec_thread_pool_create_module"></a>
## Name

ec_thread_pool_create_module — Create a module thread pool

## Synopsis

`#include "ec_thread_pool.h"`

| `int **ec_thread_pool_create_module** (` | <var class="pdparam">self</var>, |   |
|   | <var class="pdparam">type</var>, |   |
|   | <var class="pdparam">concurrency</var>, |   |
|   | <var class="pdparam">stack_size</var>, |   |
|   | <var class="pdparam">max_queue_len</var>`)`; |   |

`generic_module_infrastructure * <var class="pdparam">self</var>`;
`const char * <var class="pdparam">type</var>`;
`int <var class="pdparam">concurrency</var>`;
`size_t <var class="pdparam">stack_size</var>`;
`size_t <var class="pdparam">max_queue_len</var>`;<a name="idp35860928"></a>
## Description

Create a module thread pool.

**Parameters**

<dl class="variablelist">

<dt>self</dt>

<dd>

The module reference. For a description of this data type see [generic_module_infrastructure](structs.generic_module_infrastructure.php "68.53. generic_module_infrastructure").

</dd>

<dt>type</dt>

<dd>

The thread pool type, `io`, for example. See also [threadpool](https://support.messagesystems.com/docs/web-ref/conf.ref.threadpool.php).

</dd>

<dt>concurrency</dt>

<dd>

The concurrency of the thread pool.

</dd>

<dt>stack_size</dt>

<dd>

The stack size. If the stack size is `0`, then the system default will be used.

</dd>

<dt>max_queue_len</dt>

<dd>

If this parameter is non zero, then a semaphore will be employed to prevent the queue length exceeding this value.

</dd>

</dl>

**Return Values**

On success this function returns the pool ID; on failure, `-1` is returned.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp35879008"></a>
## See Also

[ec_thread_pool_shutdown](apis.ec_thread_pool_shutdown.php "ec_thread_pool_shutdown")

| [Prev](apis.ec_thread_pool_count.php)  | [Up](threadpool.php) |  [Next](apis.ec_thread_pool_defer_spawn.php) |
| ec_thread_pool_count  | [Table of Contents](index.php) |  ec_thread_pool_defer_spawn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)