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

| delivery_method |
| [Prev](conf.ref.delayed_queue_scan_interval.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.delivery_pool.php) |

<a name="conf.ref.delivery_method"></a>
## Name

delivery_method — set the delivery method

## Synopsis

`Delivery_Method = "ESMTP"`

`Delivery_Method = "SMTP"`

`Delivery_Method = "LMTP"`

`Delivery_Method = "ECSTREAM"`

`Delivery_Method = "APN"`

`Delivery_Method = "GCM"`

`Delivery_Method = "MM7"`

<a name="idp8893536"></a>
## Description

This option directs Momentum to perform deliveries via ESMTP, LMTP (Local Mail Transport Protocol), SMTP, ECSTREAM, APN, GCM and MM7.

The `ECSTREAM` option is available as of version 3.1.4\. `ESMTP` is the default value for this option.

Use `apn` to deliver Apple push notifications.

Use `gcm` to deliver Google push notifications.

Use `mm7` for multimedia messaging.

<a name="conf.ref.delivery_method.push"></a>
## Delivery Methods in Version 3.5.6

As of version 3.5.6 and higher the `delivery_method` option can also be defined as:

*   `apn` – The Apple Push Notification protocol

*   `gcm` – The Google Cloud Messages protocol

*   `mm7` – For the mm7 protocol

The `delivery_method` option is used in combination with [routes](conf.ref.routes.php "routes"). Use `delivery_method` in the following way:

```
domain "apn_example.com"{
  ...
  delivery_method = "apn"
  routes = ("apn://gateway.push.apple.com?port=2195")
}
domain "gcm.example.com" {
  ...
  delivery_method = "gcm"
  routes = ("gcm://android.google.apis.com?port=443")
}
```

Typically, with push notifications `delivery_method` will be defined within a domain scope applicable to the Apple or Google application that is receiving the notifications. For a detailed description of configuring Momentum for push notifications see [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/).

For domain configuration when the `delivery_method` is `mm7` see [Domain Configuration for MM7](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.config.php).

<a name="idp8914032"></a>
## Scope

`delivery_method` is valid in the binding, binding_group, domain and global scopes.

<a name="idp8916112"></a>
## See Also

[lmtp_port](conf.ref.lmtp_port.php "lmtp_port"), [ecstream_port](conf.ref.ecstream_port.php "ecstream_port"), [routes](conf.ref.routes.php "routes"), [msg:get_delivery_method](lua.ref.msg_get_delivery_method.php "msg:get_delivery_method"), [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/)

| [Prev](conf.ref.delayed_queue_scan_interval.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.delivery_pool.php) |
| delayed_queue_scan_interval  | [Table of Contents](index.php) |  delivery_pool |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)