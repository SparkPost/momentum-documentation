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

| run_command2 |
| [Prev](apis.run_command.php)  | Chapter 14. Control Functions |  [Next](apis.send_command.php) |

<a name="apis.run_command2"></a>
## Name

run_command2 — Execute the console command referenced by a command_construct

## Synopsis

`#include "control.h"`

| `int **run_command2** (` | <var class="pdparam">cc</var>, |   |
|   | <var class="pdparam">response</var>, |   |
|   | <var class="pdparam">session</var>`)`; |   |

`command_construct * <var class="pdparam">cc</var>`;
`string * <var class="pdparam">response</var>`;
`Event * <var class="pdparam">session</var>`;<a name="idp21913088"></a>
## Description

Execute the console command referenced by a command_construct. For a list of the available commands see [Console Commands](https://support.messagesystems.com/docs/web-ref/console_commands.summary_table.php).

**Parameters**

<dl class="variablelist">

<dt>cc</dt>

<dd>

The command that you wish to execute. For a definition of this data type see [command_construct](structs.command_construct.php "68.8. command_construct").

</dd>

<dt>response</dt>

<dd>

The command response.

</dd>

<dt>session</dt>

<dd>

The session. For a description of this data type see [event](structs.event.php "68.49. Event").

</dd>

</dl>

**Return Values**

Upon success this command returns `EC_RUN_COMMAND_COMPLETED`; upon failure, `EC_RUN_COMMAND_FAILED`. If session is not NULL, and some portion of the command execution needs to run asynchronously, then this function will return `EC_RUN_COMMAND_AGAIN`.

The complete list of return values is as follows:

```
#define EC_RUN_COMMAND_COMPLETED 0
#define EC_RUN_COMMAND_AGAIN     1
#define EC_RUN_COMMAND_FAILED    2
#define EC_RUN_COMMAND_NOT_AUTHZ 3
#define EC_RUN_COMMAND_NOT_AUTHN 4
#define EC_RUN_COMMAND_CONTINUE  5
#define EC_RUN_COMMAND_ASYNC     6
```
**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp21928512"></a>
## See Also

[run_command](apis.run_command.php "run_command")

| [Prev](apis.run_command.php)  | [Up](control.php) |  [Next](apis.send_command.php) |
| run_command  | [Table of Contents](index.php) |  send_command |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)