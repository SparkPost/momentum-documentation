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

| ec_message_part_touch |
| [Prev](apis.ec_message_part_insert_before.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_part_unlink.php) |

<a name="apis.ec_message_part_touch"></a>
## Name

ec_message_part_touch — Flags a message part as having been modified

## Synopsis

`#include "ec_message.h"`

| `void **ec_message_part_touch** (` | <var class="pdparam">part</var>, |   |
|   | <var class="pdparam">what</var>`)`; |   |

`ec_message_part * <var class="pdparam">part</var>`;
`int <var class="pdparam">what</var>`;<a name="idp28984208"></a>
## Description

Flags a message part as having been modified. The touched status propagates up to the top level and is used to determine how the message should be re-assembled for spooling.

**Parameters**

<dl class="variablelist">

<dt>part</dt>

<dd>

The message part that was modified. A pointer to an ec_message_part struct. For documentation of this data structure see [Section 68.39, “ec_message_part”](structs.ec_message_part.php "68.39. ec_message_part")

</dd>

<dt>what</dt>

<dd>

Flags (EC_MSG_HDR_XXX) that indicate what was modified.

</dd>

</dl>

**Return Values**

This function returns void.

**Related Constants**

<dl class="variablelist">

<dt>EC_MSG_HDR_EOL_FIX</dt>

<dd>

This part has or requires that line endings be fixed in its headers.

</dd>

<dt>EC_MSG_HDR_ADD</dt>

<dd>

This part had header(s) added.

</dd>

<dt>EC_MSG_HDR_REM</dt>

<dd>

This part had header(s) removed.

</dd>

<dt>EC_MSG_BODY_MODIFIED</dt>

<dd>

This part had its body modified.

</dd>

<dt>EC_MSG_BODY_LEN_FIX</dt>

<dd>

This part has or requires that the length of its lines be fixed.

</dd>

<dt>EC_MSG_BODY_EOL_FIX</dt>

<dd>

This part has or requires that line endings be fixed in its body.

</dd>

</dl>

**Threading**

It is legal to call this function in any thread.

<a name="idp29005008"></a>
## See Also

[ec_message_set_first_part](apis.ec_message_set_first_part.php "ec_message_set_first_part") and [ec_message_get_first_part](apis.ec_message_get_first_part.php "ec_message_get_first_part").

| [Prev](apis.ec_message_part_insert_before.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_part_unlink.php) |
| ec_message_part_insert_before  | [Table of Contents](index.php) |  ec_message_part_unlink |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)