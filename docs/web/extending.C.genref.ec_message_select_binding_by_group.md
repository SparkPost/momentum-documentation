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

| ec_message_select_binding_by_group |
| [Prev](extending.C.genref.ec_message_render_to_string.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.ec_message_set__object.php) |

<a name="extending.C.genref.ec_message_select_binding_by_group"></a>
## Name

ec_message_select_binding_by_group — Select a binding from a binding group.

## Synopsis

`#include "/binding.h"`

| `ec_binding_slot **ec_message_select_binding_by_group**(` | <var class="pdparam">msg</var>, |   |
|   | <var class="pdparam">group</var>`)`; |   |

`ec_message * <var class="pdparam">msg</var>`;
`const char * <var class="pdparam">group</var>`;<a name="idp19740336"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Select a binding from a binding group.

This function will randomly select one of the bindings in a group. If that binding is not local to the machine, or otherwise unplumbed, another binding will be chosen.

If no suitable binding is found, the default binding will be chosen.

Note that this function does not actually assign the message to the binding; it merely returns the binding that should be used.

**Parameters**

<dl class="variablelist">

<dt>msg</dt>

<dd>

the message to bind

</dd>

<dt>group</dt>

<dd>

the name of the binding group

</dd>

</dl>

**Return Values**

Returns the binding that was selected.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

| [Prev](extending.C.genref.ec_message_render_to_string.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.ec_message_set__object.php) |
| ec_message_render_to_string  | [Table of Contents](index.php) |  ec_message_set__object |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)