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

| event_read |
| [Prev](apis.event_post_dup.php)  | Chapter 24. Event Functions |  [Next](apis.float_event.php) |

<a name="apis.event_read"></a>
## Name

event_read — Read an event

## Synopsis

`#include "event.h"`

| `int **event_read** (` | <var class="pdparam">e</var>, |   |
|   | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">buflen</var>, |   |
|   | <var class="pdparam">needmask</var>`)`; |   |

`Event * <var class="pdparam">e</var>`;
`char * <var class="pdparam">buf</var>`;
`int <var class="pdparam">buflen</var>`;
`int * <var class="pdparam">needmask</var>`;<a name="idp24289168"></a>
## Description

Initiates a read that will populate `buf` and `buflen` with the data requested.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

See [Section 68.49, “Event”](structs.event.php "68.49. Event").

</dd>

<dt>buf</dt>

<dd>

The buffer for storage.

</dd>

<dt>buflen</dt>

<dd>

The length of `buf`.

</dd>

<dt>needmask</dt>

<dd>

The mask required for scheduling. It can be one of the following values:

```
#define E_READ         0x00000001
#define E_WRITE        0x00000002
#define E_EXCEPTION    0x00000004
#define E_TIMEOUT      0x00000008
#define E_ASYNC        0x00000010
```
</dd>

</dl>

**Return Value**

This function returns the number of characters read.

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp24304880"></a>
## See Also

[Chapter 24, *Event Functions*          ](event.php "Chapter 24. Event Functions") and [tryread_until](apis.tryread_until.php "tryread_until")

| [Prev](apis.event_post_dup.php)  | [Up](event.php) |  [Next](apis.float_event.php) |
| event_post_dup  | [Table of Contents](index.php) |  float_event |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)