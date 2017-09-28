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

| scpt_get_bag |
| [Prev](apis.scpt_ffi_closure_alloc.php)  | Chapter 42. Scriptlet (and Alerting) Functions |  [Next](apis.scpt_get_traceback.php) |

<a name="apis.scpt_get_bag"></a>
## Name

scpt_get_bag — Returns the environmental "bag" associated with the current callout

## Synopsis

`#include "modules/scriptlets/ec_scriptlet.h"`

| `ec_bag * **scpt_get_bag** (` | <var class="pdparam">thr</var>`)`; |   |

`scpt_thread * <var class="pdparam">thr</var>`;<a name="idp31627840"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.1.

This function returns the environmental "bag" associated with the current callout.

This function is intended to be called in the context of "thr" while it is executing. It does not add a reference to the bag.

**Parameters**

<dl class="variablelist">

<dt>thr</dt>

<dd>

The script thread. For a description of this data type see [Section 68.72, “scpt_thread”](structs.scpt_thread.php "68.72. scpt_thread").

</dd>

</dl>

**Return Value**

This function returns an ec_bag. For a description of this data type see [Section 68.16, “ec_bag”](structs.ec_bag.php "68.16. ec_bag").

**Threading**

It is legal to call this function in any thread.

<a name="idp31637728"></a>
## See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*](script.php "Chapter 42. Scriptlet (and Alerting) Functions") 

| [Prev](apis.scpt_ffi_closure_alloc.php)  | [Up](script.php) |  [Next](apis.scpt_get_traceback.php) |
| scpt_ffi_closure_alloc  | [Table of Contents](index.php) |  scpt_get_traceback |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)