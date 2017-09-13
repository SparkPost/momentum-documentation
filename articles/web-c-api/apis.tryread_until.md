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

| tryread_until |
| [Prev](apis.minimal_tryread_construct_free.php)  | Chapter 9. Buffer Functions |  [Next](apis.trywrite.php) |

<a name="apis.tryread_until"></a>
## Name

tryread_until — Read data in `growbuf` sized chunks

## Synopsis

`#include "ec_growbuf.h"`

| `int **tryread_until** (` | <var class="pdparam">event</var>, |   |
|   | <var class="pdparam">needmask</var>, |   |
|   | <var class="pdparam">mtc</var>, |   |
|   | <var class="pdparam">until</var>`)`; |   |

`Event * <var class="pdparam">event</var>`;
`int * <var class="pdparam">needmask</var>`;
`minimal_tryread_construct * <var class="pdparam">mtc</var>`;
`const char * <var class="pdparam">until</var>`;<a name="idp20614128"></a>
## Description

Read data in `growbuf` sized chunks.

### Note

All events are assumed to be non-blocking, so the read and write semantics are non-blocking.

The actual system call happening underneath can be either a 'read' or 'write' depending on the IO driver being used (for example, TLS).

**Parameters**

<dl class="variablelist">

<dt>event</dt>

<dd>

An event.

</dd>

<dt>needmask</dt>

<dd>

The mask.

</dd>

<dt>mtc</dt>

<dd>

The address of a [Section 68.61, “minimal_tryread_construct”](structs.minimal_tryread_construct.php "68.61. minimal_tryread_construct") struct.

</dd>

<dt>until</dt>

<dd>

An integer value, often `TRYREAD_UNTIL_CRLFDOTCRLF` or `TRYREAD_UNTIL_CRLF`.

</dd>

</dl>

**Return Values**

This function returns the number of bytes successfully read or `-1` if there is an error. If there is an error, then `errno` is set appropriately (example, `EAGAIN, E2BIG, ENOMEM`).

**Threading**

It is *only* legal to call this function in the `Scheduler` thread.

<a name="idp20631392"></a>
## See Also

[trywrite](apis.trywrite.php "trywrite"), [trywritef](apis.trywritef.php "trywritef"), and [minimal_tryread_construct_free](apis.minimal_tryread_construct_free.php "minimal_tryread_construct_free").

| [Prev](apis.minimal_tryread_construct_free.php)  | [Up](buffer.php) |  [Next](apis.trywrite.php) |
| minimal_tryread_construct_free  | [Table of Contents](index.php) |  trywrite |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)