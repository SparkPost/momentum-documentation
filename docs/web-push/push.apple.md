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

| Part I. Configuring Momentum for Apple Push Notification service (APNs) |
| [Prev](preface.php)  |   |  [Next](apns.options.php) |

## Part I. Configuring Momentum for Apple Push Notification service (APNs)

## Overview of Apple Push Notifications

<a name="apns.overview.start"></a>The Apple Push Notification service (APNs) is a gateway for push notifications sent to Apple devices. Apple defines push notifications in the following way:

“Push notifications—also known as remote notifications—arrive from outside a device. They originate on a remote server—the application’s provider—and are pushed to applications on devices (via the Apple Push Notification service) when there are messages to see or data to download. ”

If you have an application running on iOS or OS X, you can use Momentum to generate push notifications in the same way that it generates messages for other channels.

In order to send push notifications, on the server side you need the Apple server to send notifications and on the client side—the application running on the Apple device—you need the capability to do something when a notification is received.

Momentum is capable of sending push notifications. How this is done is shown in the following diagram:

<a name="apns.overview.figure"></a>

**Figure 1. APNs Overview**

![](images/apple_push.jpg)

Push notifications require an SSL certificate (step one) supplied by Apple to the application provider. Momentum is configured to reference these credentials in order to communicate with Apple. The Apple server then relays the notification to the application running on the Apple device, initiating an exchange of data between the device and the application provider.

Note that in step three the client app communicates a device token to the provider. This device token must be supplied whenever a notification is injected.

There is an APNs feedback service that maintains a record of failed-delivery attempts. APNs feedback service is not supported in this release but will be supported in a future release.

For more information about APNs see [About Local Notifications and Push Notifications](http://developer.apple.com/library/ios/#documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/Introduction.html).

This document describes how to configure Momentum so that push notifications can be sent via APNs to recipients with Apple devices. The APNs-related options are documented as are the APNs-related modules. If you are already familiar with Momentum, you can proceed with configuring Momentum for APNs by going directly to [Chapter 3, *Using APNs*](apns.using.php "Chapter 3. Using APNs") .

**Table of Contents**

<dl class="toc">

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

| [Prev](preface.php)  |   |  [Next](apns.options.php) |
| Preface  | [Table of Contents](index.php) |  Chapter 1. APNs Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)