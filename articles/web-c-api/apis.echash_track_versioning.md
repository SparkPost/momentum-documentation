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

| echash_track_versioning |
| [Prev](apis.echash_store.php)  | Chapter 23. echash Functions |  [Next](event.php) |

<a name="apis.echash_track_versioning"></a>
## Name

echash_track_versioning — Enable versioning on a hash table

## Synopsis

`#include "echash.h"`

| `void **echash_track_versioning** (` | <var class="pdparam">h</var>`)`; |   |

`ec_hash_table * <var class="pdparam">h</var>`;<a name="idp23938048"></a>
## Description

Enable versioning on a hash table. When versioning is enabled, each change to the content of the hash will cause the version field of the hash table to change. For a description of this data structure see [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table").

The version field is a nearly unique counter that will allow you cheaply determine if a hash table has changed its contents since you last looked at it and recorded its version number.

Since the version counter is a global variable, it is guaranteed that no two hash tables can have the same version number, provided that they are both relatively short lived—it is possible to roll the counter but this should take a very long time to occur.

**Parameters**

<dl class="variablelist">

<dt>h</dt>

<dd>

The [ec_hash_table](structs.ec_hash_table.php "68.31. ec_hash_table").

</dd>

</dl>

**Return Value**

This function returns void.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.echash_store.php)  | [Up](echash.php) |  [Next](event.php) |
| echash_store  | [Table of Contents](index.php) |  Chapter 24. Event Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)