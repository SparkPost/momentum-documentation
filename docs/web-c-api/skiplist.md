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

| Chapter 45. Skiplist Functions |
| [Prev](apis.sieve_suspend.php)  | Part II. C API |  [Next](apis.sl_destruct.php) |

## Chapter 45. Skiplist Functions

**Table of Contents**

<dl class="toc">

<dt>[sl_destruct](apis.sl_destruct.php) — Destroy a Skiplist</dt>

<dt>[sl_find](apis.sl_find.php) — Find a specific node and return the node's data</dt>

<dt>[sl_getlist](apis.sl_getlist.php) — Get the first node in a Skiplist</dt>

<dt>[sl_init](apis.sl_init.php) — Initialize a Skiplist</dt>

<dt>[sl_insert](apis.sl_insert.php) — Insert data and return the resulting node</dt>

<dt>[sl_next](apis.sl_next.php) — Move iter forward a node and return the new node's data</dt>

<dt>[sl_previous](apis.sl_previous.php) — move iter backward a node, return new node's datum</dt>

<dt>[sl_removet](apis.sl_remove.php) — Remove a node by key</dt>

<dt>[sl_set_compare](apis.sl_setcompare.php) — Set the comparison functions</dt>

<dt>[sli_removet](apis.sli_remove.php) — Remove a node by key</dt>

</dl>

| [Prev](apis.sieve_suspend.php)  | [Up](pt.apis.php) |  [Next](apis.sl_destruct.php) |
| sieve_suspend  | [Table of Contents](index.php) |  sl_destruct |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)