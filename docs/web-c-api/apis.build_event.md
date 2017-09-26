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

| build_event |
| [Prev](event.php)  | Chapter 24. Event Functions |  [Next](apis.build_event_from_now_f.php) |

<a name="apis.build_event"></a>
## Name

build_event — Create an event

## Synopsis

`#include "event.h"`

| `Event * **build_event** (` | <var class="pdparam">when</var>, |   |
|   | <var class="pdparam">whence</var>, |   |
|   | <var class="pdparam">fd</var>, |   |
|   | <var class="pdparam">callback</var>, |   |
|   | <var class="pdparam">closure</var>`)`; |   |

`struct timeval <var class="pdparam">when</var>`;
`int <var class="pdparam">whence</var>`;
`int <var class="pdparam">fd</var>`;
`EventFunc <var class="pdparam">callback</var>`;
`void *<var class="pdparam">closure</var>`;<a name="idp23961392"></a>
## Description

Create an event. The Event structure encapsulates a file descriptor and an action that should be triggered when IO is signalled on that descriptor. The event system keys events by file descriptor; you can only have one instance of an Event structure scheduled for a given descriptor. You may have multiple event structures that reference the same descriptor, but only one of those can be active in the Scheduler at a given time.

**Defines of this Function**

The `build_event_from_epoch` and the `build_event_from_now` functions are defined in the following way:

```
#define build_event_from_epoch(a,b,c,d) build_event((a), \
                                        E_FROM_EPOCH, (b), (c), (d))
#define build_event_from_now(a,b,c,d) build_event((a), \
                                        E_FROM_NOW, (b), (c), (d))
```
**Parameters**

<dl class="variablelist">

<dt>when</dt>

<dd>

When the event should begin.

</dd>

<dt>whence</dt>

<dd>

Use the contants `E_FROM_EPOCH` or `E_FROM_NOW` for this parameter.

</dd>

<dt>fd</dt>

<dd>

The file descriptor.

</dd>

<dt>callback</dt>

<dd>

The callback function.

</dd>

<dt>closure</dt>

<dd>

The closure function.

</dd>

</dl>

**Return Values**

This function returns an Event.

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp23980512"></a>
## See Also

[Section 68.49, “Event”](structs.event.php "68.49. Event") and [Section 1.3.3, “The Event API”](arch.primary.apis.php#arch.event "1.3.3. The Event API")

| [Prev](event.php)  | [Up](event.php) |  [Next](apis.build_event_from_now_f.php) |
| Chapter 24. Event Functions  | [Table of Contents](index.php) |  build_event_from_now_f |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)