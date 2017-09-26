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

| build_fd_event |
| [Prev](apis.build_event_from_now_f.php)  | Chapter 24. Event Functions |  [Next](apis.event_close.php) |

<a name="apis.build_fd_event"></a>
## Name

build_fd_event — Create an event event relating to an open file descriptor

## Synopsis

`#include "event.h"`

| `Event * **build_fd_event** (` | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">mask</var>, |   |
|   | <var class="pdparam">aggressive</var>, |   |
|   | <var class="pdparam">callback</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`int <var class="pdparam">fd</var>`;
`int <var class="pdparam">mask</var>`;
`int <var class="pdparam">aggressive</var>`;
`EventFunc <var class="pdparam">callback</var>`;
`void *<var class="pdparam">closure</var>`;<a name="idp24031472"></a>
## Description

Create a file descriptor event. The Event structure encapsulates a file descriptor and an action that should be triggered when IO is signalled on that descriptor.

**Parameters**

<dl class="variablelist">

<dt>fd</dt>

<dd>

The file descriptor.

</dd>

<dt>mask</dt>

<dd>

The event or events that you are waiting for, for example, `E_READ|E_EXCEPTION`. See [Section 68.49, “Event”](structs.event.php "68.49. Event") for a complete list of the constants applicable to this parameter.

</dd>

<dt>aggressive</dt>

<dd>

With this parameter set to `E_AGGRESSIVE_NONE` the event callout is invoked once per scheduler iteration. With it set to E_AGGRESSIVE_HIGH it is called in a tight loop until there is no pending IO. **This higher setting should only be used if you know what you are doing.**                                                                    See [Section 68.49, “Event”](structs.event.php "68.49. Event") for a complete list of the constants applicable to this parameter.

</dd>

<dt>callback</dt>

<dd>

The callback function. The requirements for this function are described at [Section 1.3.3, “The Event API”](arch.primary.apis.php#arch.event "1.3.3. The Event API").

</dd>

<dt>closure</dt>

<dd>

The closure, the contextual data needed for the event callback to perform its task.

</dd>

</dl>

**Return Values**

This function returns an Event.

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp24050000"></a>
## See Also

[Section 68.49, “Event”](structs.event.php "68.49. Event"), [build_event](apis.build_event.php "build_event") and [Section 1.3.3, “The Event API”](arch.primary.apis.php#arch.event "1.3.3. The Event API")

| [Prev](apis.build_event_from_now_f.php)  | [Up](event.php) |  [Next](apis.event_close.php) |
| build_event_from_now_f  | [Table of Contents](index.php) |  event_close |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)