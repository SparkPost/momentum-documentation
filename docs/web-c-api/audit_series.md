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

| Chapter 4. Audit Series Functions |
| [Prev](apis.cloudmark_score_ip.php)  | Part II. C API |  [Next](apis.audit_series_add.php) |

## Chapter 4. Audit Series Functions

**Table of Contents**

<dl class="toc">

<dt>[audit_series_add](apis.audit_series_add.php) — Add a value to the counter associated with a key in a named series</dt>

<dt>[audit_series_count](apis.audit_series_count.php) — Get the accumulated counts from a named series for a given key</dt>

<dt>[audit_series_define](apis.audit_series_define.php) — Define an named audit series</dt>

<dt>[audit_series_get_items](apis.audit_series_get_items.php) — Return the item of the named series</dt>

<dt>[audit_series_get_type](apis.audit_series_get_type.php) — Return the type of the named series</dt>

<dt>[audit_series_item_delref](apis.audit_series_item_delref.php) — Function to release the key list returned from audit_series_get_items() [in] head - the head of linked list of items</dt>

<dt>[audit_series_remove_item](apis.audit_series_remove_item.php) — Remove the item identified by key in a named series</dt>

</dl>

The APIs documented here relate to the [inbound_audit](https://support.messagesystems.com/docs/web-ref/modules.inbound_audit.php) module.

| [Prev](apis.cloudmark_score_ip.php)  | [Up](pt.apis.php) |  [Next](apis.audit_series_add.php) |
| cloudmark_score_ip  | [Table of Contents](index.php) |  audit_series_add |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)