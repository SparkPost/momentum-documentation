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

| post_read_smtp |
| [Prev](hooks.core.post_mail_queue_maintain_domain.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.post_smtp_command.php) |

<a name="hooks.core.post_read_smtp"></a>
## Name

post_read_smtp — This hook is invoked immediately following data that has been read from the remote server during an **outbound** SMTP connection.

## Synopsis

`#include "hooks/core/post_read_smtp.h"`

| `int **core_post_read_smtp** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">len</var>, |   |
|   | <var class="pdparam">expected</var>, |   |
|   | <var class="pdparam">newstate</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">mask</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`delivery_construct * <var class="pdparam">dc</var>`;
`int <var class="pdparam">len</var>`;
`int <var class="pdparam">expected</var>`;
`int <var class="pdparam">newstate</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`int * <var class="pdparam">mask</var>`;<a name="idp8927696"></a>
## Description

This hook is invoked immediately following data that has been read from the remote server during an **outbound** SMTP connection. The hook is invoked prior to any error handling.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure function.

</dd>

<dt>dc</dt>

<dd>

Stores all details regarding the current SMTP connection. For more information on this data structure see [Section 68.11, “delivery_construct”](structs.delivery_construct.php "68.11. delivery_construct").

</dd>

<dt>len</dt>

<dd>

The length of the SMTP response string, in bytes.

</dd>

<dt>expected</dt>

<dd>

Represents the expected SMTP code.

</dd>

<dt>newstate</dt>

<dd>

Stores the new SMTP state machine state should the read complete and match the *`expected`* response code.

</dd>

<dt>now</dt>

<dd>

The current scheduler time.

</dd>

<dt>mask</dt>

<dd>

*`*mask`* stores the event mask that should be used to trigger the next read. Under most circumstances, values passed by reference should not be altered. Arguments that are passed by reference are done so to mirror the parent function's API.

</dd>

</dl>

**Return Values**

Returns a non-zero value on error.

**Threading**

This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.post_mail_queue_maintain_domain.php)  | [Up](hooks.core.php) |  [Next](hooks.core.post_smtp_command.php) |
| post_mail_queue_maintain_domain  | [Table of Contents](index.php) |  post_smtp_command |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)