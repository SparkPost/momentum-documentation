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

| get_received_header_text |
| [Prev](hooks.core.get_protocol_string_for_trace_headers.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.inbound_smtp_tls_verify_callback.php) |

<a name="hooks.core.get_received_header_text"></a>
## Name

get_received_header_text — Use this hook to set the text of the `Received` header in a message

## Synopsis

`#include "hooks/core/get_received_header_text.h"`

| `int **core_get_received_header_text** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">mc</var>, |   |
|   | <var class="pdparam">ac</var>, |   |
|   | <var class="pdparam">ctx</var>, |   |
|   | <var class="pdparam">response</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`ec_message * <var class="pdparam">msg</var>`;
`message_construct * <var class="pdparam">mc</var>`;
`accept_construct * <var class="pdparam">ac</var>`;
`validate_context * <var class="pdparam">ctx</var>`;
`string * <var class="pdparam">response</var>`;<a name="idp13192128"></a>
## Description

Use this hook to set the text of the `Received` header in a message.

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

<dt>mc</dt>

<dd>

A `message_construct`. For documentation of this data structure see [Section 68.59, “message_construct”](structs.message_construct.php "68.59. message_construct").

</dd>

<dt>ac</dt>

<dd>

The `accept_construct`. For documentation of this data structure see [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct").

</dd>

<dt>ctx</dt>

<dd>

The `validate_context` struct. For documentation of this data structure see [Section 68.86, “validate_context”](structs.validate_context.php "68.86. validate_context").

</dd>

<dt>response</dt>

<dd>

A pointer to a `string`. Use this to set the `Received` header text.

</dd>

</dl>

**Return Values**

Return `0` if you use the default text and `1` if you use the text in the `response` parameter.

**Threading**

This hook will be called in `any` thread.

| [Prev](hooks.core.get_protocol_string_for_trace_headers.php)  | [Up](hooks.core.php) |  [Next](hooks.core.inbound_smtp_tls_verify_callback.php) |
| get_protocol_string_for_trace_headers  | [Table of Contents](index.php) |  inbound_smtp_tls_verify_callback |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)