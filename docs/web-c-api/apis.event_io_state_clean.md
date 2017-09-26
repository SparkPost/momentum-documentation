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

| event_io_state_clean |
| [Prev](apis.event_io_retry.php)  | Chapter 24. Event Functions |  [Next](apis.event_io_write.php) |

<a name="apis.event_io_state_clean"></a>
## Name

event_io_state_clean — Release resources held in an event_io_state structure

## Synopsis

`#include "event.h"`

| `void **event_io_state_clean** (` | <var class="pdparam">state</var>`)`; |   |

`event_io_state * <var class="pdparam">state</var>`;<a name="idp24195424"></a>
## Description

Release resources held in an event_io_state structure.

**Parameters**

<dl class="variablelist">

<dt>state</dt>

<dd>

For a description of this data type see [Section 68.50, “event_io_state”](structs.event_io_state.php "68.50. event_io_state")

</dd>

</dl>

**Return Value**

This function returns void.

**Threading**
### Warning

Only call this function from the `Scheduler` thread.

<a name="idp24203184"></a>
## See Also

[Chapter 24, *Event Functions*](event.php "Chapter 24. Event Functions") 

| [Prev](apis.event_io_retry.php)  | [Up](event.php) |  [Next](apis.event_io_write.php) |
| event_io_retry  | [Table of Contents](index.php) |  event_io_write |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)