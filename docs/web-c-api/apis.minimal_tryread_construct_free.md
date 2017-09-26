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

| minimal_tryread_construct_free |
| [Prev](apis.ec_growbuf_io_open.php)  | Chapter 9. Buffer Functions |  [Next](apis.tryread_until.php) |

<a name="apis.minimal_tryread_construct_free"></a>
## Name

minimal_tryread_construct_free — Release the resources of a `minimal_tryread_construct`

## Synopsis

`#include "ec_growbuf.h"`

| `void **minimal_tryread_construct_free** (` | <var class="pdparam">mtc</var>`)`; |   |

`minimal_tryread_construct * <var class="pdparam">mtc</var>`;<a name="idp20592768"></a>
## Description

Release the resources of a [Section 68.61, “minimal_tryread_construct”](structs.minimal_tryread_construct.php "68.61. minimal_tryread_construct") struct.

**Parameters**

<dl class="variablelist">

<dt>mtc</dt>

<dd>

The address of the [Section 68.61, “minimal_tryread_construct”](structs.minimal_tryread_construct.php "68.61. minimal_tryread_construct") struct that you wish to free.

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is legal to call this function in any thread.

<a name="idp20600352"></a>
## See Also

[trywrite](apis.trywrite.php "trywrite"), [trywritef](apis.trywritef.php "trywritef"), and [tryread_until](apis.tryread_until.php "tryread_until")

| [Prev](apis.ec_growbuf_io_open.php)  | [Up](buffer.php) |  [Next](apis.tryread_until.php) |
| ec_growbuf_io_open  | [Table of Contents](index.php) |  tryread_until |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)