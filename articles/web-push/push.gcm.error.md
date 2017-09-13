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

| Appendix C. GCM Status Codes |
| [Prev](push.gcm.lua.php)  | Part II. Configuring Momentum for Google Cloud Messages (GCM) |  [Next](push.generic_delivery.php) |

## GCM Status Codes

<a class="indexterm" name="idp683376"></a>

The `DLV_Response_Status` context variable returns codes specific to the protocol used except when no errors are encountered. When a message is successful, DLV_Response_Status does not exist. Use [msys.gcm.gcm_classify_error](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.gcm.gcm_classify_error.php) to determine the error type.

The GCM codes are as follows:

<a name="push.gcm.error.table"></a>

**Table C.1. GCM Status Codes**

| Value | GCM Code | Type |
| --- | --- | --- |
| 0 | GCM_NO_ERROR | N/A |
| 1 | GCM GCM_UNAVAILABLE | Temporary |
| 2 | GCM_MISSING_REGISTRATION | Permanent |
| 3 | GCM_INVALID_REGISTRATION | Permanent |
| 4 | GCM_MISMATCH_SENDER_ID | Permanent |
| 5 | GCM_NOT_REGISTERED | Permanent |
| 6 | GCM_MESSAGE_TOO_BIG | Permanent |
| 7 | GCM_INVALID_DATA_KEY | Permanent |
| 8 | GCM_INVALID_TTL | Permanent |
| 9 | GCM_INTERNAL_SERVER_ERROR | Temporary |
| 10 | GCM_INVALID_PACKAGE_NAME | Permanent |

The previous table shows GCM status codes at the time of writing. To confirm these values check the Google Android developer site.

| [Prev](push.gcm.lua.php)  | [Up](push.google.php) |  [Next](push.generic_delivery.php) |
| Chapter 8. GCM and Lua  | [Table of Contents](index.php) |  Part III. Generic HTTP Delivery and Push |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)