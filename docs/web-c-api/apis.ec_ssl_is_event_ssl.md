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

| ec_ssl_is_event_ssl |
| [Prev](apis.ec_ssl_ctx_from_event.php)  | Chapter 50. SSL Functions |  [Next](apis.ec_ssl_set_ctx_param.php) |

<a name="apis.ec_ssl_is_event_ssl"></a>
## Name

ec_ssl_is_event_ssl — Determine whether an event is SSL-related

## Synopsis

`#include "ec_ssl.h"`

| `void **ec_ssl_is_event_ssl** (` | <var class="pdparam">e</var>`)`; |   |

`Event * <var class="pdparam">e</var>`;<a name="idp35251328"></a>
## Description

Determine whether an event is SSL-related.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

An Event.

</dd>

</dl>

**Return Values**

This function returns `1` if the event is SSL-related and `0` if it is not.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp35258608"></a>
## See Also

[Section 68.49, “Event”](structs.event.php "68.49. Event") and [events](arch.primary.apis.php#arch.event "1.3.3. The Event API")

| [Prev](apis.ec_ssl_ctx_from_event.php)  | [Up](ssl.php) |  [Next](apis.ec_ssl_set_ctx_param.php) |
| ec_ssl_ctx_from_event  | [Table of Contents](index.php) |  ec_ssl_set_ctx_param |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)