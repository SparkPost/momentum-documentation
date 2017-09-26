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

| ec_fc_store_expire |
| [Prev](apis.ec_fc_store.php)  | Chapter 25. Fast Cache Functions |  [Next](file.php) |

<a name="apis.ec_fc_store_expire"></a>
## Name

ec_fc_store_expire — Store entry in the cache with the provided key, key length and expiration time

## Synopsis

`#include "ec_fc.h"`

| `int **ec_fc_store_expire** (` | <var class="pdparam">cache</var>, |   |
|   | <var class="pdparam">entry</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">key_length</var>, |   |
|   | <var class="pdparam">expire</var>`)`; |   |

`ec_fc_t * <var class="pdparam">cache</var>`;
`ec_fc_entry_t * <var class="pdparam">entry</var>`;
`const void * <var class="pdparam">key</var>`;
`size_t <var class="pdparam">key_length</var>`;
`unsigned int <var class="pdparam">expire</var>`;<a name="idp24887360"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Store entry in the cache with the provided key, key length and expiration time.

**Parameters**

<dl class="variablelist">

<dt>cache</dt>

<dd>

cache to operate on

</dd>

<dt>entry</dt>

<dd>

entry to store in cache

</dd>

<dt>key</dt>

<dd>

key to associate with entry when stored in cache

</dd>

<dt>key_length</dt>

<dd>

length of key in bytes

</dd>

<dt>expire</dt>

<dd>

expiration time of entry in seconds

</dd>

</dl>

| [Prev](apis.ec_fc_store.php)  | [Up](fastcache.php) |  [Next](file.php) |
| ec_fc_store  | [Table of Contents](index.php) |  Chapter 26. File-related Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)