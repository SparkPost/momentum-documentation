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

| esmtp_message_factory |
| [Prev](apis.esmtp_extensions_register.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.esmtp_message_factory_state.php) |

<a name="apis.esmtp_message_factory"></a>
## Name

esmtp_message_factory — This function is the ESMTP server state machine

## Synopsis

`#include "esmtp_factory.h"`

| `int **esmtp_message_factory** (` | <var class="pdparam">event</var>, |   |
|   | <var class="pdparam">eventtype</var>, |   |
|   | <var class="pdparam">vclosure</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`Event * <var class="pdparam">event</var>`;
`int <var class="pdparam">eventtype</var>`;
`void * <var class="pdparam">vclosure</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp34226384"></a>
## Description

This function is the ESMTP server state machine.

### Warning

This function should only be used under direct guidance from Message Systems professional services.

**Parameters**

<dl class="variablelist">

<dt>event</dt>

<dd>

The Event. For more information about this data type see [Event](structs.event.php "68.49. Event").

</dd>

<dt>eventtype</dt>

<dd>

Event types are defined in `event.h` as follows:

```
#define E_READ         0x00000001
#define E_WRITE        0x00000002
#define E_EXCEPTION    0x00000004
#define E_TIMEOUT      0x00000008
#define E_ASYNC        0x00000010
```

E_READ is defined to indicate that reading the descriptor will not block, E_WRITE to indicate that writing will not block and E_EXCEPTION to indicate certain error conditions. There are other possible mask values, but they are for internal use. `eventtype` can be set to one or more of these values bitwise OR'd together.

</dd>

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>now</dt>

<dd>

The current time.

</dd>

</dl>

**Return Values**

On error, this function returns `0`.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp34243456"></a>
## See Also

[Chapter 47, *SMTP-related Functions*          ](smtp.php "Chapter 47. SMTP-related Functions") and [Section 68.49, “Event”](structs.event.php "68.49. Event")

| [Prev](apis.esmtp_extensions_register.php)  | [Up](smtp.php) |  [Next](apis.esmtp_message_factory_state.php) |
| esmtp_extensions_register  | [Table of Contents](index.php) |  esmtp_message_factory_state |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)