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

| ec_message_get_body_io_object |
| [Prev](apis.ec_message_get_body_fd_for_mmap.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_get_code.php) |

<a name="apis.ec_message_get_body_io_object"></a>
## Name

ec_message_get_body_io_object — Requests an io_object from the IO layer

## Synopsis

`#include "ec_message.h"`

| `io_object * **ec_message_get_body_io_object** (` | <var class="pdparam">mess</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;<a name="idp28216544"></a>
## Description

Requests an io_object from the IO layer.

### Note

You should call [ec_message_get_body_io_object](apis.ec_message_get_body_io_object.php "ec_message_get_body_io_object") when you have finished consuming the io object to release its resources.

### Note

During validation, this will fabricate an IO object that pulls the content of the message in its current state. If the message is modified while such an object is open, then the results are undefined.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

The message. A pointer to an ec_message struct. For documentation of this data structure see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

</dd>

</dl>

**Return Values**

This returns the address of an io_object. It MAY return NULL.

**Threading**

It is legal to call this function in any thread but should not be called in the Scheduler thread.

### Note

This function may induce IO blocking or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

<a name="idp28227664"></a>
## See Also

[ec_message_get_body_io_object](apis.ec_message_get_body_io_object.php "ec_message_get_body_io_object").

| [Prev](apis.ec_message_get_body_fd_for_mmap.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_get_code.php) |
| ec_message_get_body_fd_for_mmap  | [Table of Contents](index.php) |  ec_message_get_code |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)