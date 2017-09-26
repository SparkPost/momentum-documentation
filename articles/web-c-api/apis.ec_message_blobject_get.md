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

| ec_message_blobject_get |
| [Prev](apis.ec_blobject_wrap.php)  | Chapter 7. Blobject Functions |  [Next](apis.ec_message_blobject_remove.php) |

<a name="apis.ec_message_blobject_get"></a>
## Name

ec_message_blobject_get — Retrieve a blobject tag

## Synopsis

`#include "ec_message.h"`

| `ec_blobject * **ec_message_blobject_get** (` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">key</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`const char * <var class="pdparam">key</var>`;<a name="idp20335872"></a>
## Description

Retrieve a blobject tag using the key. If the object is found, it adds a reference to it and returns the ec_blobject address to the caller. The caller is responsible for delrefing it when done.

**Parameters**

<dl class="variablelist">

<dt>msg</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

<dt>key</dt>

<dd>

Identifies the blobject to retrieve.

</dd>

</dl>

**Return Values**

A pointer to an ec_blobject struct. For documentation of this data structure see [Section 68.17, “ec_blobject”](structs.ec_blobject.php "68.17. ec_blobject") Returns the address of the blobject if found, or NULL otherwise. If an object is returned, you own a reference to it and must delete the reference when you are finished using it.

**Threading**

It is legal to call this function in any thread.

<a name="idp20345280"></a>
## See Also

[ec_message_blobject_store](apis.ec_message_blobject_store.php "ec_message_blobject_store") and [ec_message_blobject_remove](apis.ec_message_blobject_remove.php "ec_message_blobject_remove").

| [Prev](apis.ec_blobject_wrap.php)  | [Up](blobject.php) |  [Next](apis.ec_message_blobject_remove.php) |
| ec_blobject_wrap  | [Table of Contents](index.php) |  ec_message_blobject_remove |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)