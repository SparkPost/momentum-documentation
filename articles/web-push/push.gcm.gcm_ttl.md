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

| gcm_ttl |
| [Prev](push.gcm.gcm_dry_run.php)  | 5.1. GCM-specific Configuration Options |  [Next](push.gcm.other.options.php) |

<a name="push.gcm.gcm_ttl"></a>
## Name

gcm_ttl — Default Time To Live for notifications

## Synopsis

`gcm_ttl = -1`

<a name="idp752288"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.5.5.

The default Time To Live (TTL) value for notification messages to live in the GCM Server system specified in seconds. This value is encoded into the JSON notification "time_to_live" field but can be overridden by the `X-Time-To-Live` header extension. See [Section 7.1, “Message Injection and the GCM Payload”](push.gcm.using.php#push.gcm.using.mcmt "7.1. Message Injection and the GCM Payload").

Valid values for this option are:

*   `-1` – Use Google's default maximum TTL (`2419200`).

*   `0` – Send the message immediately and if the device is inactive, abandon it.

*   `1` to `2419200` – The time to live in seconds. The maximum value is 4 weeks expressed in seconds (`2419200`).

The default value for this option is `-1` indicating that you wish to use Google's default maximum (`2419200`).

<a name="idp765344"></a>
## Scope

`gcm_ttl` is valid in the global, binding_group, binding and domain scopes.

| [Prev](push.gcm.gcm_dry_run.php)  | [Up](push.gcm.options.php#push.gcm.gcm-specific.options) |  [Next](push.gcm.other.options.php) |
| gcm_dry_run  | [Table of Contents](index.php) |  5.2. Other Configuration Options Used with GCM |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)