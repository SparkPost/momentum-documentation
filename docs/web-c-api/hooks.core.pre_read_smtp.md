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

| pre_read_smtp |
| [Prev](hooks.core.pre_mailq_message_requeue.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.pre_swap_out_meta.php) |

<a name="hooks.core.pre_read_smtp"></a>
## Name

pre_read_smtp

## Synopsis

`#include "hooks/core/pre_read_smtp.h"`

| `int **pre_read_smtp** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">expected</var>, |   |
|   | <var class="pdparam">newstate</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">mask</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`delivery_construct * <var class="pdparam">dc</var>`;
`int <var class="pdparam">expected</var>`;
`int <var class="pdparam">newstate</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int * <var class="pdparam">mask</var>`;

| `int **has_core_pre_read_smtp_hook** (` | `)`; |   |

| `void **register_core_pre_read_smtp_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_pre_read_smtp_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_pre_read_smtp_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_pre_read_smtp_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_pre_read_smtp_hook** (` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">expected</var>, |   |
|   | <var class="pdparam">newstate</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">mask</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`int <var class="pdparam">expected</var>`;
`int <var class="pdparam">newstate</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int * <var class="pdparam">mask</var>`;<a name="idp16054416"></a>
## Description

The `pre_read_smtp` hook is invoked immediately before data is read from the the remote server during **outbound** connections. The subsequent read operation is not guaranteed to return a complete SMTP response.

*`dc`* holds all details regarding the current SMTP connection. *`expected`* represents the expected SMTP response code (e.g. 250). *`newstate`* hold the new SMTP state machine state should the read complete and match the *`expected`* response code. *`now`* is the current scheduler time. *`*mask`* holds the event mask that should be used to trigger the next read. Under most circumstances, values past by reference should not be altered. Those arguments that are passed by reference are done so to mirror the parent function's API.

| [Prev](hooks.core.pre_mailq_message_requeue.php)  | [Up](hooks.core.php) |  [Next](hooks.core.pre_swap_out_meta.php) |
| pre_mailq_message_requeue  | [Table of Contents](index.php) |  pre_swap_out_meta |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)