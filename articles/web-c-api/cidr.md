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

| Chapter 10. CIDR Functions |
| [Prev](apis.trywritef.php)  | Part II. C API |  [Next](apis.cidr_ipv4_count2.php) |

## Chapter 10. CIDR Functions

**Table of Contents**

<dl class="toc">

<dt>[cidr_ipv4_count2](apis.cidr_ipv4_count2.php) — Similar to cidr_ipv4_count but takes ec_sockaddr/mask or string representation cidr</dt>

<dt>[cidr_ipv4_delete](apis.cidr_ipv4_delete.php) — Decrements the count for an IP address from a CIDR tree</dt>

<dt>[cidr_ipv6_count2](apis.cidr_ipv6_count2.php) — Similar to cidr_ipv4_count but takes ec_sockaddr/mask or string representation cidr</dt>

<dt>[cidr_query](apis.cidr_query.php) — Obtain data associated with a CIDR block</dt>

<dt>[cidrrange_ipv4_free](apis.cidrrange_ipv4_free.php) — Free a cidrrange_ipv4 object</dt>

<dt>[cidrrange_ipv4_merge](apis.cidrrange_ipv4_merge.php) — Inserts a node, merging adjacent nodes with the same value</dt>

<dt>[cidrrange_ipv4_new](apis.cidrrange_ipv4_new.php) — Create a new ipv4 cidrrange</dt>

<dt>[cidrrange_ipv4_query](apis.cidrrange_ipv4_query.php) — Query the orientation stored for an IP</dt>

<dt>[cidrrange_ipv4_update](apis.cidrrange_ipv4_update.php) — Inserts a node</dt>

<dt>[cidrrange_val_ipv4_dump](apis.cidrrange_val_ipv4_dump.php) — Render the cidrrange_val_ipv4 to a string</dt>

<dt>[cidrrange_val_ipv4_free](apis.cidrrange_val_ipv4_free.php) — Free the resources allocated for a list of CIDR blocks</dt>

<dt>[cidrrange_val_ipv4_merge](apis.cidrrange_val_ipv4_merge.php) — Inserts a node, merging adjacent nodes with the same value</dt>

<dt>[cidrrange_val_ipv4_new](apis.cidrrange_val_ipv4_new.php) — Create a new list of IPv4 CIDR blocks</dt>

<dt>[cidrrange_val_ipv4_query](apis.cidrrange_val_ipv4_query.php) — Retrieves the value associated with an IP address in a list of CIDR blocks</dt>

<dt>[cidrrange_val_ipv4_update](apis.cidrrange_val_ipv4_update.php) — Updates the value for an IP address in a list of CIDR blocks</dt>

</dl>

The APIs documented here relate to the [cidrdb](https://support.messagesystems.com/docs/web-ref/modules.cidrdb.php) module.

| [Prev](apis.trywritef.php)  | [Up](pt.apis.php) |  [Next](apis.cidr_ipv4_count2.php) |
| trywritef  | [Table of Contents](index.php) |  cidr_ipv4_count2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)