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

| Momentum for Mobile Push Notifications |
|   |   |  [Next](preface.php) |

## Momentum for Mobile Push Notifications

### Message Systems, Inc.

Copyright © 2013, 2014 Message Systems, Inc.

<a name="idp146240"></a>

Confidential & Proprietary.

2017-Aug-09

**Abstract**

This book documents how to configure Momentum to send push notifications using the Apple Push Notification server and the Google Cloud Message server.

Document generated: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](preface.php)</dt>

<dt>[I. Configuring Momentum for Apple Push Notification service (APNs)](push.apple.php)</dt>

<dd>

<dl>

<dt>[1\. APNs Options](apns.options.php)</dt>

<dd>

<dl>

<dt>[1.1\. APNs-specific Configuration Option](apns.options.php#apns.apns-specific.options)</dt>

<dt>[1.2\. Other Configuration Options Used with APNs](apns.other.options.php)</dt>

</dl>

</dd>

<dt>[2\. APN Modules](apns.modules.php)</dt>

<dd>

<dl>

<dt>[2.1\. apn Module](apns.modules.php#apns.apn_module)</dt>

<dt>[2.2\. The apn_logger Module](apns.modules.apn_logger.php)</dt>

</dl>

</dd>

<dt>[3\. Using APNs](apns.using.php)</dt>

<dd>

<dl>

<dt>[3.1\. Message Injection and the APNs Payload](apns.using.php#apns.using.mcmt)</dt>

<dt>[3.2\. Disabling APNs](apns.disabling.php)</dt>

</dl>

</dd>

<dt>[4\. APNs and Lua](push.apns.lua.php)</dt>

<dd>

<dl>

<dt>[4.1\. Lua Callouts](push.apns.lua.php#apns.hooks.lua.callouts)</dt>

</dl>

</dd>

<dt>[A. Maintaining APNs Recipient Lists](push.maintaining.php)</dt>

<dt>[B. Apple Status Codes](push.apple.error.php)</dt>

</dl>

</dd>

<dt>[II. Configuring Momentum for Google Cloud Messages (GCM)](push.google.php)</dt>

<dd>

<dl>

<dt>[5\. GCM Options](push.gcm.options.php)</dt>

<dd>

<dl>

<dt>[5.1\. GCM-specific Configuration Options](push.gcm.options.php#push.gcm.gcm-specific.options)</dt>

<dt>[5.2\. Other Configuration Options Used with GCM](push.gcm.other.options.php)</dt>

</dl>

</dd>

<dt>[6\. GCM Modules](push.gcm.modules.php)</dt>

<dd>

<dl>

<dt>[6.1\. gcm Module](push.gcm.modules.php#push.modules.gcm)</dt>

<dt>[6.2\. gcm_logger Module](push.modules.gcm_logger.php)</dt>

</dl>

</dd>

<dt>[7\. Using GCM](push.gcm.using.php)</dt>

<dd>

<dl>

<dt>[7.1\. Message Injection and the GCM Payload](push.gcm.using.php#push.gcm.using.mcmt)</dt>

<dt>[7.2\. Disabling GCM](push.gcm.disabling.php)</dt>

</dl>

</dd>

<dt>[8\. GCM and Lua](push.gcm.lua.php)</dt>

<dd>

<dl>

<dt>[8.1\. Lua Callouts](push.gcm.lua.php#gcm.hooks.lua.callouts)</dt>

</dl>

</dd>

<dt>[C. GCM Status Codes](push.gcm.error.php)</dt>

</dl>

</dd>

<dt>[III. Generic HTTP Delivery and Push](push.generic_delivery.php)</dt>

<dd>

<dl>

<dt>[9\. Callouts and Push Notifications](push.generic_delivery_lua.php)</dt>

<dd>

<dl>

<dt>[9.1\. generic_delivery_msg_dispose](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose)</dt>

<dt>[9.2\. http_request_eval](push.http_request_eval.php)</dt>

<dt>[9.3\. http_response_eval](push.http_response_eval.php)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[Glossary](push.gloss.php)</dt>

</dl>

[List of Figures](figure-toc.php)[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](preface.php) |
|   |   |  Preface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)