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

| Chapter 6. GCM Modules |
| [Prev](push.gcm.other.options.php)  | Part II. Configuring Momentum for Google Cloud Messages (GCM) |  [Next](push.modules.gcm_logger.php) |

## Chapter 6. GCM Modules

**Table of Contents**

<dl class="toc">

<dt>[6.1\. gcm Module](push.gcm.modules.php#push.modules.gcm)</dt>

<dt>[6.2\. gcm_logger Module](push.modules.gcm_logger.php)</dt>

</dl>

In order to configure Momentum for GCM you must use the `gcm` module. If you wish to log GCM notifications, then you will also need to configure the `gcm_logger` module.

## 6.1. gcm Module

**Configuration Change. ** This feature is available as of version 3.5.5.

The gcm module is a requirement if you wish to use the Google Cloud Messaging service. It creates the JSON-encoded message for delivery to the GCM server using HTTP Post requests. This module also handles HTTP Post *responses*, implementing a mechanism to retry messages and provide permanent failure processing for messages that fail or are not accepted for delivery by GCM servers.

### 6.1.1. Configuration

`gcm {}`

There are no options for this module other than the two common to all modules, namely `enabled` and `debug_level`. For more information see [Module Overview](https://support.messagesystems.com/docs/web-ref/modules.overview.implicit.php).

In a cluster configuration, the gcm module must be enabled on each MTA node used to deliver Google Push notifications.

### 6.1.2. Context Variables

There is only one context variable specifically associated with Google and that is `GCM_Retry_After` which corresponds to the Google `Retry-After` field. Other context variables are the generic delivery context variables beginning with `DLV_`. For a list of these variables see [Chapter 9, *Callouts and Push Notifications*](push.generic_delivery_lua.php "Chapter 9. Callouts and Push Notifications") .

You can access these variables from a script and use them to customize the behavior of Momentum or to customize the content of notifications. They are also used by the gcm_logger module.

| [Prev](push.gcm.other.options.php)  | [Up](push.google.php) |  [Next](push.modules.gcm_logger.php) |
| 5.2. Other Configuration Options Used with GCM  | [Table of Contents](index.php) |  6.2. gcm_logger Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)