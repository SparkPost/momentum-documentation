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

| ec_message_rsrc_set |
| [Prev](apis.ec_message_rsrc_remove.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_rsrc_state.php) |

<a name="apis.ec_message_rsrc_set"></a>
## Name

ec_message_rsrc_set — This function associates I/O object source with the resource name for message

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_rsrc_set** (` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">name</var>, |   |
|   | <var class="pdparam">io</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;
`const char * <var class="pdparam">name</var>`;
`io_object * <var class="pdparam">io</var>`;<a name="idp29421472"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

This function associates I/O object source with the resource name for message.

If a resource with the given name does not exist then a new resource is created. If a resource exists with the provided name then the resource's I/O object is replaced with source. The source I/O object will have a reference added to it. The previous I/O object will be placed in a backlog and be destroyed either with an explicit ec_message_rsrc_flush or during swap-out (ec_message_swap_out). Behavior is undefined if source is NULL. Any set operation will indicate that the message resource has been updated so it can be explicitly swapped out during message swap out.

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

the message to associated the resource with

</dd>

<dt>name</dt>

<dd>

the name of the resource to set or create

</dd>

<dt>state</dt>

<dd>

the state of the associated I/O object

</dd>

<dt>io</dt>

<dd>

the I/O object associated with the resource

</dd>

</dl>

**Return Values**

Returns 0 on success. Returns -1 on failure and sets errno to indicate the reason.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.ec_message_rsrc_remove.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_rsrc_state.php) |
| ec_message_rsrc_remove  | [Table of Contents](index.php) |  ec_message_rsrc_state |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)