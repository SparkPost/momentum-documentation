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

| ec_message_get_headers |
| [Prev](apis.ec_message_get_first_part.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_get_mailfrom.php) |

<a name="apis.ec_message_get_headers"></a>
## Name

ec_message_get_headers — Returns an rfc2822_context struct which stores the headers for the message part

## Synopsis

`#include "message.h"`

| `rfc2822_context * **ec_message_get_headers** (` | <var class="pdparam">part</var>, |   |
|   | <var class="pdparam">for_read</var>`)`; |   |

`ec_message_part * <var class="pdparam">part</var>`;
`int <var class="pdparam">for_read</var>`;<a name="idp28390112"></a>
## Description

Returns an rfc2822_context struct which stores the headers for the message part.

**Parameters**

<dl class="variablelist">

<dt>part</dt>

<dd>

A pointer to an ec_message_part struct. For documentation of this data structure see [Section 68.39, “ec_message_part”](structs.ec_message_part.php "68.39. ec_message_part")

</dd>

<dt>for_read</dt>

<dd>

An integer value. If for_read is 1 (non-zero), then the address of the headers in an rfc2822_context struct within the ec_message_part is returned. If for_read is passed 0, then a clone of the headers is allocated and that address returned.

</dd>

</dl>

**Return Values**

This function returns the address of an rfc2822_context struct. The rfc2822_context is passed by reference. It is valid until the message part is freed (either directly or indirectly by the message itself being freed). Any modifications made to the rfc2822_context must be noted in the message part with [ec_message_part_touch](apis.ec_message_part_touch.php "ec_message_part_touch"). For documentation of this data structure see [Section 68.66, “rfc2822_context”](structs.rfc2822_context.php "68.66. rfc2822_context")

**Threading**

It is legal to call this function in any thread.

<a name="idp28400352"></a>
## See Also

[ec_message_render_headers_to_string](apis.ec_message_render_headers_to_string.php "ec_message_render_headers_to_string"), [ec_message_part_touch](apis.ec_message_part_touch.php "ec_message_part_touch")

| [Prev](apis.ec_message_get_first_part.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_get_mailfrom.php) |
| ec_message_get_first_part  | [Table of Contents](index.php) |  ec_message_get_mailfrom |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)