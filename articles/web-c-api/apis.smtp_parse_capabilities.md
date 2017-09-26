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

| smtp_parse_capabilities |
| [Prev](apis.smtp_next_state.php)  | Chapter 47. SMTP-related Functions |  [Next](sockaddr.php) |

<a name="apis.smtp_parse_capabilities"></a>
## Name

smtp_parse_capabilities — Parse the remote capabilities from the EHLO response

## Synopsis

`#include "smtp.h"`

| `void **smtp_parse_capabilities** (` | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">conn</var>`)`; |   |

`delivery_construct * <var class="pdparam">dc</var>`;
`connection * <var class="pdparam">conn</var>`;<a name="idp34609296"></a>
## Description

Parse the remote capabilities from the EHLO response.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

The delivery construct for the current session. For a description of this data type see [Section 68.11, “delivery_construct”](structs.delivery_construct.php "68.11. delivery_construct").

</dd>

<dt>conn</dt>

<dd>

The current connection. For a description of this data type see [Section 68.9, “connection”](structs.connection.php "68.9. connection").

</dd>

</dl>

**Threading**

It is legal to call this function in any thread.

<a name="idp34618448"></a>
## See Also

[Chapter 47, *SMTP-related Functions*](smtp.php "Chapter 47. SMTP-related Functions") 

| [Prev](apis.smtp_next_state.php)  | [Up](smtp.php) |  [Next](sockaddr.php) |
| smtp_next_state  | [Table of Contents](index.php) |  Chapter 48. Socket Address Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)