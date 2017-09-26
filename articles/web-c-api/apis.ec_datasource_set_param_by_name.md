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

| ec_datasource_set_param_by_name |
| [Prev](apis.ec_datasource_set_named_param_mode.php)  | Chapter 16. Datasource Functions |  [Next](debug.php) |

<a name="apis.ec_datasource_set_param_by_name"></a>
## Name

ec_datasource_set_param_by_name — Initialize the value of a parameter using the name as a key

## Synopsis

`#include "modules/datasource/ecdatasource.h"`

| `(int) **ec_datasource_set_param_by_name** (` | <var class="pdparam">q</var>, |   |
|   | <var class="pdparam">key</var>, |   |
|   | <var class="pdparam">val</var>`)`; |   |

`ecdata_cache_query *<var class="pdparam">q</var>`;
`const char *<var class="pdparam">key</var>`;
`const ecdata_value *<var class="pdparam">val</var>`;<a name="idp22263920"></a>
## Description

Initialize the value of a parameter using the name as a key.

### Note

This function is for use with 'bind' variables; the details of how this works depends on the underlying driver being used.

**Parameters**

<dl class="variablelist">

<dt>q</dt>

<dd>

A pointer to an ecdata_cache_query. The following typedef applies to this data type: `typedef struct ec_datasource_cache_query ecdata_cache_query;`.

</dd>

<dt>key</dt>

<dd>

The name of the parameter that is being initialized.

</dd>

<dt>val</dt>

<dd>

The value of the parameter being initialized. For a description of this data type [ecdata_value](structs.ecdata_value.php "68.47. ecdata_value").

</dd>

</dl>

**Return Values**

On success this function returns

**Threading**

It is legal to call this function in any thread.

<a name="idp22276304"></a>
## See Also

[Section 68.25, “ec_datasource_cache_query”](structs.ec_datasource_cache_query.php "68.25. ec_datasource_cache_query")

| [Prev](apis.ec_datasource_set_named_param_mode.php)  | [Up](datasource.php) |  [Next](debug.php) |
| ec_datasource_set_named_param_mode  | [Table of Contents](index.php) |  Chapter 17. Debug Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)