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

| smtp_error_register_class |
| [Prev](apis.smtp_error_for_id.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.smtp_error_retrieve_class.php) |

<a name="apis.smtp_error_register_class"></a>
## Name

smtp_error_register_class — Register a user-defined SMTP error class

## Synopsis

`#include "misc/smtp_error_classify.h"`

| `void **smtp_error_register_class** (` | <var class="pdparam">class_code</var>, |   |
|   | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">desc</var>`)`; |   |

`unsigned short <var class="pdparam">class_code</var>`;
`const char * <var class="pdparam">name</var>`;
`const char * <var class="pdparam">desc</var>`;<a name="idp34493488"></a>
## Description

Register a user-defined SMTP error class.

This is similar to the functionality provided by the [bounce_classifier_override Module](https://support.messagesystems.com/docs/web-ref/modules.bounce_classifier_override.php).

**Parameters**

<dl class="variablelist">

<dt>class_code</dt>

<dd>

The code you want to assign to your new class.

</dd>

<dt>name</dt>

<dd>

The short name of your new class.

</dd>

<dt>desc</dt>

<dd>

A more verbose description of the class.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is legal to call this function in any thread.

<a name="idp34504480"></a>
## See Also

[Chapter 47, *SMTP-related Functions*](smtp.php "Chapter 47. SMTP-related Functions") 

| [Prev](apis.smtp_error_for_id.php)  | [Up](smtp.php) |  [Next](apis.smtp_error_retrieve_class.php) |
| smtp_error_for_id  | [Table of Contents](index.php) |  smtp_error_retrieve_class |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)