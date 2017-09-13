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

| smtp_get_state |
| [Prev](apis.smtp_error_retrieve_class.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.smtp_get_state_machine.php) |

<a name="apis.smtp_get_state"></a>
## Name

smtp_get_state — Fetch a particular SMTP client state

## Synopsis

`#include "smtp.h"`

| `smtp_state * **smtp_get_state** (` | <var class="pdparam">state</var>`)`; |   |

`int <var class="pdparam">state</var>`;<a name="idp34545104"></a>
## Description

Fetchs a particular SMTP client state passing the state ID.

**Parameters**

<dl class="variablelist">

<dt>state</dt>

<dd>

The SMTP connection state ID.

</dd>

</dl>

**Return Values**

An smtp_state pointer to the requested SMTP state, NULL if the state was not found. For a description of this structure see [Section 68.83, “smtp_state”](structs.smtp_state.php "68.83. smtp_state").

**Threading**

It is only legal to call this function in the Scheduler thread.

<a name="idp34552224"></a>
## See Also

[Chapter 47, *SMTP-related Functions*](smtp.php "Chapter 47. SMTP-related Functions") 

| [Prev](apis.smtp_error_retrieve_class.php)  | [Up](smtp.php) |  [Next](apis.smtp_get_state_machine.php) |
| smtp_error_retrieve_class  | [Table of Contents](index.php) |  smtp_get_state_machine |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)