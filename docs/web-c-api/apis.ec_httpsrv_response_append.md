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

| ec_httpsrv_response_append |
| [Prev](apis.ec_httpsrv_request_username_get.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_response_flush.php) |

<a name="apis.ec_httpsrv_response_append"></a>
## Name

ec_httpsrv_response_append — Append data to the session response output

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_response_append** (` | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">buf</var>, |   |
|   | <var class="pdparam">len</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`const void * <var class="pdparam">buf</var>`;
`size_t <var class="pdparam">len</var>`;<a name="idp25489040"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Append data to the session response output.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

the session to modify

</dd>

<dt>buf</dt>

<dd>

the data to emit

</dd>

<dt>len</dt>

<dd>

the amount of data being emitted

</dd>

</dl>

**Return Values**

0 if successful, else returns an errno indicating what went wrong. In particular, ENOMEM indicates that insuficient memory was available.

| [Prev](apis.ec_httpsrv_request_username_get.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_response_flush.php) |
| ec_httpsrv_request_username_get  | [Table of Contents](index.php) |  ec_httpsrv_response_flush |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)