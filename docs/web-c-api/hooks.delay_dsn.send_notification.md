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

| send_notification |
| [Prev](hooks.delay_dsn.next_delay_dsn.php)  | Chapter 61. Hooks in the delay_dsn Scope |  [Next](hooks.gcm.php) |

<a name="hooks.delay_dsn.send_notification"></a>
## Name

send_notification — Allows you to override the MDN generation process that is determined by the DSN module.

## Synopsis

`#include "hooks/delay_dsn/send_notification.h"`

| `int **delay_dsn_send_notification** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;<a name="idp9955616"></a>
## Description

This hook allows you to override the MDN generation process that is determined by the DSN module. This hook is an ideal place to generate completely custom DSNs in policy.

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

</dl>

**Return Values**

If your registered hook returns `DELAY_DSN_SEND_NOTIFICATION_OK` then the internal default MDN generation will be bypassed.

**Threading**

This hook will be invoked in the `Scheduler` thread.

<a name="idp9965264"></a>
## See Also

[generate_delay_dsn](hooks.delay_dsn.generate_delay_dsn.php "generate_delay_dsn"), [next_delay_dsn](hooks.delay_dsn.next_delay_dsn.php "next_delay_dsn"), and the [delay_dsn Module](https://support.messagesystems.com/docs/web-ref/modules.delay_dsn.php).

| [Prev](hooks.delay_dsn.next_delay_dsn.php)  | [Up](hooks.delay_dsn.php) |  [Next](hooks.gcm.php) |
| next_delay_dsn  | [Table of Contents](index.php) |  Chapter 62. Hooks in the gcm Scope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)