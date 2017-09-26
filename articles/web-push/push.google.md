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

| Part II. Configuring Momentum for Google Cloud Messages (GCM) |
| [Prev](push.apple.error.php)  |   |  [Next](push.gcm.options.php) |

## Part II. Configuring Momentum for Google Cloud Messages (GCM)

## Overview of Google Push Notifications

<a name="gcm.overview.start"></a>If you have an application running on an Android device, you can use Momentum to generate push notifications in the same way that it generates messages for other channels.

Google push notifications originate with Google Cloud Messaging (GCM) and are received by applications running on Android devices. Application providers must register with Google in order to send push notifications to their applications and users of applications running on Android devices must agree to accept these notifications. The application must also be programmed to do something whenever it receives a notification.

Momentum can act on behalf of an application provider and send Google push notifications. The following diagram gives an overview of the entire process involved in sending Google Push notifications:

<a name="gcm.overview.figure"></a>

**Figure 2. GCM Overview**

![](images/google_push.jpg)

Note that in step three the client app communicates a registration ID to the provider. This registration ID must be supplied whenever a notification is injected.

This document describes how to configure Momentum so that push notifications can be sent via Google to recipients running applications on an Android device. The GCM-related options are documented as are the GCM-related modules. If you are already familiar with Momentum, you can proceed with configuring Momentum for GCM by going directly to [Chapter 7, *Using GCM*](push.gcm.using.php "Chapter 7. Using GCM") .

**Table of Contents**

<dl class="toc">

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

| [Prev](push.apple.error.php)  |   |  [Next](push.gcm.options.php) |
| Appendix B. Apple Status Codes  | [Table of Contents](index.php) |  Chapter 5. GCM Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)