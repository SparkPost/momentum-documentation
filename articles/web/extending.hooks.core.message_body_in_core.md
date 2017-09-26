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

| message_body_in_core |
| [Prev](extending.hooks.core.mailq_insert_active.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.outbound_smtp_tls_verify_callback.php) |

<a name="extending.hooks.core.message_body_in_core"></a>
## Name

message_body_in_core

## Synopsis

`#include "hooks/core/message_body_in_core.h"`

| `int **message_body_in_core**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">pull</var>, |   |
|   | <var class="pdparam">result</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`email_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">pull</var>`;
`int * <var class="pdparam">result</var>`;

| `int **has_core_message_body_in_core_hook**(` | `)`; |   |

| `void **register_core_message_body_in_core_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_message_body_in_core_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_message_body_in_core_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_message_body_in_core_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_message_body_in_core_hook**(` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">pull</var>, |   |
|   | <var class="pdparam">result</var>`)`; |   |

`email_message * <var class="pdparam">mess</var>`;
`int <var class="pdparam">pull</var>`;
`int * <var class="pdparam">result</var>`;<a name="idp22035888"></a>
## Description

The message_body_in_core API call provides a mechanism through which Ecelerity can ascertain if the memory used by a message's body is "in core." In other words, if accessing the any of the pages of memory would induce a page fault and require the backing page to be fetched from swap. Page faulting is expensive and will block other actions in the system, so Ecelerity will choose to asynchronously pagefault (in another thread) if it determines the body it is about to send to the remote client would induce a page fault.

This hook allows you to overide or supplement the core's implementation (based of `mincore`) with your own.

The message in question is passed in as *`mess`*. The *`pull`* parameter instructs you to perform the pagefault (typically by simply reading a byte of data from every page. The integer pointed to by *`result`* should be assigned 0 if the message is in core and 1 if it is not. If you provide a result of 0, the function will be invoked again from a different thread with `pull = 1`.

Return values of `IO_CONT` and `IO_DONE` are acceptable. `IO_CONT` informs Ecelerity that the registered function did not finalize the in-coring process and that subsequent hooks should be called. `IO_DONE` indicates that `*result` is valid and that no subsequent registered hooks should be invoked.

| [Prev](extending.hooks.core.mailq_insert_active.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.outbound_smtp_tls_verify_callback.php) |
| mailq_insert_active  | [Table of Contents](index.php) |  outbound_smtp_tls_verify_callback |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)