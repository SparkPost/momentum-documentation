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

| Chapter 3. Using APNs |
| [Prev](apns.modules.apn_logger.php)  | Part I. Configuring Momentum for Apple Push Notification service (APNs) |  [Next](apns.disabling.php) |

## Chapter 3. Using APNs

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Message Injection and the APNs Payload](apns.using.php#apns.using.mcmt)</dt>

<dt>[3.2\. Disabling APNs](apns.disabling.php)</dt>

</dl>

You can use Momentum to send push notifications to an application running on an Apple device. As prerequisites you must have an app registered with Apple and also the SSL certificate provided by Apple. You must be licensed by Message Systems to use Momentum's push notification capabilities; if you do not have a license contact your Sales Engineer or Account Manager to acquire one. If you do not have a license or it has expired, messages will be permanently failed. If these prerequisites are met, you can configure Momentum to send Apple push notifications by following these steps:

1.  If you are not configuring push notifications in a global scope, determine which domains you will be using. Configuring a domain is described at [domain](https://support.messagesystems.com/docs/web-ref/conf.ref.domain.php). Note that the Momentum configuration options listed at [Section 1.1, “APNs-specific Configuration Option”](apns.options.php#apns.apns-specific.options "1.1. APNs-specific Configuration Option") are valid within the global and the domain scope but are not valid within the binding::domain scope.

2.  Configure the TLS options shown at [Section 1.2.3, “TLS”](apns.other.options.php#apns.other.options.tls "1.2.3. TLS"). Configure these options in the scope appropriate to your circumstances.

3.  Configure the `routes`, `delivery_method` and `delivery_response_timeout` options as described at [Section 1.2.1, “`routes` and Related Options”](apns.other.options.php#apns.other.options.routes "1.2.1. routes and Related Options").

4.  Set the [max_outbound_connections](apns.other.options.php#apns.outbound.connections "1.2.4. Outbound Connections and APNs") option if appropriate.

5.  Set `MCMT_Reception` to `allow` within the ESMTP_Listener scope.

6.  Add the apn module to the `ecelerity.conf` file. In a test environment you can set the apn module [debug_level](https://support.messagesystems.com/docs/web-ref/modules.overview.implicit.php) option to debug the application.

7.  If you wish to log notifications, add the apn_logger module to the `ecelerity.conf` file.

8.  After making these changes to the configuration file you must restart the ecelerity process; running the console command **`config reload`**         will not suffice. For information on starting the ecelerity process see [ec_ctl](https://support.messagesystems.com/docs/web-ref/executable.ec_ctl.php).

9.  Create a notification for injection as described at [Section 3.1, “Message Injection and the APNs Payload”](apns.using.php#apns.using.mcmt "3.1. Message Injection and the APNs Payload") and [The Multi-Channel Message Type](https://support.messagesystems.com/docs/web-mob-dev/mob.dev.guide.mcmt.php).

A sample configuration follows:

<a name="apns.configuring.apns"></a>

**Example 3.1. Configuring for APNs**

```
esmtp_listener {
  listen ":25"{
    mcmt_reception = "allow"
  }
}
domain "apn_example.com" {
  # TLS
  # Currently the "tls" option is ignored by APN
  # but explicitly configure it anyway
  tls = "required"
  # Set other TLS options
  tls_verify = "no"
  tls_certificate = "/path/to/cert"
  tls_key = "/path/to/key"
  tls_ciphers = "DEFAULT"
  max_outbound_connections = 20
  delivery_response_timeout = 1000
  delivery_method = "apn"
  routes = ("apn://gateway.push.apple.com?port=2195")
  # set any other options here
  ...
}

# The APN server
apn {}
# optional apn_logger module
apn_logger "apn_logger1" {
  logmode = 0644
  logfile = "/var/log/ecelerity/apnlog.ec"
  heartbeat = 60
}
```

APNs requires that you identify the APNs server so you must configure the `routes` option and, to configure it for a production environment, it must be set to `gateway.push.apple.com`. The `routes` option is used in conjunction with `delivery_method` and this must be set to `apn`. If you wish to log APNs notifications, add the apn_logger module to your configuration file. Use of this module is optional.

Since push notifications require an SSL certificate (supplied by Apple) the Momentum TLS options must be configured to reference these credentials.

### Note

Using Lua, you can convert and reroute messages upon failure. See [Section 9.1, “generic_delivery_msg_dispose”](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose "9.1. generic_delivery_msg_dispose").

After configuring `ecelerity.conf`, you can send push notifications as a MCMT MIME payload.

## 3.1. Message Injection and the APNs Payload

The apn module recognizes the "push" part of an MCMT message. In the 3.5.4 release there is support for MCMT injection of APNs messages. Similar to existing transmission channels such as SMTP, SMS, MMS and XMPP, APNs Notifications can be created or modified based on the following scheme:

```
--MCMT_BOUNDARY
  Content-Type: message/vnd.msys.apn

  X-Device-Token: 123acb90ffa0978cbade354ddffee76665a

  {
    "aps" : {
      "alert" : "You have mail",
      "badge" : 9,
      "sound" : "dingdong.aiff"
     },
     "app-key" : "bar",
  }
```

### Note

The extra newline just before the X-Device-Token header is required.

Push notifications are sent as regular MIME payloads. The `Content-Type` for an Apple notification should be set to `message/vnd.msys.apn`. The actual message is a set of key/value pairs encoded in JSON. APNs has specific key names such as `alert`, `badge` etc. that must be present. See [Apple Push Notification Service](https://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/Chapters/ApplePushService.html) for more information. For more detail about the MCMT message format see [The Multi-Channel Message Type (MCMT)](https://support.messagesystems.com/docs/web-mob-dev/mob.dev.guide.mcmt.php).

The following MIME headers for a MCMT push part are handled:

*   X-Device-Token – The destination device token in hex format. When sending notifications via APNs, you must provide this identifier. It is typically stored in the backend and retrieved when a notification is injected. If it is not specified as a header, the module will look for it in the `DLV_Dest_ID` context variable.

    ### Note

    `X-Device-Token` corresponds to [Device Token](push.gloss.php#gloss.device_token "Device Token").

*   Return-Path – The email address that will be used for "bounces" (permanent failures). This defaults to the Mail-From.

    ### Note

    There are no bounces in Apple Push notifications, but because the code used in the apn module is the same code that handles permanently failed email messages, the "bounce" behavior is the same as failed emails.

*   Content-Transfer-Encoding – This defaults to "7bit" for an ASCII payload. Otherwise, set it to "base64" for non-US-ASCII characters or binary date. The payload has to be encoded accordingly.

| [Prev](apns.modules.apn_logger.php)  | [Up](push.apple.php) |  [Next](apns.disabling.php) |
| 2.2. The apn_logger Module  | [Table of Contents](index.php) |  3.2. Disabling APNs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)