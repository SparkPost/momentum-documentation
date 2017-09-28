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

| Chapter 2. APN Modules |
| [Prev](apns.other.options.php)  | Part I. Configuring Momentum for Apple Push Notification service (APNs) |  [Next](apns.modules.apn_logger.php) |

## Chapter 2. APN Modules

**Table of Contents**

<dl class="toc">

<dt>[2.1\. apn Module](apns.modules.php#apns.apn_module)</dt>

<dt>[2.2\. The apn_logger Module](apns.modules.apn_logger.php)</dt>

</dl>

In order to configure Momentum for APNs you must use the `apn` module. If you wish to log APNs notifications, then you will also need to configure the `apn_logger` module.

## 2.1. apn Module

**Configuration Change. ** This feature is available as of version 3.5.4.

The apn module is a requirement if you wish to use the Apple Push Notification service.

### 2.1.1. Configuration

`apn { }`

There are no options for this module other than the two common to all modules, namely `enabled` and `debug_level`. For more information see [Module Overview](https://support.messagesystems.com/docs/web-ref/modules.overview.implicit.php).

In a cluster configuration, the apn module must be enabled on each MTA node used to deliver Apple Push notifications.

| [Prev](apns.other.options.php)  | [Up](push.apple.php) |  [Next](apns.modules.apn_logger.php) |
| 1.2. Other Configuration Options Used with APNs  | [Table of Contents](index.php) |  2.2. The apn_logger Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)