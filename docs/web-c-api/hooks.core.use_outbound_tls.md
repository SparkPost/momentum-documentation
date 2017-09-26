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

| use_outbound_tls |
| [Prev](hooks.core.sys_init.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.validate_accept.php) |

<a name="hooks.core.use_outbound_tls"></a>
## Name

use_outbound_tls

## Synopsis

`#include "hooks/core/use_outbound_tls.h"`

| `int **use_outbound_tls** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">message</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`email_message * <var class="pdparam">message</var>`;

| `int **has_core_use_outbound_tls_hook** (` | `)`; |   |

| `void **register_core_use_outbound_tls_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_use_outbound_tls_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_use_outbound_tls_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_use_outbound_tls_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_use_outbound_tls_hook** (` | <var class="pdparam">message</var>`)`; |   |

`email_message * <var class="pdparam">message</var>`;<a name="idp15381296"></a>
## Description

`use_outbound_tls` is called from within the SMTP delivery state machine to ascertain if TLS should be used for this *`message`*:

<dl class="variablelist">

<dt>EC_USE_TLS_NO</dt>

<dd>

TLS must not be used for this message.

</dd>

<dt>EC_USE_TLS_IFAVAILABLE</dt>

<dd>

If TLS is available (offered by the remote server) then the state machine should upgrade the current SMTP session to use TLS.

</dd>

<dt>EC_USE_TLS_REQUIRED</dt>

<dd>

The message in question requires TLS to be used. If it is unavailable, the message should not be sent.

</dd>

</dl>

| [Prev](hooks.core.sys_init.php)  | [Up](hooks.core.php) |  [Next](hooks.core.validate_accept.php) |
| sys_init  | [Table of Contents](index.php) |  validate_accept |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)