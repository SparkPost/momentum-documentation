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

| ec_internal_inject2 |
| [Prev](apis.ec_internal_inject.php)  | Chapter 8. Bounce Functions |  [Next](apis.ec_internal_inject_no_log.php) |

<a name="apis.ec_internal_inject2"></a>
## Name

ec_internal_inject2 — Enqueues an internally generated message

## Synopsis

`#include "soft_bounce.h"`

| `void **ec_internal_inject2** (` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">flags</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int <var class="pdparam">flags</var>`;<a name="idp20479968"></a>
## Description

Enqueues an internally generated message. Ensures that the message is correctly swapped and has a proper binding assignment.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

<dt>now</dt>

<dd>

A pointer to a `timeval struct`.

</dd>

<dt>flags</dt>

<dd>

An `int` parameter which is passed one or more of the following flags:

*   If flags includes EC_INJECT_SIGN then it will call out to message signing hooks.

*   If flags includes EC_INJECT_LOG then it will log a reception.

</dd>

</dl>

**Return Values**

This function returns `void`.

**Threading**

It is legal to call this function in any thread.

| [Prev](apis.ec_internal_inject.php)  | [Up](bounce.php) |  [Next](apis.ec_internal_inject_no_log.php) |
| ec_internal_inject  | [Table of Contents](index.php) |  ec_internal_inject_no_log |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)