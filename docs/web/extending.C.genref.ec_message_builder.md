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

| ec_message_builder |
| [Prev](extending.C.genref.ec_message_blobject_store.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.ec_message_change_binding_slot.php) |

<a name="extending.C.genref.ec_message_builder"></a>
## Name

ec_message_builder — Convenience routine for building messages in a blocking fashion.

## Synopsis

`#include "/ec_message.h"`

| `io_object * **ec_message_builder**(` | <var class="pdparam">mess</var>, |   |
|   | <var class="pdparam">size_hint</var>`)`; |   |

`ec_message * <var class="pdparam">mess</var>`;
`size_t <var class="pdparam">size_hint</var>`;<a name="idp18935376"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Convenience routine for building messages in a blocking fashion.

If you are constructing a message internally, this API will return an IO object that will hold the message as it is constructed. Each write to the object will internally incrementally parse that chunk into the message you have provided.

If the message is larger than the large message threshold, it will internally be journalled to the spool in much the same way that large messages are received over SMTP.

When the io_object is closed, it will finalize the parse and call ec_message_set_io_object() with the underlying storage for the message.

size_hint is supplied by the caller if the approximate size of the final message is known in advance.

### Note

This function may induce IO or otherwise block the caller. Blocking in the scheduler thread will lead to degraded performance and should be avoided at all costs. If your code is running in the IO subsystem, the core will have already taken steps to ensure that blocking is acceptable. Otherwise, you should look at using the thread pool API to run a job in the IO pool.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

| [Prev](extending.C.genref.ec_message_blobject_store.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.ec_message_change_binding_slot.php) |
| ec_message_blobject_store  | [Table of Contents](index.php) |  ec_message_change_binding_slot |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)