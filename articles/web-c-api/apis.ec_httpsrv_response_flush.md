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

| ec_httpsrv_response_flush |
| [Prev](apis.ec_httpsrv_response_append.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_response_header_set.php) |

<a name="apis.ec_httpsrv_response_flush"></a>
## Name

ec_httpsrv_response_flush — Flush pending session response output

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_response_flush** (` | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">final</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`int <var class="pdparam">final</var>`;<a name="idp25508592"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Flush pending session response output.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

the session to flush

</dd>

<dt>final</dt>

<dd>

indicates if there is no more data in this response.

</dd>

</dl>

Flushes pending data to the client. If final is non-zero, this is taken as a hint that there is no more data pending for this session (this is significant for compression schemes).

**Return Values**

0 if successful, else returns an errno indicating what went wrong.

If invoked on the scheduler thread, this function is likely to return EAGAIN in cases where the network IO might have blocked the caller.

| [Prev](apis.ec_httpsrv_response_append.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_response_header_set.php) |
| ec_httpsrv_response_append  | [Table of Contents](index.php) |  ec_httpsrv_response_header_set |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)