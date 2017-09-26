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

| dict_unserialize |
| [Prev](apis.dict_serialize.php)  | Chapter 18. Dictionary Functions |  [Next](dkim.php) |

<a name="apis.dict_unserialize"></a>
## Name

dict_unserialize — Deserialize a dictionary

## Synopsis

`#include "ecdict.h"`

| `ECDict **dict_unserialize** (` | <var class="pdparam">str</var>`)`; |   |

`string * <var class="pdparam">str</var>`;<a name="idp22651232"></a>
## Description

Deserialize a dictionary. This function takes a string parameter and returns the deserialized dictionary. An ECDict is a typedef of an [ec_hash_table](structs.ec_hash_table.php "68.31. ec_hash_table").

**Parameters**

<dl class="variablelist">

<dt>str</dt>

<dd>

The [Section 68.85, “string”](structs.string.php "68.85. string").

</dd>

</dl>

**Return Value**

This function returns the deserialized dictionary.

**Threading**

It is legal to call this function in any thread.

<a name="idp22658576"></a>
## See Also

[dict_serialize](apis.dict_serialize.php "dict_serialize")

| [Prev](apis.dict_serialize.php)  | [Up](dict.php) |  [Next](dkim.php) |
| dict_serialize  | [Table of Contents](index.php) |  Chapter 19. DKIM/DK Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)