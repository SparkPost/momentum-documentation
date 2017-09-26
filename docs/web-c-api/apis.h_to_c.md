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

| h_to_c |
| [Prev](apis.ec_smtp_closeconn.php)  | Chapter 13. Connection-related Functions |  [Next](apis.initiate_connection.php) |

<a name="apis.h_to_c"></a>
## Name

h_to_c — Returns the `connection` data associated with a `connection_handle`

## Synopsis

`#include "connection.h"`

| `connection * **h_to_c** (` | <var class="pdparam">a</var>`)`; |   |

`connection_handle * <var class="pdparam">a</var>`;<a name="idp21620096"></a>
## Description

Returns the `connection` data associated with a `connection_handle`.

**Parameters**

<dl class="variablelist">

<dt>a</dt>

<dd>

A pointer to a `connection_handle` struct. For documentation of this data structure see [Section 68.10, “connection_handle”](structs.connection_handle.php "68.10. connection_handle").

</dd>

</dl>

**Return Values**

This function returns the address of the [connection](structs.connection.php "68.9. connection") data associated with the `connection_handle`.

**Threading**

It is only legal to call this function in the `Scheduler` thread.

| [Prev](apis.ec_smtp_closeconn.php)  | [Up](connection.php) |  [Next](apis.initiate_connection.php) |
| ec_smtp_closeconn  | [Table of Contents](index.php) |  initiate_connection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)