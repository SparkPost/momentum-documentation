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

| ec_control_send_command |
| [Prev](apis.ec_control_register_type.php)  | Chapter 14. Control Functions |  [Next](apis.ec_is_shutting_down.php) |

<a name="apis.ec_control_send_command"></a>
## Name

ec_control_send_command — Send a command over an ec_console control connection

## Synopsis

`#include "control.h"`

| `int **ec_control_send_command** (` | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">command</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">consumer</var>`)`; |   |

`int <var class="pdparam">fd</var>`;
`const char * <var class="pdparam">command</var>`;
`void * <var class="pdparam">closure</var>`;
`int(*)(void *closure, char *buf, int len) <var class="pdparam">consumer</var>`;<a name="idp21831904"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Send a command over an ec_console control connection.

**Parameters**

<dl class="variablelist">

<dt>fd</dt>

<dd>

a connection established via [cli_conn](apis.cli_conn.php "cli_conn")

</dd>

<dt>command</dt>

<dd>

the command string to run

</dd>

<dt>closure</dt>

<dd>

a closure to be passed to consumer

</dd>

<dt>consumer</dt>

<dd>

a callback function to handle the result

</dd>

</dl>

CONSUMER is a callback to handle the results; CLOSURE is passed as the first argument to it. CONSUMER is called with the following values of BUF and LEN in the following situations:

BUF = NULL; LEN = positive. This indicates the total length of the control response to come.

BUF = NULL; LEN = negative. -LEN is equal the an errno encountered while reading the response.

BUF != NULL; LEN = 0\. Indicates an EOF while reading the response.

BUF != LEN; LEN > 0\. Indicates that LEN bytes are available in BUF.

CONSUMER should return 1 to continue the operation, or 0 if it wants to stop the read.

**Return Values**

If an error occurs during the write, or during the read of the response header, CONSUMER is not called and [ec_control_send_command](apis.ec_control_send_command.php "ec_control_send_command") returns 0. Otherwise, [ec_control_send_command](apis.ec_control_send_command.php "ec_control_send_command") returns 1.

**See Also**

[send_command](apis.send_command.php "send_command"), [cli_conn](apis.cli_conn.php "cli_conn")

| [Prev](apis.ec_control_register_type.php)  | [Up](control.php) |  [Next](apis.ec_is_shutting_down.php) |
| ec_control_register_type  | [Table of Contents](index.php) |  ec_is_shutting_down |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)