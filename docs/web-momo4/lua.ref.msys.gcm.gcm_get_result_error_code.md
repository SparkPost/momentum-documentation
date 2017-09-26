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

| msys.gcm.gcm_get_result_error_code |
| [Prev](lua.ref.msys.gcm.gcm_classify_error.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.pcre.match.php) |

<a name="lua.ref.msys.gcm.gcm_get_result_error_code"></a>
## Name

msys.gcm.gcm_get_result_error_code — Get the error code from the response results error

<a name="idp18199984"></a>
## Synopsis

`require('msys.gcm');`

`msys.gcm.gcm_get_result_error_code(error);`

`error: string`<a name="idp18204144"></a>
## Description

Get the error code from the response results error. The error code should be one of the following:

*   `msys.gcm.GCM_NO_ERROR`

*   `msys.gcm.GCM_UNAVAILABLE`

*   `msys.gcm.GCM_MISSING_REGISTRATION`

*   `msys.gcm.GCM_INVALID_REGISTRATION`

*   `msys.gcm.GCM_MISMATCH_SENDER_ID`

*   `msys.gcm.GCM_NOT_REGISTERED`

*   `msys.gcm.GCM_MESSAGE_TOO_BIG`

*   `msys.gcm.GCM_INVALID_DATA_KEY`

*   `msys.gcm.GCM_INVALID_TTL`

*   `msys.gcm.GCM_INTERNAL_SERVER_ERROR`

*   `msys.gcm.GCM_INVALID_PACKAGE_NAME`

*   `msys.gcm.GCM_UNKNOW`

<a name="idp18222768"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/) and [msys.apn.apn_status_classifier](lua.ref.msys.apn.apn_status_classifier.php "msys.apn.apn_status_classifier").

| [Prev](lua.ref.msys.gcm.gcm_classify_error.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.pcre.match.php) |
| msys.gcm.gcm_classify_error  | [Table of Contents](index.php) |  msys.pcre.match |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)