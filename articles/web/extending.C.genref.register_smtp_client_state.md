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
| [Prev](extending.C.genref.msc_thread_id.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.run_command.php) |

<a name="extending.C.genref.register_smtp_client_state"></a>
## Name

register_smtp_client_state — Register a custom state in the SMTP client state machine.

## Synopsis

`#include "/dns_ds.h"`

| `int **register_smtp_client_state**(` | <var class="pdparam">state</var>, |   |
|   | <var class="pdparam">insert_after</var>`)`; |   |

`smtp_state * <var class="pdparam">state</var>`;
`int <var class="pdparam">insert_after</var>`;<a name="idp20245728"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Register a custom state in the SMTP client state machine.

The SMTP client state machine is modular, such that external modules may register their own states to be called after a particular built-in or custom state.

**Parameters**

<dl class="variablelist">

<dt>state</dt>

<dd>

the smtp_state pointer to register. All values, except for smtp_state.closure are copied out and may be freed after registration.

</dd>

<dt>insert_after</dt>

<dd>

the state ID to insert state after. To place state at the front of the state machine, use a value of -1

</dd>

</dl>

**Return Values**

Returns the new SMTP state ID, -1 if a failure occurred.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

| [Prev](extending.C.genref.msc_thread_id.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.run_command.php) |
| msc_thread_id  | [Table of Contents](index.php) |  run_command |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)