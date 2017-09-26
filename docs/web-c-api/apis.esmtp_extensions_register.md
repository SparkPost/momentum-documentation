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

| esmtp_extensions_register |
| [Prev](apis.esmtp_destroy_message_construct.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.esmtp_message_factory.php) |

<a name="apis.esmtp_extensions_register"></a>
## Name

esmtp_extensions_register — Register ESMTP extensions

## Synopsis

`#include "esmtp_factory.h"`

| `void **esmtp_extensions_register** (` | <var class="pdparam">command</var>, |   |
|   | <var class="pdparam">s</var>, |   |
|   | <var class="pdparam">f</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`const char * <var class="pdparam">command</var>`;
`ESMTPExtensionSetup <var class="pdparam">s</var>`;
`ESMTPExtensionFunc <var class="pdparam">f</var>`;
`void * <var class="pdparam">closure</var>`;<a name="idp34197408"></a>
## Description

Register ESMTP extensions.

**Parameters**

<dl class="variablelist">

<dt>command</dt>

<dd>

The extension that you wish to register, for example `XCLIENT`.

</dd>

<dt>s</dt>

<dd>

A pointer to the setup function typedef'ed in the following way: `typedef int (*ESMTPExtensionSetup)(char *arg, message_construct *mc, void *closure);`. This parameter can be `NULL`.

</dd>

<dt>f</dt>

<dd>

A pointer to the function that implements the extension. `ESMTPExtensionFunc` is typedef'ed in the following way: `typedef int (*ESMTPExtensionFunc)(char *arg, Event *e, message_construct *mc, void *closure);`. This parameter can be `NULL`.

</dd>

<dt>closure</dt>

<dd>

The closure function. This parameter can be `NULL`.

</dd>

</dl>

**Return Values**

On success this function returns `1` and on failure `0`.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp34214016"></a>
## See Also

[Chapter 47, *SMTP-related Functions*](smtp.php "Chapter 47. SMTP-related Functions") 

| [Prev](apis.esmtp_destroy_message_construct.php)  | [Up](smtp.php) |  [Next](apis.esmtp_message_factory.php) |
| esmtp_destroy_message_construct  | [Table of Contents](index.php) |  esmtp_message_factory |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)