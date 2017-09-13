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

| control_pre_command |
| [Prev](hooks.core.control_post_control.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.control_shutdown.php) |

<a name="hooks.core.control_pre_command"></a>
## Name

control_pre_command — This hook point occurs prior to the execution of a console command

## Synopsis

`#include "hooks/core/control_pre_command.h"`

| `int **core_control_pre_command** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">cc</var>, |   |
|   | <var class="pdparam">response</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`command_construct * <var class="pdparam">cc</var>`;
`string * <var class="pdparam">response</var>`;<a name="idp14334096"></a>
## Description

Given the command console parameter, hooks registered here can perform tasks prior to the built-in console commands, or even bypass the built-in commands completely. For a complete list of the console commands see [Console Commands](https://support.messagesystems.com/docs/web-ref/console_commands.summary_table.php).

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>cc</dt>

<dd>

For a description of this data type see [command_construct](structs.command_construct.php "68.8. command_construct").

</dd>

<dt>response</dt>

<dd>

This option provides output handed back to the console client. For a description of this data type see [string](structs.string.php "68.85. string"). This parameter is optional.

</dd>

</dl>

**Return Values**

Return `1` to skip the default command behavior; any additional pre_command hooks will also be skipped. Return `0` to allow the default command behavior (and any other pre_command hooks) to continue.

**Threading**

This hook will be called in the `Scheduler` thread.

<a name="idp14348048"></a>
## See Also

[control_shutdown_ex](hooks.core.control_shutdown_ex.php "control_shutdown_ex")

| [Prev](hooks.core.control_post_control.php)  | [Up](hooks.core.php) |  [Next](hooks.core.control_shutdown.php) |
| control_post_control  | [Table of Contents](index.php) |  control_shutdown |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)