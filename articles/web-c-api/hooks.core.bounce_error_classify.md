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

| bounce_error_classify |
| [Prev](hooks.core.body_modify.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.cache_get.php) |

<a name="hooks.core.bounce_error_classify"></a>
## Name

bounce_error_classify

## Synopsis

`#include "hooks/core/bounce_error_classify.h"`

| `int **bounce_error_classify** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">body</var>, |   |
|   | <var class="pdparam">len</var>, |   |
|   | <var class="pdparam">pos</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`const char * <var class="pdparam">body</var>`;
`int <var class="pdparam">len</var>`;
`int * <var class="pdparam">pos</var>`;

| `int **has_core_bounce_error_classify_hook** (` | `)`; |   |

| `void **register_core_bounce_error_classify_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_bounce_error_classify_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_bounce_error_classify_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_bounce_error_classify_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_bounce_error_classify_hook** (` | <var class="pdparam">body</var>, |   |
|   | <var class="pdparam">len</var>, |   |
|   | <var class="pdparam">pos</var>`)`; |   |

`const char * <var class="pdparam">body</var>`;
`int <var class="pdparam">len</var>`;
`int * <var class="pdparam">pos</var>`;<a name="idp19099504"></a>
## Description

Bounce classify an out of band bounce

The system calls this hook when bounce_classify2() or bounce_classify() are called. You should not invoke this hook directly; use bounce_classify2() instead.

The system guarantees that body will not include the trailing "." from the message terminator. In addition, the message payload will have transfer decoding removed.

The hook implementation returns a bounce classification code from the range defined in misc/smtp_error_codes.h, which may include custom classifications registered via smtp_error_register_class().

If the hook classifies the message, it will update the integer to which "pos" points to reflect the start of the substring of body that was responsible for the classification.

| [Prev](hooks.core.body_modify.php)  | [Up](hooks.core.php) |  [Next](hooks.core.cache_get.php) |
| body_modify  | [Table of Contents](index.php) |  cache_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)