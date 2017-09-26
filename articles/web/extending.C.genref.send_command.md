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

| send_command |
| [Prev](extending.C.genref.run_command2.php)  | Chapter 17. C API Reference |  [Next](extending.hooks.core.php) |

<a name="extending.C.genref.send_command"></a>
## Name

send_command — Send a command over an ec_console control connection.

## Synopsis

`#include "/control.h"`

| `char * **send_command**(` | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">input</var>, |   |
|   | <var class="pdparam">max_len</var>`)`; |   |

`int <var class="pdparam">fd</var>`;
`char * <var class="pdparam">input</var>`;
`int <var class="pdparam">max_len</var>`;<a name="idp20290256"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Send a command over an ec_console control connection.

**Parameters**

<dl class="variablelist">

<dt>fd</dt>

<dd>

a connection established via [cli_conn](extending.C.genref.cli_conn.php "cli_conn")

</dd>

<dt>input</dt>

<dd>

a command string allocated via malloc(3C)

</dd>

<dt>max_len</dt>

<dd>

a hint as to the maximal size of a response.

</dd>

</dl>

input MUST be a pointer allocated via malloc(3C); send_command will free(3C) that pointer.

**Deprecated**

use [ec_control_send_command](extending.C.genref.ec_control_send_command.php "ec_control_send_command") instead.

**See Also**

[ec_control_send_command](extending.C.genref.ec_control_send_command.php "ec_control_send_command")

| [Prev](extending.C.genref.run_command2.php)  | [Up](extending.C.ref.php) |  [Next](extending.hooks.core.php) |
| run_command2  | [Table of Contents](index.php) |  Chapter 18. Hooks in the core scope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)