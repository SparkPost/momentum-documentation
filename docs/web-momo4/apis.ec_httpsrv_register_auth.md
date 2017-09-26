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

| ec_httpsrv_register_auth |
| [Prev](apis.ec_config_rsrc_get.php)  | Chapter 69. Hook Points and C Functions Reference |  [Next](apis.ec_httpsrv_request_local_address.php) |

<a name="apis.ec_httpsrv_register_auth"></a>
## Name

ec_httpsrv_register_auth — Register an HTTP handler for authenticating a URI

## Synopsis

`#include "/modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_register_auth** (` | <var class="pdparam">instance</var>, |   |
|   | <var class="pdparam">method</var>, |   |
|   | <var class="pdparam">path</var>, |   |
|   | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">handler</var>`)`; |   |

`const char * <var class="pdparam">instance</var>`;
`const char * <var class="pdparam">method</var>`;
`const char * <var class="pdparam">path</var>`;
`ec_blobject * <var class="pdparam">closure</var>`;
`ec_httpsrv_auth_handler_func <var class="pdparam">handler</var>`;<a name="idp7821904"></a>
## Description

This function registers an HTTP handler for authenticating a URI.

**Parameters**

<dl class="variablelist">

<dt>instance</dt>

<dd>

This is reserved for future use in virtual host support and must currently be NULL.

</dd>

<dt>method</dt>

<dd>

HTTP method to be handled

For example: `GET`

</dd>

<dt>path</dt>

<dd>

Base URI path

The trailing ‘`/`’ character is optional.

</dd>

<dt>closure</dt>

<dd>

Closure that is passed through to the handler via [ec_httpsrv_service_ctx_get](https://support.messagesystems.com/docs/web-c-api/apis.ec_httpsrv_service_ctx_get.php)

</dd>

<dt>handler</dt>

<dd>

Function that is invoked on matching requests

</dd>

</dl>

Authentication handlers are matched using the same algorithm as request handlers. See the description of [ec_httpsrv_register](https://support.messagesystems.com/docs/web-c-api/apis.ec_httpsrv_register.php) for details.

**Return Values**

This function returns `0` on success. On failure, it returns an error number that indicates the nature of the failure.

**Threading**

This hook can be called in any thread.

| [Prev](apis.ec_config_rsrc_get.php)  | [Up](hooks.php) |  [Next](apis.ec_httpsrv_request_local_address.php) |
| ec_config_rsrc_get  | [Table of Contents](index.php) |  ec_httpsrv_request_local_address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)