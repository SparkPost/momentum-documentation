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

| inbound_smtp_tls_verify_callback |
| [Prev](hooks.core.get_received_header_text.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.inc_inbound_connections.php) |

<a name="hooks.core.inbound_smtp_tls_verify_callback"></a>
## Name

inbound_smtp_tls_verify_callback

## Synopsis

`#include "hooks/core/inbound_smtp_tls_verify_callback.h"`

| `int **inbound_smtp_tls_verify_callback** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">mc</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">preverify_ok</var>, |   |
|   | <var class="pdparam">subject</var>, |   |
|   | <var class="pdparam">issuer</var>, |   |
|   | <var class="pdparam">x509ctx</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`message_construct * <var class="pdparam">mc</var>`;
`ec_ssl_ctx * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">preverify_ok</var>`;
`const char * <var class="pdparam">subject</var>`;
`const char * <var class="pdparam">issuer</var>`;
`struct ssl_x509_store_ctx_st * <var class="pdparam">x509ctx</var>`;

| `int **has_core_inbound_smtp_tls_verify_callback_hook** (` | `)`; |   |

| `void **register_core_inbound_smtp_tls_verify_callback_hook_first** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_inbound_smtp_tls_verify_callback_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_inbound_smtp_tls_verify_callback_hook_last** (` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_inbound_smtp_tls_verify_callback_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_inbound_smtp_tls_verify_callback_hook** (` | <var class="pdparam">mc</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">preverify_ok</var>, |   |
|   | <var class="pdparam">subject</var>, |   |
|   | <var class="pdparam">issuer</var>, |   |
|   | <var class="pdparam">x509ctx</var>`)`; |   |

`message_construct * <var class="pdparam">mc</var>`;
`ec_ssl_ctx * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">preverify_ok</var>`;
`const char * <var class="pdparam">subject</var>`;
`const char * <var class="pdparam">issuer</var>`;
`struct ssl_x509_store_ctx_st * <var class="pdparam">x509ctx</var>`;<a name="idp18320400"></a>
## Description

This hook allows you to augment the built-in TLS verification process for inbound SMTP sessions. The parameters are the same as the ec_ssl_verify_callback_func defined in ec_ssl.h, with the addition of the message_construct for the current session.

The *`subject`*, *`issuer`* and *`x509ctx`* parameters may be NULL in certain circumstances -- when client certificate verification fails or no client certificate was presented. This hook is called even when the listener is not configured to verify client certificates (`verify_mode` set to `none`).

| [Prev](hooks.core.get_received_header_text.php)  | [Up](hooks.core.php) |  [Next](hooks.core.inc_inbound_connections.php) |
| get_received_header_text  | [Table of Contents](index.php) |  inc_inbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)