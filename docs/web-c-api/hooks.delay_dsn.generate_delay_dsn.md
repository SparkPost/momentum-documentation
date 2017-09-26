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

| generate_delay_dsn |
| [Prev](hooks.delay_dsn.php)  | Chapter 61. Hooks in the delay_dsn Scope |  [Next](hooks.delay_dsn.next_delay_dsn.php) |

<a name="hooks.delay_dsn.generate_delay_dsn"></a>
## Name

generate_delay_dsn — Allows you to override a configured setting to generate a delay DSN for a given message

## Synopsis

`#include "hooks/delay_dsn/generate_delay_dsn.h"`

| `int **delay_dsn_generate_delay_dsn** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">enabled</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`int * <var class="pdparam">enabled</var>`;<a name="idp9899264"></a>
## Description

The `delay_dsn` module allows delivery status notifications (DSNs) to be sent to the sender of a message, when that message has not yet been delivered. By default, no delay DSNs are sent.

This hook allows you to override a configured setting to generate a delay DSN for a given message.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure.

</dd>

<dt>msg</dt>

<dd>

The ec_message. For a description of this data type see [ec_message](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>enabled</dt>

<dd>

If `*enabled` equals `0`, then generating a delay DSN is disabled. If `*enabled` equals `1`, then generating a delay DSN is enabled.

</dd>

</dl>

**Return Values**

If `GENERATE_DELAY_DSN_HOOK_CONT` is returned, processing will fallback to other modules and then to the configuration. If `GENERATE_DELAY_DSN_HOOK_OK` is returned, then processing will terminate and the value passed back via enabled will be used.

**Threading**

This hook will be invoked in the `Scheduler` thread.

<a name="idp9914160"></a>
## See Also

[next_delay_dsn](hooks.delay_dsn.next_delay_dsn.php "next_delay_dsn"), [send_notification](hooks.delay_dsn.send_notification.php "send_notification"), and the [delay_dsn Module](https://support.messagesystems.com/docs/web-ref/modules.delay_dsn.php).

| [Prev](hooks.delay_dsn.php)  | [Up](hooks.delay_dsn.php) |  [Next](hooks.delay_dsn.next_delay_dsn.php) |
| Chapter 61. Hooks in the delay_dsn Scope  | [Table of Contents](index.php) |  next_delay_dsn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)