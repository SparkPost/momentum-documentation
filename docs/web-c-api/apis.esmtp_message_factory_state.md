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

| esmtp_message_factory_state |
| [Prev](apis.esmtp_message_factory.php)  | Chapter 47. SMTP-related Functions |  [Next](apis.read_smtp.php) |

<a name="apis.esmtp_message_factory_state"></a>
## Name

esmtp_message_factory_state — Determine the state of a message

## Synopsis

`#include "esmtp_factory.h"`

| `(const char *) **esmtp_message_factory_state** (` | <var class="pdparam">state</var>`)`; |   |

`int <var class="pdparam">state</var>`;<a name="idp34254256"></a>
## Description

Determine the state of a message.

**Parameters**

<dl class="variablelist">

<dt>state</dt>

<dd>

The integer representation of the message state.

</dd>

</dl>

**Return Values**

On success the return value will be one of the following:

```
const char *esmtp_states[] = {
  "just connected",              /* 0 */
  "sending banner",              /* 1 */
  "awaiting ehlo/helo",          /* 2 */
  "sending ehlo/helo response",  /* 3 */
  "awaiting mailfrom",           /* 4 */
  "sending mailfrom response",   /* 5 */
  "awaiting rcptto",             /* 6 */
  "sending rcptto response",     /* 7 */
  "data phase",                  /* 8 */
  "reading body",                /* 9 */
  "sending body response",       /* 10 */
  "async body handler",          /* 11 */
  "async body response",         /* 12 */
  "relaying denied",             /* 13 */
  "extension 1",                 /* 14 */
  "extension 2",                 /* 15 */
  "extension 3",                 /* 16 */
  "extension 4",                 /* 17 */
  "concurrency limit",           /* 18 */
  "rcptto list response",        /* 19 */
  "rcptto list final response",  /* 20 */
  "esmtp setup phase"            /* 21 */
};
```

On failure, `unknown` is returned.

**Threading**

It is legal to call this function in the `Scheduler` thread.

<a name="idp34264032"></a>
## See Also

[Section 68.59, “message_construct”](structs.message_construct.php "68.59. message_construct")

| [Prev](apis.esmtp_message_factory.php)  | [Up](smtp.php) |  [Next](apis.read_smtp.php) |
| esmtp_message_factory  | [Table of Contents](index.php) |  read_smtp |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)