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

| Chapter 18. Dictionary Functions |
| [Prev](apis.heartbeat_set_state.php)  | Part II. C API |  [Next](apis.dict_add_key_value.php) |

## Chapter 18. Dictionary Functions

**Table of Contents**

<dl class="toc">

<dt>[dict_add_key_value](apis.dict_add_key_value.php) — Add the specified key/value pair</dt>

<dt>[dict_blank](apis.dict_blank.php) — Create a new dictionary</dt>

<dt>[dict_drop](apis.dict_drop.php) — Remove the specified dictionary</dt>

<dt>[dict_iter](apis.dict_iter.php) — Create a dictionary iterator</dt>

<dt>[dict_iter2](apis.dict_iter2.php) — To create an iterator object</dt>

<dt>[dict_iter2_free](apis.dict_iter2_free.php) — Free the iterator object created by dict_iter2</dt>

<dt>[dict_key_delete](apis.dict_key_delete.php) — Remove the specified key</dt>

<dt>[dict_key_exists](apis.dict_key_exists.php) — Determine whether the specified key exists</dt>

<dt>[dict_key_exists_and_fetch](apis.dict_key_exists_and_fetch.php) — If the specified key exists, retrieve its value</dt>

<dt>[dict_next](apis.dict_next.php) — Fetch the next key/value pair</dt>

<dt>[dict_serialize](apis.dict_serialize.php) — Serialize a dictionary, for writing to disk or network</dt>

<dt>[dict_unserialize](apis.dict_unserialize.php) — Deserialize a dictionary</dt>

</dl>

An ECDict is an [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table").

| [Prev](apis.heartbeat_set_state.php)  | [Up](pt.apis.php) |  [Next](apis.dict_add_key_value.php) |
| heartbeat_set_state  | [Table of Contents](index.php) |  dict_add_key_value |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)