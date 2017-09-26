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

| Preface |
| [Prev](index.php)  |   |  [Next](push.apple.php) |

## Preface

Using HTTP (or HTTPS) as the transport protocol, Momentum can generate push notifications to mobile devices in the same way that it generates messages for other channels.

### Note

A "Mobile Push" license is required to enable all supported Momentum Mobile Push protocols.

Creating push notifications extends Momentum and leverages existing technologies:

*   `Injection` – Push notifications use existing injection protocols.

*   `Delivery` – Delivery modules implement the specifics for each type of push notification. The new modules are configured in the same way as existing modules.

*   `Logging` – Optional loggers are available for all types of push notifications.

*   `Extensibility` – Existing hook points and new module-specific hook points are accessible from both Lua and C allowing for customized solutions, integrating push notification with Momentum's existing multi-channel capabilities.

Momentum version 3.5.4 introduces support for Apple push notifications and version 3.5.5 introduces support for Google push notifications. If you are only interested in Apple notifications go directly to [Overview of Apple Push Notifications](push.apple.php#apns.overview.start); for Google notifications go to [Overview of Google Push Notifications](push.google.php#gcm.overview.start).

| [Prev](index.php)  |   |  [Next](push.apple.php) |
| Momentum for Mobile Push Notifications  | [Table of Contents](index.php) |  Part I. Configuring Momentum for Apple Push Notification service (APNs) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)