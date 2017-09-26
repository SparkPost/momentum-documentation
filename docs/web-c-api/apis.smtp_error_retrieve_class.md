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

| smtp_error_retrieve_class |
| [Prev](apis.smtp_error_register_class.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.smtp_get_state.php) |

<a name="apis.smtp_error_retrieve_class"></a>
## Name

smtp_error_retrieve_class — Return the name and description for a bounce code

## Synopsis

`#include "misc/smtp_error_classify.h"`

| `int **smtp_error_retrieve_class** (` | <var class="pdparam">class_code</var>, |   |
|   | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">name_len</var>, |   |
|   | <var class="pdparam">desc</var>, |   |
|   | <var class="pdparam">desc_len</var>`)`; |   |

`unsigned short <var class="pdparam">class_code</var>`;
`char * <var class="pdparam">name</var>`;
`int <var class="pdparam">name_len</var>`;
`char * <var class="pdparam">desc</var>`;
`int <var class="pdparam">desc_len</var>`;<a name="idp34517808"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.3.

Return the name and description for a bounce code.

**Parameters**

<dl class="variablelist">

<dt>class_code</dt>

<dd>

The class code.

</dd>

<dt>name</dt>

<dd>

The buffer to store the name.

</dd>

<dt>name_len</dt>

<dd>

The buffer size.

</dd>

<dt>desc</dt>

<dd>

The buffer to store description.

</dd>

<dt>desc_len</dt>

<dd>

The `desc` buffer size.

</dd>

</dl>

**Return Values**

If the code is found, this function returns `1`; Otherwise `0` is returned.

**Threading**

It is legal to call this function in any thread.

<a name="idp34534160"></a>
## See Also

[Chapter 47, *SMTP-related Functions*          ](smtp.php "Chapter 47. SMTP-related Functions") and [Bounce Classification Codes](https://support.messagesystems.com/docs/web-ref/bounce_logger.classification.codes.php).

| [Prev](apis.smtp_error_register_class.php)  | [Up](smtp.php) |  [Next](apis.smtp_get_state.php) |
| smtp_error_register_class  | [Table of Contents](index.php) |  smtp_get_state |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)