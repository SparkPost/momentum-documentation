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

| msys.httpclnt.http_status_classifier |
| [Prev](lua.ref.sess_request_set_body.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.http.client.new.php) |

<a name="lua.ref.msys.httpclnt.http_status_classifier"></a>
## Name

msys.httpclnt.http_status_classifier — Determine the delivery status of the "DLV_Response_Status" variable

<a name="idp23773392"></a>
## Synopsis

```
require('msys.httpclnt');
require('msys.delivery');
```

`msys.httpclnt.http_status_classifier(status);`

`status: numeric`<a name="idp23776752"></a>
## Description

**Configuration Change. ** This function is available as of Momentum version 3.5.5.

This function returns the delivery status of the "DLV_Response_Status" variable. It classifies the "DLV_Response_Status" variable as one of the following:

*   `msys.delivery.DELIVERY_SUCCESS`

*   `msys.delivery.DELIVERY_PERMFAILED`

Use this function in the `http_response_eval` callout.

<a name="idp23783728"></a>
## See Also

[Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/), [msys.gcm.gcm_classify_error](lua.ref.msys.gcm.gcm_classify_error.php "msys.gcm.gcm_classify_error") and [msys.apn.apn_status_classifier](lua.ref.msys.apn.apn_status_classifier.php "msys.apn.apn_status_classifier").

| [Prev](lua.ref.sess_request_set_body.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.http.client.new.php) |
| sess:request_set_body  | [Table of Contents](index.php) |  msys.http.client.new |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)