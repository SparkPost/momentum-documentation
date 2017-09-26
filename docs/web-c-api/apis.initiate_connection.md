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

| initiate_connection |
| [Prev](apis.h_to_c.php)  | Chapter 13. Connection-related Functions |  [Next](apis.initiate_connection_smtp.php) |

<a name="apis.initiate_connection"></a>
## Name

initiate_connection — Intiate an outbound connection

## Synopsis

`#include "connection.h"`

| `connection_handle * **initiate_connection** (` | <var class="pdparam">dr</var>, |   |
|   | <var class="pdparam">binding</var>, |   |
|   | <var class="pdparam">now</var>, |   |
|   | <var class="pdparam">finish_connect_func</var>, |   |
|   | <var class="pdparam">timeout_func</var>, |   |
|   | <var class="pdparam">user_data</var>, |   |
|   | <var class="pdparam">error</var>`)`; |   |

`domain_record * <var class="pdparam">dr</var>`;
`int <var class="pdparam">binding</var>`;
`struct timeval * <var class="pdparam">now</var>`;
`EventFunc <var class="pdparam">finish_connect_func</var>`;
`EventFunc <var class="pdparam">timeout_func</var>`;
`void * <var class="pdparam">user_data</var>`;
`int * <var class="pdparam">error</var>`;<a name="idp21642336"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Intiate an outbound connection

This function initiates an outbound connection. It either returns a connection handle or sets error; if error contains one of the CONN_ACTION_* flags, the called needs to take the specified action on the binding,domain it was called on: CONN_ACTION_REQUEUE1: take a message from the active queue and requeue it CONN_ACTION_PURGE_DOMAIN: purge the entire domain (not just one binding) In case of error, the caller is also responsible for checking of MX_Failures_To_Delay has been exceeded and taking the appropriate action.

**Parameters**

<dl class="variablelist">

<dt>dr</dt>

<dd>

The domain record on which a connection is to be opened.

</dd>

<dt>binding</dt>

<dd>

The binding slot on which a connection is to be opened.

</dd>

<dt>now</dt>

<dd>

The current time.

</dd>

<dt>finish_connect_func</dt>

<dd>

This function is called if the connection attempt succeeeds, or if it fails after connect() returns EINPROGRESS and we receive an error (as opposed to timing out).

</dd>

<dt>timeout_func</dt>

<dd>

This function is called if the connection attempt times out.

</dd>

<dt>user_data</dt>

<dd>

This is set as the user_data in the resulting connection.

</dd>

<dt>error</dt>

<dd>

If NULL is returned, this is set to a CONN_ERR_* possibly ORed with a CONN_ACTION_*

</dd>

</dl>

**Return Values**

On success the connection handle is returned; on error, `NULL`.

| [Prev](apis.h_to_c.php)  | [Up](connection.php) |  [Next](apis.initiate_connection_smtp.php) |
| h_to_c  | [Table of Contents](index.php) |  initiate_connection_smtp |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)