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

| packet |
| [Prev](extending.hooks.publish.php)  | Chapter 23. Hooks in the publish scope |  [Next](extending.hooks.quarantine.php) |

<a name="extending.hooks.publish.packet"></a>
## Name

packet

## Synopsis

`#include "hooks/publish/packet.h"`

| `void **packet**(` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">source</var>, |   |
|   | <var class="pdparam">packet</var>, |   |
|   | <var class="pdparam">plen</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`char * <var class="pdparam">source</var>`;
`char * <var class="pdparam">packet</var>`;
`int <var class="pdparam">plen</var>`;

| `int **has_publish_packet_hook**(` | `)`; |   |

| `void **register_publish_packet_hook_first**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_publish_packet_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **register_publish_packet_hook_last**(` | <var class="pdparam">hook</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`ec_hook_publish_packet_func_t <var class="pdparam">hook</var>`;
`void *<var class="pdparam">closure</var>`;

| `void **call_publish_packet_hook**(` | <var class="pdparam">source</var>, |   |
|   | <var class="pdparam">packet</var>, |   |
|   | <var class="pdparam">plen</var>`)`; |   |

`char * <var class="pdparam">source</var>`;
`char * <var class="pdparam">packet</var>`;
`int <var class="pdparam">plen</var>`;<a name="idp23652608"></a>
## Description

**Configuration Change. ** This feature was introduced in Momentum 2.1.

<dl class="variablelist">

<dt>closure</dt>

<dd>

the implementation specific closure, this is not needed for the hook's caller.

</dd>

<dt>source</dt>

<dd>

a string containing the name of the source module from where the publish_packet hook is being called.

</dd>

<dt>packet</dt>

<dd>

a pointer to the buffer containing the data to be published

</dd>

<dt>plen</dt>

<dd>

an integer describing the length of the data in bytes.

</dd>

</dl>

Invoked when a module wants to publish information via spread to the cluster.

| [Prev](extending.hooks.publish.php)  | [Up](extending.hooks.publish.php) |  [Next](extending.hooks.quarantine.php) |
| Chapter 23. Hooks in the publish scope  | [Table of Contents](index.php) |  Chapter 24. Hooks in the quarantine scope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)