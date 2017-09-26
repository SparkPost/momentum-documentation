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

| Chapter 16. Datasource Functions |
| [Prev](apis.ec_atoui.php)  | Part II. C API |  [Next](apis.ec_datasource_cache_delref.php) |

## Chapter 16. Datasource Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_datasource_cache_delref](apis.ec_datasource_cache_delref.php) — Delete a reference to a datasource cache entry</dt>

<dt>[ec_datasource_cache_query](apis.ec_datasource_cache_query.php) — Execute a query against a datasource cache</dt>

<dt>[ec_datasource_destroy_query](apis.ec_datasource_destroy_query.php) — Release the resources used by the specified query</dt>

<dt>[ec_datasource_first_column](apis.ec_datasource_first_column.php) — Move the cursor to the first column of the specified row</dt>

<dt>[ec_datasource_next_column](apis.ec_datasource_next_column.php) — Move the cursor to the next column in the specified row</dt>

<dt>[ec_datasource_set_named_param_mode](apis.ec_datasource_set_named_param_mode.php) — Initialize a query to use named parameters</dt>

<dt>[ec_datasource_set_param_by_name](apis.ec_datasource_set_param_by_name.php) — Initialize the value of a parameter using the name as a key</dt>

</dl>

The APIs documented here relate to the [ds_core](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php) module.

| [Prev](apis.ec_atoui.php)  | [Up](pt.apis.php) |  [Next](apis.ec_datasource_cache_delref.php) |
| ec_atoui  | [Table of Contents](index.php) |  ec_datasource_cache_delref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)