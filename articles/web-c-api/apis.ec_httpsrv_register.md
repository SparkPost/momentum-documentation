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

| ec_httpsrv_register |
| [Prev](apis.ec_httpsrv_ctx_set.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_request_accept_construct_get.php) |

<a name="apis.ec_httpsrv_register"></a>
## Name

ec_httpsrv_register — Registers an HTTP URI handler

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_register** (` | <var class="pdparam">instance</var>, |   |
|   | <var class="pdparam">method</var>, |   |
|   | <var class="pdparam">path</var>, |   |
|   | <var class="pdparam">job_class</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">handler</var>`)`; |   |

`const char * <var class="pdparam">instance</var>`;
`const char * <var class="pdparam">method</var>`;
`const char * <var class="pdparam">path</var>`;
`int <var class="pdparam">job_class</var>`;
`ec_blobject * <var class="pdparam">closure</var>`;
`ec_httpsrv_handler_func <var class="pdparam">handler</var>`;<a name="idp25222800"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Registers an HTTP URI handler.

**Parameters**

<dl class="variablelist">

<dt>instance</dt>

<dd>

is reserved for future use in virtual host support and must currently be NULL

</dd>

<dt>method</dt>

<dd>

identifies the HTTP method to be handled (eg: "GET")

</dd>

<dt>path</dt>

<dd>

base URI path (must end with a trailing '/' character)

</dd>

<dt>job_class</dt>

<dd>

a thread pool identifier

</dd>

<dt>closure</dt>

<dd>

passed through to handler via ec_httpsrv_service_ctx_get

</dd>

<dt>handler</dt>

<dd>

the function to be invoked on matching requests

</dd>

</dl>

When a request is made and authenticated, each registered handler is compared against the request; the first matching request is taken as the handler, and its handler function is invoked.

A request matches if all of the following are true:

*   request method exactly matches the method parameter, or the method parameter was specified as NULL

*   the request URI is to a path that is logically a child of the path parameter (eg: request /foo/bar will match a handler registered for /foo/)

The registration is coupled with the system configuration, this means that the registration is implicitly un-done each time a new configuration is applied, so implementors of HTTP functions must re-register them from their ext_init function when EC_MODULE_INIT_INIT is triggered.

If job_class is -1 (ECTP_CLASS_SHORT_LIVED), then the handler function will be invoked on the scheduler thread. Otherwise, the system will arrange for it to be called in the specified thread pool.

**Return Values**

0 on success, or an errno value to indicate the nature of the failure.

| [Prev](apis.ec_httpsrv_ctx_set.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_request_accept_construct_get.php) |
| ec_httpsrv_ctx_set  | [Table of Contents](index.php) |  ec_httpsrv_request_accept_construct_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)