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

| event_io_write_string |
| [Prev](apis.event_io_write.php)  | Chapter 24. Event Functions |  [Next](apis.event_post_dup.php) |

<a name="apis.event_io_write_string"></a>
## Name

event_io_write_string — Initiate a write of the contents of a string to an event

## Synopsis

`#include "event.h"`

| `int **event_io_write_string** (` | <var class="pdparam">e</var>, |   |
|   | <var class="pdparam">str</var>, |   |
|   | <var class="pdparam">state</var>`)`; |   |

`Event * <var class="pdparam">e</var>`;
`string * <var class="pdparam">str</var>`;
`event_io_state * <var class="pdparam">state</var>`;<a name="idp24232880"></a>
## Description

Initiate a write of the contents of a string to an event.

Writes a string buffer to an event. If the string is disk-backed, this routine will advance to the next chunk when the in-memory portion is exhausted, until the entire string has been sent.

If the write cannot be satisfied immediately, this function stores state information into the state parameter and returns `EVENT_IO_PENDING`. state->needmask will be set to the mask required for scheduling purposes. The caller should call [event_io_write_string](apis.event_io_write_string.php "event_io_write_string") when the scheduler indicates that the underlying event is signalled with state->needmask.

If the write failed, this function returns `EVENT_IO_ERROR`.

If the write completes immediately, return `EVENT_IO_DONE`.

`state` must not be NULL, and must either be zero'ed out or be a value state structure previously used by other event_io_XXX routines.

It is advantageous to reuse state structures, as they try to avoid allocating memory if they already have an appropriately sized buffer.

When a state structure is no longer required, you should free resources by calling [event_io_state_clean](apis.event_io_state_clean.php "event_io_state_clean").

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

See [Section 68.49, “Event”](structs.event.php "68.49. Event").

</dd>

<dt>str</dt>

<dd>

The ec_string that you wish to write.

</dd>

<dt>state</dt>

<dd>

For a description of this data type see [Section 68.50, “event_io_state”](structs.event_io_state.php "68.50. event_io_state")

</dd>

</dl>

**Return Value**

This function returns one of the following values:

*   `EVENT_IO_DONE`

*   `EVENT_IO_ERROR`

*   `EVENT_IO_PENDING`

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp24256384"></a>
## See Also

[Chapter 24, *Event Functions*](event.php "Chapter 24. Event Functions") 

| [Prev](apis.event_io_write.php)  | [Up](event.php) |  [Next](apis.event_post_dup.php) |
| event_io_write  | [Table of Contents](index.php) |  event_post_dup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)