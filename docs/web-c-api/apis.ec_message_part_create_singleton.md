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

| ec_message_part_create_singleton |
| [Prev](apis.ec_message_part_create_multipart.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_part_extract.php) |

<a name="apis.ec_message_part_create_singleton"></a>
## Name

ec_message_part_create_singleton — Create a new singleton message part

## Synopsis

`#include "ec_message.h"`

| `ec_message_part * **ec_message_part_create_singleton** (` | <var class="pdparam">mimetype</var>, |   |
|   | <var class="pdparam">encoding</var>, |   |
|   | <var class="pdparam">body</var>`)`; |   |

`const char * <var class="pdparam">mimetype</var>`;
`int <var class="pdparam">encoding</var>`;
`io_object * <var class="pdparam">body</var>`;<a name="idp28765280"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Create a new singleton message part.

Creates a new message part representing a singleton (or leaf).

The returned value has a single reference; the caller is responsible for releasing it at the appropriate time.

The newly created part has an initial Content-Type header created based on the supplied mimetype parameter.

encoding is one of EC_MIME_TE_7BIT, EC_MIME_TE_8BIT, EC_MIME_TE_BINARY, EC_MIME_TE_QUOTED_PRINTABLE or EC_MIME_TE_BASE64\. It must match the encoding of the content referenced by the body parameter.

body is an optional io_object containing the literal non-header content for the message part. For example, if encoding is EC_MIME_TE_QUOTED_PRINTABLE then body is assumed to be a stream of quoted-printable encoded data.

**Parameters**

<dl class="variablelist">

<dt>mimetype</dt>

<dd>

used to construct the Content-Type header

</dd>

<dt>encoding</dt>

<dd>

indicates the encoding used in the body

</dd>

<dt>body</dt>

<dd>

an io_object for the body content. May be NULL.

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 3.0.18.

| [Prev](apis.ec_message_part_create_multipart.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_part_extract.php) |
| ec_message_part_create_multipart  | [Table of Contents](index.php) |  ec_message_part_extract |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)