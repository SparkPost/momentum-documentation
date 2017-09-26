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

| smtp_error_classify_len |
| [Prev](apis.smtp_error_classify.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.smtp_error_for_id.php) |

<a name="apis.smtp_error_classify_len"></a>
## Name

smtp_error_classify_len — Classify the response code given in response to an SMTP command

## Synopsis

`#include "misc/smtp_error_classify.h"`

| `int **smtp_error_classify_len** (` | <var class="pdparam">response</var>, |   |
|   | <var class="pdparam">len</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">mid</var>`)`; |   |

`const char * <var class="pdparam">response</var>`;
`int <var class="pdparam">len</var>`;
`const char * <var class="pdparam">domain</var>`;
`message_id * <var class="pdparam">mid</var>`;<a name="idp34450080"></a>
## Description

Classify the response code given in response to an SMTP command.

**Parameters**

<dl class="variablelist">

<dt>response</dt>

<dd>

The buffer to parse, must be `NUL` terminated even though there is a len parameter.

</dd>

<dt>len</dt>

<dd>

The length of the buffer to parse.

</dd>

<dt>domain</dt>

<dd>

The domain the message is being sent to (for improved accuracy).

</dd>

<dt>mid</dt>

<dd>

Unused and may be NULL.

</dd>

</dl>

**Return Values**

The SMTP classification id.

**Threading**

It is legal to call this function in any thread.

<a name="idp34462592"></a>
## See Also

[Chapter 47, *SMTP-related Functions*](smtp.php "Chapter 47. SMTP-related Functions") , [smtp_error_classify](apis.smtp_error_classify.php "smtp_error_classify") and [smtp_client_args_add](apis.smtp_client_args_add.php "smtp_client_args_add")

| [Prev](apis.smtp_error_classify.php)  | [Up](smtp.php) |  [Next](apis.smtp_error_for_id.php) |
| smtp_error_classify  | [Table of Contents](index.php) |  smtp_error_for_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)