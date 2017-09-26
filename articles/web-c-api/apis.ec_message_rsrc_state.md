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

| ec_message_rsrc_state |
| [Prev](apis.ec_message_rsrc_set.php)  | Chapter 34. Message Functions |  [Next](apis.ec_message_rsrc_string.php) |

<a name="apis.ec_message_rsrc_state"></a>
## Name

ec_message_rsrc_state — This will return a state hint of a given resource

## Synopsis

`#include "ec_message.h"`

| `int **ec_message_rsrc_state** (` | <var class="pdparam">message</var>, |   |
|   | <var class="pdparam">name</var>`)`; |   |

`ec_message * <var class="pdparam">message</var>`;
`const char * <var class="pdparam">name</var>`;<a name="idp29445504"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

This will return a state hint of a given resource.

Any given resource may be in the following states:

*   EC_MESSAGE_RSRC_NONE: No resource with the provided name exists for message.

*   EC_MESSAGE_RSRC_MEMORY: The I/O object currently associated with the resource identified with name is guaranteed to be wait-free (informally).

*   EC_MESSAGE_RSRC_BLOCKING: The I/O object currently associated with the resource identified with name may block.

*   EC_MESSAGE_RSRC_PENDING: An I/O object for the given resource may be available, actual resolution is pending an ec_message_rsrc_get. A get operation is guaranteed to block.

*   EC_MESSAGE_RSRC_DELETED: The resource is pending deletion.

**Parameters**

<dl class="variablelist">

<dt>message</dt>

<dd>

the message the resource is associated with

</dd>

<dt>name</dt>

<dd>

the name of the resource

</dd>

</dl>

**Return Values**

Returns current state of the resource.

**Configuration Change. ** This feature is available starting from Momentum 3.1.

| [Prev](apis.ec_message_rsrc_set.php)  | [Up](ec_message.php) |  [Next](apis.ec_message_rsrc_string.php) |
| ec_message_rsrc_set  | [Table of Contents](index.php) |  ec_message_rsrc_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)