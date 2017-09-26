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

| scpt_register_funcs |
| [Prev](apis.scpt_register_autoload.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_register_objtype.php) |

<a name="apis.scpt_register_funcs"></a>
## Name

scpt_register_funcs — registers a set of functions in a namespace

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `int **scpt_register_funcs** (` | <var class="pdparam">thr</var>, |   |
|   | <var class="pdparam">name_space</var>, |   |
|   | <var class="pdparam">funcs</var>`)`; |   |

`scpt_thread * <var class="pdparam">thr</var>`;
`const char * <var class="pdparam">name_space</var>`;
`struct scpt_obj_method * <var class="pdparam">funcs</var>`;<a name="idp31991632"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

registers a set of functions in a namespace.

The functions provided by Message Systems reside in the msys namespace. Customers and 3rd Party vendors should choose a convenient prefix that is unlikely to collide with functions provided by other modules.

The suggested convention is to use a short identifier for the company name, followed by the name of the module that provides them. For instance, if ACME provided a module called "spam", then "acme.spam" would be an appropriate namespace.

| [Prev](apis.scpt_register_autoload.php)  | [Up](script.php) |  [Next](apis.scpt_register_objtype.php) |
| scpt_register_autoload  | [Table of Contents](index.php) |  scpt_register_objtype |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)