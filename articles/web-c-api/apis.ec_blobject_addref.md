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

| ec_blobject_addref |
| [Prev](blobject.php)  | Chapter 7. Blobject Functions |  [Next](apis.ec_blobject_delref.php) |

<a name="apis.ec_blobject_addref"></a>
## Name

ec_blobject_addref — Increments the reference count of `obj` by `1`

## Synopsis

`#include "ec_blobject.h"`

| `void **ec_blobject_addref** (` | <var class="pdparam">obj</var>`)`; |   |

`ec_blobject * <var class="pdparam">obj</var>`;<a name="idp20247728"></a>
## Description

Increments the reference count of `obj` by `1`.

**Parameters**

<dl class="variablelist">

<dt>obj</dt>

<dd>

A pointer to an [Section 68.17, “ec_blobject”](structs.ec_blobject.php "68.17. ec_blobject").

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is legal to call this function in any thread.

<a name="idp20255888"></a>
## See Also

[Section 68.17, “ec_blobject”](structs.ec_blobject.php "68.17. ec_blobject"), [ec_blobject_delref_typeunsafe](apis.ec_blobject_delref_typeunsafe.php "ec_blobject_delref_typeunsafe"), [ec_blobject_delref](apis.ec_blobject_delref.php "ec_blobject_delref"), and [ec_blobject_wrap](apis.ec_blobject_wrap.php "ec_blobject_wrap").

| [Prev](blobject.php)  | [Up](blobject.php) |  [Next](apis.ec_blobject_delref.php) |
| Chapter 7. Blobject Functions  | [Table of Contents](index.php) |  ec_blobject_delref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)