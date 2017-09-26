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

| Chapter 7. Blobject Functions |
| [Prev](apis.ec_qp_encode_to_string.php)  | Part II. C API |  [Next](apis.ec_blobject_addref.php) |

## Chapter 7. Blobject Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_blobject_addref](apis.ec_blobject_addref.php) — Increments the reference count of `obj` by `1`</dt>

<dt>[ec_blobject_delref](apis.ec_blobject_delref.php) — Decrements the reference count of `obj` by `1` and releases the memory allocated to it if the reference count is decremented to `0`</dt>

<dt>[ec_blobject_delref_typeunsafe](apis.ec_blobject_delref_typeunsafe.php) — Decrements the reference count of `blobject` by `1` and releases the memory allocated to it if the reference count is decremented to `0`</dt>

<dt>[ec_blobject_wrap](apis.ec_blobject_wrap.php) — Allocates memory for an ec_blobject and initializes it</dt>

<dt>[ec_message_blobject_get](apis.ec_message_blobject_get.php) — Retrieve a blobject tag</dt>

<dt>[ec_message_blobject_remove](apis.ec_message_blobject_remove.php) — Remove a blobject tag</dt>

<dt>[ec_message_blobject_store](apis.ec_message_blobject_store.php) — Tag a message with a blobject</dt>

</dl>

| [Prev](apis.ec_qp_encode_to_string.php)  | [Up](pt.apis.php) |  [Next](apis.ec_blobject_addref.php) |
| ec_qp_encode_to_string  | [Table of Contents](index.php) |  ec_blobject_addref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)