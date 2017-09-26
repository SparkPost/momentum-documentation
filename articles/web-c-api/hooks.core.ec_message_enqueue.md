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

| ec_message_enqueue |
| [Prev](hooks.core.ec_bag_find.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.ec_message_mcmt_fixup.php) |

<a name="hooks.core.ec_message_enqueue"></a>
## Name

ec_message_enqueue — This hook is called whenever a message is passed to the `ec_message_enqueue` API

## Synopsis

`#include "hooks/core/ec_message_enqueue.h"`

| `int **core_ec_message_enqueue** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp4057520"></a>
## Description

This hook is called whenever a message is passed to the `ec_message_enqueue` API.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>msg</dt>

<dd>

An `ec_message`. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>now</dt>

<dd>

A `timeval` struct.

</dd>

</dl>

**Return Values**

If you return `EC_MESSAGE_ENQUEUE_HOOK_CONT`, then the next hook in the chain is called. If `EC_MESSAGE_ENQUEUE_HOOK_CONT` is the return value of the last hook in the chain, then the default [ec_message_enqueue](apis.ec_message_enqueue.php "ec_message_enqueue") action will be taken.

If you return `EC_MESSAGE_ENQUEUE_HOOK_OK`, then subsequent hooks and the default core behavior are skipped, and [ec_message_enqueue](apis.ec_message_enqueue.php "ec_message_enqueue") will return and indicate success to its caller. By returning this value, the hook is taking ownership of the message and it has responsibility for cleaning up or otherwise dealing with the message.

If you return `EC_MESSAGE_ENQUEUE_HOOK_ERR`, then subsequent hooks and the default core behavior are skipped, and [ec_message_enqueue](apis.ec_message_enqueue.php "ec_message_enqueue") will return and indicate failure to its caller. By returning this value, the hook is taking ownership of the message and it has responsibility for cleaning up or otherwise dealing with the message.

**Threading**

This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.ec_bag_find.php)  | [Up](hooks.core.php) |  [Next](hooks.core.ec_message_mcmt_fixup.php) |
| ec_bag_find  | [Table of Contents](index.php) |  ec_message_mcmt_fixup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)