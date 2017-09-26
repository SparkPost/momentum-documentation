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

| final_validation |
| [Prev](hooks.core.esmtp_message_sp_async_samfunc.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.gauge_cache_manip.php) |

<a name="hooks.core.final_validation"></a>
## Name

final_validation — This hook is invoked after the normal validation steps

## Synopsis

`#include "hooks/core/final_validation.h"`

| `void **core_final_validation** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">ctx</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`validate_context * <var class="pdparam">ctx</var>`;<a name="idp19027152"></a>
## Description

This hook is invoked after the normal validation steps have completed and is the recommended hook point to implement message signing prior to spooling the message to disk and attempting delivery.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>msg</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>ac</dt>

<dd>

The `accept_construct` struct. For documentation of this data structure see [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct")

</dd>

<dt>ctx</dt>

<dd>

The `validate_context` struct. For documentation of this data structure see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context")

</dd>

</dl>

**Return Values**

This hook returns `void`.

**Threading**

This hook will be called in any thread.

<a name="idp335312"></a>
## See Also

| [Prev](hooks.core.esmtp_message_sp_async_samfunc.php)  | [Up](hooks.core.php) |  [Next](hooks.core.gauge_cache_manip.php) |
| esmtp_message_sp_async_samfunc  | [Table of Contents](index.php) |  gauge_cache_manip |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)