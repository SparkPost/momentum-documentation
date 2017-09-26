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

| ec_shutdown_ex |
| [Prev](apis.ec_is_shutting_down.php)  | Chapter 14. Control Functions |  [Next](apis.run_command.php) |

<a name="apis.ec_shutdown_ex"></a>
## Name

ec_is_shutting_down — Initiates a shutdown of the ecelerity process

## Synopsis

`#include "control.h"`

| `void **ec_shutdown_ex** (` | <var class="pdparam">die</var>, |   |
|   | <var class="pdparam">ret</var>, |   |
|   | <var class="pdparam">file</var>, |   |
|   | <var class="pdparam">lineno</var>`)`; |   |

`int <var class="pdparam">die</var>`;
`int <var class="pdparam">ret</var>`;
`const char * <var class="pdparam">file</var>`;
`int <var class="pdparam">lineno</var>`;<a name="idp21876048"></a>
## Description

Initiates a shutdown of the ecelerity process.

**Parameters**

<dl class="variablelist">

<dt>die</dt>

<dd>

Passing a non-zero integer value for `die` indicates that this function was invoked from a signal handler.

</dd>

<dt>ret</dt>

<dd>

The value that will be passed to the system `exit()` function.

</dd>

<dt>file</dt>

<dd>

The filename that invoked the call.

</dd>

<dt>lineno</dt>

<dd>

The line number of the file that invoked the call.

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

This function may only be called in the `Scheduler` thread.

<a name="idp21888992"></a>
## See Also

[ec_is_shutting_down](apis.ec_is_shutting_down.php "ec_is_shutting_down").

| [Prev](apis.ec_is_shutting_down.php)  | [Up](control.php) |  [Next](apis.run_command.php) |
| ec_is_shutting_down  | [Table of Contents](index.php) |  run_command |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)