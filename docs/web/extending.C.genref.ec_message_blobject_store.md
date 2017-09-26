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

| ec_message_blobject_store |
| [Prev](extending.C.genref.ec_message_blobject_remove.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.ec_message_builder.php) |

<a name="extending.C.genref.ec_message_blobject_store"></a>
## Name

ec_message_blobject_store — tag a message with a blobject

## Synopsis

`#include "/ec_message.h"`

| `void **ec_message_blobject_store**(` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">obj</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`const char * <var class="pdparam">key</var>`;
`ec_blobject * <var class="pdparam">obj</var>`;<a name="idp18915792"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

tag a message with a blobject

The blobject reference will be held in memory for the entire lifetime of the message, but will not survive a restart of the server.

This facility allows referencing arbitrary context alongside the message, but should be used sparingly to avoid excessive memory usage; there is no way to discard the objects and reinstate them if we decide to trim back resource usage for a given message.

**Parameters**

<dl class="variablelist">

<dt>msg</dt>

<dd>

the message to tag

</dd>

<dt>key</dt>

<dd>

identifies the item

</dd>

<dt>obj</dt>

<dd>

the object to store

</dd>

</dl>

The message will take a reference on the object while it is stored in the hash. If an object is already present with the same key, its reference will be deleted and the new object will replace it.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

| [Prev](extending.C.genref.ec_message_blobject_remove.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.ec_message_builder.php) |
| ec_message_blobject_remove  | [Table of Contents](index.php) |  ec_message_builder |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)