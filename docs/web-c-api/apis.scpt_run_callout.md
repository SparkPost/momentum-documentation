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

| scpt_run_callout |
| [Prev](apis.scpt_register_objtype_augmentation.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_set_output_string.php) |

<a name="apis.scpt_run_callout"></a>
## Name

scpt_run_callout — Execute or resume execution of a scriptlet callout

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `int **scpt_run_callout** (` | <var class="pdparam">thr</var>, |   |
|   | <var class="pdparam">resuming</var>, |   |
|   | <var class="pdparam">selfref</var>, |   |
|   | <var class="pdparam">co</var>, |   |
|   | <var class="pdparam">nargs</var>, |   |
|   | <var class="pdparam">args</var>`)`; |   |

`scpt_thread * <var class="pdparam">thr</var>`;
`int <var class="pdparam">resuming</var>`;
`void * <var class="pdparam">selfref</var>`;
`scpt_callout * <var class="pdparam">co</var>`;
`int <var class="pdparam">nargs</var>`;
`void ** <var class="pdparam">args</var>`;<a name="idp32035696"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Execute or resume execution of a scriptlet callout.

selfref is a reference to a scriplet table which implements the callout method.

nargs indicates the number of args references by the args array, which must correspond to the parameters defined by the callout. The convention is to pass the pointer types in directly, but take the address of non-pointer parameters.

Returns one of SCPT_OK, SCPT_YIELD or SCPT_ERR.

| [Prev](apis.scpt_register_objtype_augmentation.php)  | [Up](script.php) |  [Next](apis.scpt_set_output_string.php) |
| scpt_register_objtype_augmentation  | [Table of Contents](index.php) |  scpt_set_output_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)