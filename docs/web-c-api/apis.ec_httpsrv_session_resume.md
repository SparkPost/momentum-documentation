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

| ec_httpsrv_session_resume |
| [Prev](apis.ec_httpsrv_service_ctx_get.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_session_suspend.php) |

<a name="apis.ec_httpsrv_session_resume"></a>
## Name

ec_httpsrv_session_resume — Arranges for a suspended http session to be resumed

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_session_resume** (` | <var class="pdparam">sess</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;<a name="idp25797808"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Arranges for a suspended http session to be resumed.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

the session to resume

</dd>

<dt>finished</dt>

<dd>

indicates if the request has completed.

</dd>

</dl>

The session must previously have been marked as suspended by a handler returning EC_HTTPSRV_HANDLER_ASYNC.

Returns 0 on success, or an errno value indicating the reason for failure.

On successful invocation, if finished is 0, the associated handler function will be invoked on the scheduler thread and allowed to continue processing. If finished is non-zero, the session will be treated as though the handler had been invoked one final time and returned EC_HTTPSRV_HANDLER_DONE.

This function is safe to call from any thread.

| [Prev](apis.ec_httpsrv_service_ctx_get.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_session_suspend.php) |
| ec_httpsrv_service_ctx_get  | [Table of Contents](index.php) |  ec_httpsrv_session_suspend |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)