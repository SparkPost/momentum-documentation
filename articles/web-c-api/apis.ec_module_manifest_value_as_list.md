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

| ec_module_manifest_value_as_list |
| [Prev](apis.ec_module_manifest_value_as_dict.php)  | Chapter 37. Module-related Functions |  [Next](apis.ec_module_manifest_value_as_string.php) |

<a name="apis.ec_module_manifest_value_as_list"></a>
## Name

ec_module_manifest_value_as_list — retrieves a list of manifest values for a named module

## Synopsis

`#include "module.h"`

| `int **ec_module_manifest_value_as_list** (` | <var class="pdparam">iter</var>, |   |
|   | <var class="pdparam">modulename</var>, |   |
|   | <var class="pdparam">keyname</var>, |   |
|   | <var class="pdparam">list</var>`)`; |   |

`ec_module_manifest_iter_t * <var class="pdparam">iter</var>`;
`const char * <var class="pdparam">modulename</var>`;
`const char * <var class="pdparam">keyname</var>`;
`ec_ptr_array ** <var class="pdparam">list</var>`;<a name="idp30477440"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

retrieves a list of manifest values for a named module

If keyname is defined by the manifest for modulename, treat its value as a comma and/or space separated list of values.

Sets list to a pointer array containing the list values. The caller is responsible for ec_ptr_array_destroy()ing and free()ing the list if it is returned.

**Parameters**

<dl class="variablelist">

<dt>iter</dt>

<dd>

the iterator

</dd>

<dt>modulename</dt>

<dd>

the name of the module

</dd>

<dt>keyname</dt>

<dd>

the name of the item to be retrieved

</dd>

<dt>list</dt>

<dd>

the pointer array holding the data

</dd>

</dl>

**Return Values**

1 if defined, 0 otherwise.

| [Prev](apis.ec_module_manifest_value_as_dict.php)  | [Up](module.php) |  [Next](apis.ec_module_manifest_value_as_string.php) |
| ec_module_manifest_value_as_dict  | [Table of Contents](index.php) |  ec_module_manifest_value_as_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)