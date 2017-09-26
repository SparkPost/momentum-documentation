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

| idle_timeout |
| [Prev](conf.ref.http_version.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.inbound_throttle_messages.php) |

<a name="conf.ref.idle_timeout"></a>
## Name

idle_timeout — time to maintain idle outbound connections

## Synopsis

`idle_timeout = 5`

<a name="idp9882736"></a>
## Description

The amount of time in seconds to hold open an idle connection when there are no messages currently deliverable for that domain. Momentum holds SMTP sessions open for this amount of time in case another message should enter the queue destined for that host. The default value for this option is `5`.

<a name="conf.ref.idle_timeout.push"></a>
## Usage in Version 3.5.6

As of version 3.5.6 the `idle_timeout` option is also used to define idle connections for Apple Push Notifications (APN), Google Cloud Messages (GCM) and MM7.

Use this option in the following way:

```
domain "apn_example.com"{
  ...
  delivery_method = "apn"
  routes = ("apn://gateway.push.apple.com?port=2195")
  idle_timeout = 10
  delivery_response_timeout = 1000
}
domain "gcm.example.com" {
  ...
  delivery_method = "gcm"
  routes = ("gcm://android.google.apis.com?port=443")
  idle_timeout = 10
  delivery_response_timeout = 1000
}
domain "mm7.example.com" { 
  ...
  delivery_method = "mm7"
  http_basic_auth = "admin:admin" 
  mm7_vasid = "test_domain_vas_id" 
  mm7_vaspid = "test_global_vasp_id" 
  mm7_message_class="personal" 
  mm7_delivery_report="true"
  idle_timeout = 300
  ..." 
}
```

For a detailed description of configuring Momentum for push notifications see [Momentum for Mobile Push Notifications](https://support.messagesystems.com/docs/web-push/). For configuring MM7 see [Mobile Momentum MM7](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.php).

<a name="idp9891184"></a>
## Scope

`idle_timeout` is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.http_version.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.inbound_throttle_messages.php) |
| http_version  | [Table of Contents](index.php) |  inbound_throttle_messages |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)