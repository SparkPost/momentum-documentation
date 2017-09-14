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

| bounce_error_classify2 |
| [Prev](apis.bounce_error_classify.php)  | Chapter 8. Bounce Functions |  [Next](apis.ec_generate_soft_bounce.php) |

<a name="apis.bounce_error_classify2"></a>
## Name

bounce_error_classify2 — Classify a message in the context of an out-of-band bounce

## Synopsis

`#include "misc/smtp_error_classify.h"`

| `int **bounce_error_classify2** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">orig_rcpt</var>, |   |
|   | <var class="pdparam">ignorelist</var>, |   |
|   | <var class="pdparam">limit</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`char ** <var class="pdparam">orig_rcpt</var>`;
`const char * <var class="pdparam">ignorelist</var>`;
`int <var class="pdparam">limit</var>`;<a name="idp20432112"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Classify a message in the context of an out-of-band bounce.

If the message is an RFC 3464 compliant MDN, the original recipient and disposition information will be extracted and used to drive the classification.

Otherwise, this function will fall-back to invoking the core_bounce_error_classify_hook(). The bounce_classifier module may implement this hook if MDN rules are configured.

The caller is responsible for releasing the memory returned for orig_rcpt using free(3).

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to parse

</dd>

<dt>orig_rcpt</dt>

<dd>

the likely recipient of the original message that bounced

</dd>

<dt>ignorelist</dt>

<dd>

ignored and unused

</dd>

<dt>limit</dt>

<dd>

a byte-limit of message content to scan (default 8192) for non-RFC 3464 compliant messages.

</dd>

</dl>

**Return Values**

the smtp classification id

| [Prev](apis.bounce_error_classify.php)  | [Up](bounce.php) |  [Next](apis.ec_generate_soft_bounce.php) |
| bounce_error_classify  | [Table of Contents](index.php) |  ec_generate_soft_bounce |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)