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

| ec_spool_ctx_set_max_retention |
| [Prev](apis.ec_spool_ctx_set_always_regenerate_message_ids.php)  | Chapter 49. Spool-related Functions |  [Next](apis.ec_spool_ctx_set_suppress_trace_headers.php) |

<a name="apis.ec_spool_ctx_set_max_retention"></a>
## Name

ec_spool_ctx_set_max_retention — set the maximum retention time for a spool context

## Synopsis

`#include "spool.h"`

| `void **ec_spool_ctx_set_max_retention** (` | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">retention</var>`)`; |   |

`ec_spool_ctx * <var class="pdparam">ctx</var>`;
`int <var class="pdparam">retention</var>`;<a name="idp34961792"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

set the maximum retention time for a spool context.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

| [Prev](apis.ec_spool_ctx_set_always_regenerate_message_ids.php)  | [Up](spool.php) |  [Next](apis.ec_spool_ctx_set_suppress_trace_headers.php) |
| ec_spool_ctx_set_always_regenerate_message_ids  | [Table of Contents](index.php) |  ec_spool_ctx_set_suppress_trace_headers |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)