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

| ec_datasource_next_column |
| [Prev](apis.ec_datasource_first_column.php)  | Chapter 16. Datasource Functions |  [Next](apis.ec_datasource_set_named_param_mode.php) |

<a name="apis.ec_datasource_next_column"></a>
## Name

ec_datasource_next_column — Move the cursor to the next column in the specified row

## Synopsis

`#include "modules/datasource/ecdatasource.h"`

| `(int) **ec_datasource_next_column** (` | <var class="pdparam">ent</var>, |   |
|   | <var class="pdparam">nrow</var>, |   |
|   | <var class="pdparam">iter</var>`)`; |   |

`const ecdata_cache_ent * <var class="pdparam">ent</var>`;
`int <var class="pdparam">nrow</var>`;
`ec_datasource_value_iter * <var class="pdparam">iter</var>`;<a name="idp22216112"></a>
## Description

Move the cursor to the next column in the specified row.

**Parameters**

<dl class="variablelist">

<dt>ent</dt>

<dd>

This parameter is a pointer to a const `ecdata_cache_ent` struct, a typedef for an `ec_datasource_query_cache_entry` struct.

</dd>

<dt>nrow</dt>

<dd>

The affected row.

</dd>

<dt>iter</dt>

<dd>

A pointer to an `ec_datasource_value_iter`. This iterator is a typedef of the [ec_datasource_value_iterator](structs.ec_datasource_value_iterator.php "68.28. ec_datasource_value_iterator") iterator.

</dd>

</dl>

**Return Values**

This function returns `1` on success and `0` on failure.

**Threading**

It is legal to call this function in any thread.

<a name="idp22229184"></a>
## See Also

[ec_datasource_first_column](apis.ec_datasource_first_column.php "ec_datasource_first_column")

| [Prev](apis.ec_datasource_first_column.php)  | [Up](datasource.php) |  [Next](apis.ec_datasource_set_named_param_mode.php) |
| ec_datasource_first_column  | [Table of Contents](index.php) |  ec_datasource_set_named_param_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)