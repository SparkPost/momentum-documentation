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

| register_smtp_client_state |
| [Prev](apis.read_smtp2.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.smtp_client_args_add.php) |

<a name="apis.register_smtp_client_state"></a>
## Name

register_smtp_client_state — Register a custom state in the SMTP client state machine

## Synopsis

`#include "dns_ds.h"`

| `int **register_smtp_client_state** (` | <var class="pdparam">state</var>, |   |
|   | <var class="pdparam">insert_after</var>`)`; |   |

`smtp_state * <var class="pdparam">state</var>`;
`int <var class="pdparam">insert_after</var>`;<a name="idp34332944"></a>
## Description

Register a custom state in the SMTP client state machine.

The SMTP client state machine is modular: external modules may register their own states to be called after a particular built-in or custom state.

**Parameters**

<dl class="variablelist">

<dt>state</dt>

<dd>

The SMTP client state to register. All values of this structure (except for `smtp_state.closure`) are copied to a static variable so memory for `state` may be released after registering it. For more information on this data structure see [Section 68.83, “smtp_state”](structs.smtp_state.php "68.83. smtp_state").

</dd>

<dt>insert_after</dt>

<dd>

The state ID to insert the client state after. Passing a value of `-1` places the SMTP state at the beginning, prior to the *banner* state.

</dd>

</dl>

**Return Values**

Returns an SMTP state ID computed by this function or -1 in the case of a failure.

**Threading**

It is *only* legal to call this function in the `Scheduler` thread.

<a name="idp34344992"></a>
## See Also

[ec_smtp_closeconn](apis.ec_smtp_closeconn.php "ec_smtp_closeconn"), and [smtp_next_state](apis.smtp_next_state.php "smtp_next_state").

| [Prev](apis.read_smtp2.php)  | [Up](smtp.php) |  [Next](apis.smtp_client_args_add.php) |
| read_smtp2  | [Table of Contents](index.php) |  smtp_client_args_add |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)