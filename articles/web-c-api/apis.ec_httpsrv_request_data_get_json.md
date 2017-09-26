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

| ec_httpsrv_request_data_get_json |
| [Prev](apis.ec_httpsrv_request_data_get.php)  | Chapter 28. httpsrv Functions |  [Next](apis.ec_httpsrv_request_data_get_string.php) |

<a name="apis.ec_httpsrv_request_data_get_json"></a>
## Name

ec_httpsrv_request_data_get_json — Gets a JSON object representation of the request payload data

## Synopsis

`#include "modules/listeners/httpsrv.h"`

| `int **ec_httpsrv_request_data_get_json** (` | <var class="pdparam">sess</var>, |   |
|   | <var class="pdparam">json</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;
`struct json_object ** <var class="pdparam">json</var>`;<a name="idp25310000"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

Gets a JSON object representation of the request payload data.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

the session to interrogate

</dd>

<dt>json</dt>

<dd>

returns the json object

</dd>

</dl>

Passes the payload data to json_object_new_string_len() and returns resultant json object via the json parameter.

**Return Values**

0 on success, or an errno value indicating any issues with consuming the payload data.

The json object will be set to the successfully created json representation of the string on success, otherwise it will be NULL.

It is possible for the return value to be 0 and the json parameter to be set to NULL or for it to be an error (use json_is_error to detect this). The likely cause of this is that that payload was not valid JSON text. You may determine the error code by casting the json pointer like this: -(unsigned long)json. You may look up the reason string by indexing the resulting value into json_tokener_errors. These facilities are provided by the msys-json-c package; consult <json/json.h>

The caller owns the returned json object and is responsible for freeing it by calling json_object_put() when it is no longer needed.

| [Prev](apis.ec_httpsrv_request_data_get.php)  | [Up](httpsrv.php) |  [Next](apis.ec_httpsrv_request_data_get_string.php) |
| ec_httpsrv_request_data_get  | [Table of Contents](index.php) |  ec_httpsrv_request_data_get_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)