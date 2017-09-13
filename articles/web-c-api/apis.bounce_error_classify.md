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

| bounce_error_classify |
| [Prev](bounce.php)  | Chapter 8. Bounce Functions |  [Next](apis.bounce_error_classify2.php) |

<a name="apis.bounce_error_classify"></a>
## Name

bounce_error_classify — Classify a buffer in the context of an out-of-band bounce

## Synopsis

`#include "misc/smtp_error_classify.h"`

| `int **bounce_error_classify** (` | <var class="pdparam">body</var>, |   |
|   | <var class="pdparam">body_len</var>, |   |
|   | <var class="pdparam">orig_rcpt</var>, |   |
|   | <var class="pdparam">ignorelist</var>, |   |
|   | <var class="pdparam">mid</var>`)`; |   |

`const char * <var class="pdparam">body</var>`;
`int <var class="pdparam">body_len</var>`;
`char ** <var class="pdparam">orig_rcpt</var>`;
`const char * <var class="pdparam">ignorelist</var>`;
`message_id * <var class="pdparam">mid</var>`;<a name="idp20404432"></a>
## Description

### Deprecated

Use [bounce_error_classify2](apis.bounce_error_classify2.php "bounce_error_classify2") instead!

Classify a buffer in the context of an out-of-band bounce.

This function will NOT parse out RFC 3464 dispositions.

Starting with version 3.3.0, this function will simply call the core_bounce_error_classify_hook(), utilizing a cache for the result. If no hook is registered, this function will return BC_UNDETERMINED.

In earlier versions, additional heuristics were employed.

The caller is responsible for releasing the memory returned for orig_rcpt using free(3).

Prior to version 3.3.0, the body parameter was temporarily modified to truncate it at the terminator of the message. Since 3.3.0, an internal copy is constructed if body ends with <CRLF.CRLF>.

**Parameters**

<dl class="variablelist">

<dt>body</dt>

<dd>

A buffer containing the message body to parse.

</dd>

<dt>body_len</dt>

<dd>

How much of body to parse.

</dd>

<dt>orig_rcpt</dt>

<dd>

The likely recipient of the original message that bounced.

</dd>

<dt>ignorelist</dt>

<dd>

Ignored and unused.

</dd>

<dt>mid</dt>

<dd>

The message-id (to update the internal cache) - may be NULL.

</dd>

</dl>

**Return Values**

The SMTP classification ID.

| [Prev](bounce.php)  | [Up](bounce.php) |  [Next](apis.bounce_error_classify2.php) |
| Chapter 8. Bounce Functions  | [Table of Contents](index.php) |  bounce_error_classify2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)