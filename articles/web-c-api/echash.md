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

| Chapter 23. echash Functions |
| [Prev](apis.ec_double_list_unshift.php)  | Part II. C API |  [Next](apis.echash_create.php) |

## Chapter 23. echash Functions

**Table of Contents**

<dl class="toc">

<dt>[echash_create](apis.echash_create.php) — Create a hash table</dt>

<dt>[echash_delete](apis.echash_delete.php) — This function removes an item from the hash table and calls the specified keyfree and datafree functions</dt>

<dt>[echash_delete_all](apis.echash_delete_all.php) — This function removes all entries from a hash table and calls the specified keyfree and datafree functions</dt>

<dt>[echash_delete_item](apis.echash_delete_item.php) — Remove the specified item from the hash table</dt>

<dt>[echash_delref](apis.echash_delref.php) — Delete a reference to a hash table</dt>

<dt>[echash_destroy](apis.echash_destroy.php) — Destroy a hash table created using echash_create</dt>

<dt>[echash_init](apis.echash_init.php) — Initialize a hash table</dt>

<dt>[echash_next](apis.echash_next.php) — Move to the next item in the hash table</dt>

<dt>[echash_replace](apis.echash_replace.php) — Replace the data associated with the specified key</dt>

<dt>[echash_retrieve](apis.echash_retrieve.php) — Retrieve the data associated with the specified key</dt>

<dt>[echash_store](apis.echash_store.php) — Add data associated with the specified key</dt>

<dt>[echash_track_versioning](apis.echash_track_versioning.php) — Enable versioning on a hash table</dt>

</dl>

For a discussion of the `ec_hash_table struct` see [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table").

| [Prev](apis.ec_double_list_unshift.php)  | [Up](pt.apis.php) |  [Next](apis.echash_create.php) |
| ec_double_list_unshift  | [Table of Contents](index.php) |  echash_create |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)