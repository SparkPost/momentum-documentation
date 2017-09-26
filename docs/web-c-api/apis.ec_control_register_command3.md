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

| ec_control_register_command3 |
| [Prev](apis.ec_control_register_command2.php)  | Chapter 14. Control Functions |  [Next](apis.ec_control_register_command_allsched.php) |

<a name="apis.ec_control_register_command3"></a>
## Name

ec_control_register_command3 — Register a command handler with the system

## Synopsis

`#include "control.h"`

| `int **ec_control_register_command3** (` | <var class="pdparam">prefix</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">func</var>`)`; |   |

`const char * <var class="pdparam">prefix</var>`;
`ec_blobject * <var class="pdparam">closure</var>`;
`ec_control_function2 <var class="pdparam">func</var>`;<a name="idp21779232"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.2.

Register a command handler with the system.

The command handler is scoped to the generation of the configuration, meaning that the command will not be available if the module that registered it is removed from the configuration.

The control function that is dispatched by this function accepts a blobject as a closure, even though the prototype is defined as taking a void*. The blobject allows the command implementation to manage the lifetime of the closure.

This function may only be called from inside a configuration transaction, meaning that it should be called from within your module ext_init function.

**Parameters**

<dl class="variablelist">

<dt>prefix</dt>

<dd>

The command name.

</dd>

<dt>closure</dt>

<dd>

A void pointer to the closure. For a description of this data type see [Section 68.17, “ec_blobject”](structs.ec_blobject.php "68.17. ec_blobject").

</dd>

<dt>func</dt>

<dd>

A void pointer to the command action.

</dd>

</dl>

**Return Values**

On success this function returns `1`; on failure, `0`.

**Threading**

It is legal to call this function in any thread.

<a name="idp21794016"></a>
## See Also

See [ec_control_register_command2](apis.ec_control_register_command2.php "ec_control_register_command2").

| [Prev](apis.ec_control_register_command2.php)  | [Up](control.php) |  [Next](apis.ec_control_register_command_allsched.php) |
| ec_control_register_command2  | [Table of Contents](index.php) |  ec_control_register_command_allsched |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)