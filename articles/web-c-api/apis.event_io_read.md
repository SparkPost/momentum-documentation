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

| event_io_read |
| [Prev](apis.event_io_printf.php)  | Chapter 24. Event Functions |  [Next](apis.event_io_retry.php) |

<a name="apis.event_io_read"></a>
## Name

event_io_read — Initiate or continue a read operation for a fixed length

## Synopsis

`#include "event.h"`

| `int **event_io_read** (` | <var class="pdparam">e</var>, |   |
|   | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">buflen</var>, |   |
|   | <var class="pdparam">state</var>`)`; |   |

`Event * <var class="pdparam">e</var>`;
`char * <var class="pdparam">buf</var>`;
`int <var class="pdparam">buflen</var>`;
`event_io_state * <var class="pdparam">state</var>`;<a name="idp24136752"></a>
## Description

Initiate or continue a read operation for a fixed length. If you need a record based reader, consider using the tryread APIs.

Initiates a read that will populate `buf` and `buflen` with the data requested. This function will not return success until it has completely obtained the length requested. It may return `EVENT_IO_ERROR` if an error is encountered before that time.

This function is intended to be used with comparatively small buffers. If you anticipate moving large chunks of data (where large means larger than the `growbuf` size) over a transport, you should consider using the growbuf code instead.

If the read cannot be satisfied immediately, this function stores state information into the state parameter and returns `EVENT_IO_PENDING`. state->needmask will be set to the mask required for scheduling purposes. The caller should call [event_io_read](apis.event_io_read.php "event_io_read") when the scheduler indicates that the underlying event is signalled with state->needmask.

If the read failed, this function returns `EVENT_IO_ERROR`.

If the read completes, returns `EVENT_IO_DONE`.

When `EVENT_IO_DONE` is returned, the caller provided buf and buflen will be populated with the requested data. If multiple event_io_read calls were required to completely satisfy the request, the buf and buflen passed to the most recent call are used; this function does not cache the caller provided buffer address, on the assumption that it might be a stack variable, and as such, will unwind between event_io_read calls.

`state` must not be `NULL`, and must either be zero'ed out or be a value state structure previously used by other event_io_XXX routines.

It is advantageous to reuse state structures, as they try to avoid allocating memory if they already have an appropriately sized buffer.

When a state structure is no longer required, you should free resources by calling [event_io_state_clean](apis.event_io_state_clean.php "event_io_state_clean").

Returns `EVENT_IO_EOF` when no more data can be read from the file descriptor. This constant is available starting from Momentum 3.0.11.

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

<dt>state</dt>

<dd>

This parameter must not be NULL, and must either be zero'ed out or be a value state structure previously used by other event_io_XXX routines. For a description of this data structure see [Section 68.50, “event_io_state”](structs.event_io_state.php "68.50. event_io_state").

</dd>

</dl>

**Return Values**

For the return values see the description above.

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp24163152"></a>
## See Also

[Chapter 24, *Event Functions*          ](event.php "Chapter 24. Event Functions") and [tryread_until](apis.tryread_until.php "tryread_until")

| [Prev](apis.event_io_printf.php)  | [Up](event.php) |  [Next](apis.event_io_retry.php) |
| event_io_printf  | [Table of Contents](index.php) |  event_io_retry |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)