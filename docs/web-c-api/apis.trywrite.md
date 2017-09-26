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

| trywrite |
| [Prev](apis.tryread_until.php)  | Chapter 9. Buffer Functions |  [Next](apis.trywritef.php) |

<a name="apis.trywrite"></a>
## Name

trywrite — Write a string of `buflen` bytes for an event

## Synopsis

`#include "ec_growbuf.h"`

| `int **trywrite** (` | <var class="pdparam">event</var>, |   |
|   | <var class="pdparam">buffer</var>, |   |
|   | <var class="pdparam">buflen</var>`)`; |   |

`Event * <var class="pdparam">event</var>`;
`const char * <var class="pdparam">buffer</var>`;
`int <var class="pdparam">buflen</var>`;<a name="idp20644432"></a>
## Description

Write a string of `buflen` bytes for an event.

### Note

This function assumes that the event closure is an [Section 68.2, “accept_construct”](structs.accept_construct.php "68.2. accept_construct").

### Note

All events are assumed to be non-blocking, so the write semantics are non-blocking.

A sample call:

`i = trywrite(event, ".\r\n", 3)`

**Parameters**

<dl class="variablelist">

<dt>event</dt>

<dd>

An event.

</dd>

<dt>buffer</dt>

<dd>

The string to write.

</dd>

<dt>buflen</dt>

<dd>

The length of `buffer`, in bytes.

</dd>

</dl>

**Return Values**

This function returns `1` on success and `0` on failure.

**Threading**

It is *only* legal to call this function in the `Scheduler` thread.

<a name="idp20660608"></a>
## See Also

[trywritef](apis.trywritef.php "trywritef"), [minimal_tryread_construct_free](apis.minimal_tryread_construct_free.php "minimal_tryread_construct_free"), and [tryread_until](apis.tryread_until.php "tryread_until")

| [Prev](apis.tryread_until.php)  | [Up](buffer.php) |  [Next](apis.trywritef.php) |
| tryread_until  | [Table of Contents](index.php) |  trywritef |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)