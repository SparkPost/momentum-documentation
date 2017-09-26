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

| control_shutdown_ex |
| [Prev](hooks.core.control_shutdown.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.dec_inbound_connections.php) |

<a name="hooks.core.control_shutdown_ex"></a>
## Name

control_shutdown_ex — Invoked when shutdown occurs

## Synopsis

`#include "hooks/core/control_shutdown_ex.h"`

| `void **core_control_shutdown_ex** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">die</var>, |   |
|   | <var class="pdparam">ret</var>, |   |
|   | <var class="pdparam">file</var>, |   |
|   | <var class="pdparam">lineno</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`int <var class="pdparam">die</var>`;
`int <var class="pdparam">ret</var>`;
`const char * <var class="pdparam">file</var>`;
`int <var class="pdparam">lineno</var>`;<a name="idp11853168"></a>
## Description

This hook is invoked when an instance shutdown occurs. This typically occurs when a [shutdown](https://support.messagesystems.com/docs/web-ref/console_commands.shutdown.php) command is issued over ec_console. However, this may also be called in the event of an unexpected crash.

The parameters provide information on why the instance is being shut down. If *`die`* is non-zero then it contains the signal that triggered the shut down. The *`ret`* contains the command status that will be returned to the operating system. *`file`* and *`lineno`* contain the call site that triggered the shut down.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

The closure.

</dd>

<dt>die</dt>

<dd>

When this parameter is non-zero then it contains the signal that triggered the shut down.

</dd>

<dt>ret</dt>

<dd>

The command status that will be returned to the operating system.

</dd>

<dt>lineno</dt>

<dd>

The call site that triggered the shut down.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

This hook will be called in the `Scheduler` thread.

<a name="idp19105440"></a>
## See Also

[control_pre_command](hooks.core.control_pre_command.php "control_pre_command")

| [Prev](hooks.core.control_shutdown.php)  | [Up](hooks.core.php) |  [Next](hooks.core.dec_inbound_connections.php) |
| control_shutdown  | [Table of Contents](index.php) |  dec_inbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)