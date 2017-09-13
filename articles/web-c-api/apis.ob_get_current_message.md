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

| ob_get_current_message |
| [Prev](apis.ec_retry_state_reset.php)  | Chapter 34. Message Functions |  [Next](misc.php) |

<a name="apis.ob_get_current_message"></a>
## Name

ob_get_current_message — Utility function to return the current ec_message

## Synopsis

`#include "modules/delivery/delivery.h"`

| `ec_message* **ob_get_current_message** (` | <var class="pdparam">connh</var>`)`; |   |

`connection_handle * <var class="pdparam">connh</var>`;<a name="idp29879968"></a>
## Description

**Configuration Change. ** This function is available as of Momentum version 3.5.5.

A utility function to return the ec_message that is currently being processed.

**Parameters**

<dl class="variablelist">

<dt>connh</dt>

<dd>

A connection_handle. For a description of this struct see [Section 68.10, “connection_handle”](structs.connection_handle.php "68.10. connection_handle").

</dd>

</dl>

**Return Values**

This function returns an [ec_message](structs.ec_message.php "68.38. ec_message").

**Threading**

It is legal to call this function in any thread.

<a name="idp29888992"></a>
## See Also

[msg_dispose](hooks.generic_delivery.msg_dispose.php "msg_dispose") and [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](apis.ec_retry_state_reset.php)  | [Up](ec_message.php) |  [Next](misc.php) |
| ec_retry_state_reset  | [Table of Contents](index.php) |  Chapter 35. Miscellaneous Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)