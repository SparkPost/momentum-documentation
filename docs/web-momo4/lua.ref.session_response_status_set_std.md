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

| session:response_status_set_std |
| [Prev](lua.ref.session_request_url_get.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.json.decode.php) |

<a name="lua.ref.session_response_status_set_std"></a>
## Name

session:response_status_set_std — Set the HTTP status for the session response

<a name="idp16474752"></a>
## Synopsis

`session:response_status_set_std(cod, message, mimetype);`

code: numeric
message: string
mimetype: string (optional)

<a name="idp16477088"></a>
## Description

Use this function with [msys.httpsrv.register](lua.ref.msys.httpsrv.register.php "msys.httpsrv.register") to set the HTTP status for the session response. For example code see [Example 70.30, “msys.httpsrv.register Example”](lua.ref.msys.httpsrv.register.php#lua.ref.msys.httpsrv.register.example "Example 70.30. msys.httpsrv.register Example"). For a description of the session object, see [ec_httpsrv_session](https://support.messagesystems.com/docs/web-c-api/structs.ec_httpsrv_session.php).

Set the `code` to a valid HTTP response code, the `message` to an appropriate message, and `mimetype` to a mime type. The following is an example:

`session:response_status_set_std(200, response, "text/plain");`

Enable this function with the statement `require("msys.extended.httpsrv");`.

<a name="idp16484304"></a>
## See Also

[msys.httpsrv.register](lua.ref.msys.httpsrv.register.php "msys.httpsrv.register") and [session:request_url_get](lua.ref.session_request_url_get.php "session:request_url_get")

| [Prev](lua.ref.session_request_url_get.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.json.decode.php) |
| session:request_url_get  | [Table of Contents](index.php) |  json.decode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)