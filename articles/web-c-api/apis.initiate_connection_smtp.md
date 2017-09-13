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

| initiate_connection_smtp |
| [Prev](apis.initiate_connection.php)  | Chapter 13. Connection-related Functions |  [Next](control.php) |

<a name="apis.initiate_connection_smtp"></a>
## Name

initiate_connection_smtp — initiates an SMTP connection

## Synopsis

`#include "connection.h"`

| `int **initiate_connection_smtp** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding</var>, |   |
|   | <var class="pdparam">now</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding</var>`;
`struct timeval * <var class="pdparam">now</var>`;<a name="idp21671632"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

initiates an SMTP connection

This function is called by the mail queue maintainer to initiate SMTP connections. It calls initiate_connection with the proper callbacks and takes the needed CONN_ACTION_* actions.

**Parameters**

<dl class="variablelist">

<dt>dr</dt>

<dd>

the domain record on which a connection is to be opened

</dd>

<dt>binding</dt>

<dd>

the binding slot on which a connection is to be opened

</dd>

<dt>now</dt>

<dd>

the current time

</dd>

</dl>

**Return Values**

0 on success, CONN_ERROR(initiate_connection return value) on error

| [Prev](apis.initiate_connection.php)  | [Up](connection.php) |  [Next](control.php) |
| initiate_connection  | [Table of Contents](index.php) |  Chapter 14. Control Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)