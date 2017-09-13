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

| ec_module_manifest_iter_next |
| [Prev](apis.ec_module_manifest_iter_init.php)  | Chapter 37. Module-related Functions |  [Next](apis.ec_module_manifest_refresh.php) |

<a name="apis.ec_module_manifest_iter_next"></a>
## Name

ec_module_manifest_iter_next — advances a module manifest iterator

## Synopsis

`#include "module.h"`

| `int **ec_module_manifest_iter_next** (` | <var class="pdparam">iter</var>, |   |
|   | <var class="pdparam">modulename</var>`)`; |   |

`ec_module_manifest_iter_t * <var class="pdparam">iter</var>`;
`const char ** <var class="pdparam">modulename</var>`;<a name="idp30421552"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

advances a module manifest iterator

Sets modulename to the name of the next module that has manifest information and then advances the iterator.

**Parameters**

<dl class="variablelist">

<dt>iter</dt>

<dd>

the manifest iterator

</dd>

<dt>modulename</dt>

<dd>

the returned module name

</dd>

</dl>

**Return Values**

1 if modulename was updated, 0 if there are no more module manifests to be considered.

| [Prev](apis.ec_module_manifest_iter_init.php)  | [Up](module.php) |  [Next](apis.ec_module_manifest_refresh.php) |
| ec_module_manifest_iter_init  | [Table of Contents](index.php) |  ec_module_manifest_refresh |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)