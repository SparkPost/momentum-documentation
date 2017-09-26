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

| Appendix B. Apple Status Codes |
| [Prev](push.maintaining.php)  | Part I. Configuring Momentum for Apple Push Notification service (APNs) |  [Next](push.google.php) |

## Apple Status Codes

<a class="indexterm" name="idp478992"></a>

The `DLV_Response_Status` context variable returns codes specific to the protocol used (except when no errors are encountered). When a message is successful, DLV_Response_Status does not exist. Use [msys.apn.apn_status_classifier](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.apn.apn_status_classifier.php) to determine the error type.

The APNs codes are as follows:

<a name="push.apple.error.table"></a>

**Table B.1. APNs Status Codes**

| APNs Code | Description | Type |
| --- | --- | --- |
| 0 | No Errors Encountered |   |
| 1 | Processing Error | Temporary Failure |
| 2 | Missing Device Token | Permanent Failure |
| 3 | Missing Topic | Permanent Failure |
| 4 | Missing Payload | Permanent Failure |
| 5 | Invalid Token Size | Permanent Failure |
| 6 | Invalid Topic Size | Permanent Failure |
| 7 | Invalid Payload Size | Permanent Failure |
| 8 | Invalid Token | Permanent Failure |
| 10 | Shutdown | Temporary Failure |
| 255 | None (unknown) | Temporary Failure |

The previous table shows Apple status codes at the time of writing. See [Provider Communication with Apple Push Notification Service](https://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/Chapters/CommunicatingWIthAPS.html) to confirm these values.

| [Prev](push.maintaining.php)  | [Up](push.apple.php) |  [Next](push.google.php) |
| Appendix A. Maintaining APNs Recipient Lists  | [Table of Contents](index.php) |  Part II. Configuring Momentum for Google Cloud Messages (GCM) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)