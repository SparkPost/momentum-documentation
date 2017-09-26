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

| connection_used_for_message |
| [Prev](apis.connection_used_for_email_message.php)  | Chapter 13. Connection-related Functions |  [Next](apis.dec_inbound_connections.php) |

<a name="apis.connection_used_for_message"></a>
## Name

connection_used_for_message — Associate a message and a connection

## Synopsis

`#include "connection.h"`

| `void **connection_used_for_message** (` | <var class="pdparam">h</var>, |   |
|   | <var class="pdparam">m</var>`)`; |   |

`connection_handle * <var class="pdparam">h</var>`;
`email_message * <var class="pdparam">m</var>`;<a name="idp21510016"></a>
## Description

Associate a message and a connection.

**Parameters**

<dl class="variablelist">

<dt>h</dt>

<dd>

The connection handle. For a description of this data type see [Section 68.10, “connection_handle”](structs.connection_handle.php "68.10. connection_handle").

</dd>

<dt>m</dt>

<dd>

The message. For a description of this data type see [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message").

</dd>

</dl>

**Return Values**

This function returns void.

**Threading**

It is only legal to call this function in the scheduler thread.

| [Prev](apis.connection_used_for_email_message.php)  | [Up](connection.php) |  [Next](apis.dec_inbound_connections.php) |
| connection_used_for_email_message  | [Table of Contents](index.php) |  dec_inbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)