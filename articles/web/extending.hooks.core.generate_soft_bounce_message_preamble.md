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

| generate_soft_bounce_message_preamble |
| [Prev](extending.hooks.core.generate_soft_bounce_message.php)  | Chapter 18. Hooks in the core scope |  [Next](extending.hooks.core.get_inbound_tls_parameters.php) |

<a name="extending.hooks.core.generate_soft_bounce_message_preamble"></a>
## Name

generate_soft_bounce_message_preamble

## Synopsis

`#include "hooks/core/generate_soft_bounce_message_preamble.h"`

| `int **generate_soft_bounce_message_preamble**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">body</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`email_message * <var class="pdparam">message</var>`;
`string * <var class="pdparam">body</var>`;

| `int **has_core_generate_soft_bounce_message_preamble_hook**(` | `)`; |   |

| `void **register_core_generate_soft_bounce_message_preamble_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_generate_soft_bounce_message_preamble_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_core_generate_soft_bounce_message_preamble_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_core_generate_soft_bounce_message_preamble_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `int **call_core_generate_soft_bounce_message_preamble_hook**(` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">body</var>`)`; |   |

`email_message * <var class="pdparam">message</var>`;
`string * <var class="pdparam">body</var>`;<a name="idp21302480"></a>
## Description

When Ecelerity generates a delivery status notification (DSN) message, it creates the `email_message`, constructs the headers, a preamble and then attaches some portion of the reference email to the end (based on the configuration).

This hook gives you the constructed header as a `string *` and allows you to modify the headers directly and/or append your own preamble that will be used as the DSN body.

| [Prev](extending.hooks.core.generate_soft_bounce_message.php)  | [Up](extending.hooks.core.php) |  [Next](extending.hooks.core.get_inbound_tls_parameters.php) |
| generate_soft_bounce_message  | [Table of Contents](index.php) |  get_inbound_tls_parameters |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)