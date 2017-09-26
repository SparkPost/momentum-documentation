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

| Glossary |
| [Prev](push.http_response_eval.php)  |   |   |

## Glossary

<dl>

<dt><a name="push.gloss.apns"></a>Apple Push Notification server (APNs)</dt>

<dd class="glossdef">

The Apple Push Notification service (APNs) is a gateway for push notifications sent to Apple devices. Apple defines push notifications in the following way:

“Push notifications—also known as remote notifications—arrive from outside a device. They originate on a remote server—the application’s provider—and are pushed to applications on devices (via the Apple Push Notification service) when there are messages to see or data to download.”

*Note*: Apple uses the acronym `APNs` for the Apple Push Notification service. This document follows the same convention.

</dd>

<dt><a name="push.gloss.ccs"></a>Cloud Connection Server (CCS)</dt>

<dd class="glossdef">

This is an alternate method of sending Google push notifications. It is described by Google at [Google Cloud Messaging for Android](http://developer.android.com/google/gcm/index.html):

“GCM's Cloud Connection Service (CCS) lets you communicate with Android devices over a persistent XMPP connection. The primary advantages of CCS are speed, and the ability to receive upstream messages (that is, messages from a device to the cloud).”

CCS has the advantage of supporting persistent TCP connections, using the XMPP protocol, sending messages asynchronously and support for bidirectional communication. CCS is not supported in the initial release of Momentum for push notifications.

</dd>

<dt><a name="gloss.device_token"></a>Device Token</dt>

<dd class="glossdef">

This terminology is specific to APNs and is described by Apple at [Apple Push Notification Service](https://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/Chapters/ApplePushService.html):

“The device token is analogous to a phone number; it contains information that enables APNs to locate the device on which the client application is installed. APNs also uses it to authenticate the routing of a notification.”

When sending notifications via APNs, you must provide this identifier. It is typically stored in the backend and retrieved when a notification is injected. It is set in the `X-Device-Token` header. If it is not specified as a header, the module will look for the ID in the `DLV_Dest_ID` context variable. The equivalent GCM identifier is [Registration ID](push.gloss.php#gloss.registration_id "Registration ID").

</dd>

<dt><a name="push.gloss.gcm"></a>Google Cloud Messaging (GCM)</dt>

<dd class="glossdef">

Google defines Google Cloud Messaging in the following way:

“Google Cloud Messaging for Android (GCM) is a service that allows you to send data from your server to your users' Android-powered device, and also to receive messages from devices on the same connection.”

Currently, Momentum only supports GCM. See also [Cloud Connection Server](push.gloss.php#push.gloss.ccs "Cloud Connection Server").

</dd>

<dt><a name="push.gloss.mcmt"></a>Multi-Channel Message Type (MCMT)</dt>

<dd class="glossdef">

A Multi-Channel Message Type (MCMT) message is a multi-part MIME message. A MCMT message has a required email attachment with the Content-Type: `message/rfc2822` and optionally other parts with content suitable for delivery over non-email channels such as SMPP and MM7\. For push notifications, MCMT messages carry the JSON payload.

See [The MCMT_Reception option](https://support.messagesystems.com/docs/web-mobility/mm7.mcmt_reception.php) for a description of configuring Momentum for MCMT reception.

</dd>

<dt><a name="gloss.registration_id"></a>Registration ID</dt>

<dd class="glossdef">

This terminology is specific to GCM and is described by Google at [Google Cloud Messaging for Android](http://developer.android.com/google/gcm/gcm.html):

“An ID issued by the GCM servers to the Android application that allows it to receive messages. Once the Android application has the registration ID, it sends it to the 3rd-party application server, which uses it to identify each device that has registered to receive messages for a given Android application. In other words, a registration ID is tied to a particular Android application running on a particular device.”

When sending a GCM notification you must provide this identifier. It is typically stored in the backend and retrieved when a notification is injected. It is set in the `X-Registration-ID` header. If it is not specified as a header, the module will look for the ID in the `DLV_Dest_ID` context variable.

</dd>

<dt><a name="push.gloss.send-to-sync"></a>Send-to-sync Message</dt>

<dd class="glossdef">

As described by Google at [Google Cloud Messaging for Android](http://developer.android.com/google/gcm/index.html):

“A send-to-sync (collapsible) message is often a "tickle" that tells a mobile application to sync data from the server. For example, suppose you have an email application. When a user receives new email on the server, the server pings the mobile application with a "New mail" message. This tells the application to sync to the server to pick up the new email.”

</dd>

</dl>

| [Prev](push.http_response_eval.php)  |   |   |
| 9.3. http_response_eval  | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)