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

| Chapter 7. Using GCM |
| [Prev](push.modules.gcm_logger.php)  | Part II. Configuring Momentum for Google Cloud Messages (GCM) |  [Next](push.gcm.disabling.php) |

## Chapter 7. Using GCM

**Table of Contents**

<dl class="toc">

<dt>[7.1\. Message Injection and the GCM Payload](push.gcm.using.php#push.gcm.using.mcmt)</dt>

<dt>[7.2\. Disabling GCM](push.gcm.disabling.php)</dt>

</dl>

You can use Momentum to send push notifications to an application running on an Android device. As prerequisites the application and a whitelist of IP addresses allowed to send notifications to the application must be registered with Google. You must be licensed by Message Systems to use Momentum's push notification capabilities; if you do not have a license contact your Sales Engineer or Account Manager to acquire one. If you do not have a license or it has expired, messages will be permanently failed. If these prerequisites are met, you can configure Momentum to send Google push notifications by following these steps:

1.  Determine which domains you will be configuring as Google push domains and configure them as described at [domain](https://support.messagesystems.com/docs/web-ref/conf.ref.domain.php).

2.  Configure the TLS options shown at [Section 5.2.3, “TLS”](push.gcm.other.options.php#push.gcm.other.options.tls "5.2.3. TLS"). Configure these options in the scope appropriate to your circumstances.

3.  Configure the `routes`, `delivery_method` and related options as described at [Section 5.2.1, “`delivery_method` and Related Options”](push.gcm.other.options.php#push.gcm.other.options.delivery_method "5.2.1. delivery_method and Related Options").

4.  Set the [max_outbound_connections](push.gcm.other.options.php#push.gcm.outbound.connections "5.2.4. Outbound Connections and GCM") option if appropriate.

5.  Set `mcmt_reception` to `allow` within the esmtp_listener scope.

6.  Add the gcm module to the `ecelerity.conf` file. In a test environment you can set the gcm module [debug_level](https://support.messagesystems.com/docs/web-ref/modules.overview.implicit.php) option to debug the application. You can also set the [gcm_dry_run](push.gcm.gcm_dry_run.php "gcm_dry_run") option to `true`.

7.  If you wish to log notifications, add the gcm_logger module to the `ecelerity.conf` file.

8.  After making these changes to the configuration file you must restart the ecelerity process; running the console command **`config reload`**         will not suffice. For information on starting the ecelerity process see [ec_ctl](https://support.messagesystems.com/docs/web-ref/executable.ec_ctl.php).

9.  Create a notification for injection as described at [Section 7.1, “Message Injection and the GCM Payload”](push.gcm.using.php#push.gcm.using.mcmt "7.1. Message Injection and the GCM Payload") and [The Multi-Channel Message Type](https://support.messagesystems.com/docs/web-mob-dev/mob.dev.guide.mcmt.php).

A sample configuration follows:

<a name="push.gcm.configuring.gcm"></a>

**Example 7.1. Configuring for GCM**

esmtp_listener {
  listen ":25"{
    mcmt_reception = "allow"
  }
}
#HTTP options, the same for all domains
http_uri = "/gcm/send"    
http_host = "android.googleapis.com" 

domain "gcm.example.com" {
  # TLS
  tls = "required"
  tls_verify = "no"

  max_outbound_connections = 20

  http_uri = "/gcm/send"
  gcm_authorization_token_id = "*`123acb90ffa0978cbade354ddffee76665a`*"
  gcm_application_id = "com.example.GCMpush"
  idle_timeout = 10
  delivery_response_timeout = 1000
  delivery_method = "gcm"
  routes = ("gcm://android.googleapis.com?port=443")
  # set any other domain options here
  ...
}

# The GCM server
gcm {}
# optional gcm_logger module
gcm_logger "gcm_logger1" {
  logmode = 0644
  logfile = "/var/log/ecelerity/gcmlog.ec"
  heartbeat = 60
}

Configure the `routes` option to identify the GCM server and set the `delivery_method` to `gcm`; `routes` must be `gcm://android.googleapis.com?port=443`. You must also set the `gcm_authorization_token_id` to the value provided by Google. Configuring `http_uri` and `http_host` to the values indicated above is also a requirement.

If you wish to log GCM notifications, add the gcm_logger module to your configuration file. Use of this module is optional.

In [Example 7.1, “Configuring for GCM”](push.gcm.using.php#push.gcm.configuring.gcm "Example 7.1. Configuring for GCM") only one domain is configured for one app. If you have multiple apps that you wish to send push notifications to, a separate domain must be configured for each application.

Since push notifications require a secure connection, the Momentum TLS options must be configured.

### Note

Using Lua you can convert and reroute messages upon failure. See [Section 9.1, “generic_delivery_msg_dispose”](push.generic_delivery_lua.php#push.generic_delivery_lua.msg_dispose "9.1. generic_delivery_msg_dispose").

After adding this configuration to `ecelerity.conf`, you can inject push notifications as a MCMT MIME payload.

## 7.1. Message Injection and the GCM Payload

The gcm module recognizes the "push" part of an MCMT message and creates the JSON-encoded message for delivery to the GCM server. In the current release there is support for MCMT injection of GCM messages. Similar to existing transmission channels such as SMTP, SMS, MMS and XMPP, GCM Notifications can be created or modified based on the following scheme:

```
--MCMT_BOUNDARY
  Content-Type: message/vnd.msys.gcm
  X-Registration-ID: 123i1u90yeyrouehqouchwfiouhwourhgoiashoduahfoearifaehu
  {
    "alert" : "You have email",
    "time" : "15:10"
  }
```

Push notifications are sent as regular MIME payloads. For more detail about the MCMT message format see [The Multi-Channel Message Type (MCMT)](https://support.messagesystems.com/docs/web-mob-dev/mob.dev.guide.mcmt.php).

The `Content-Type` header is required. `X-Registration-ID` is also usually required. If it is not specified the module will look for the ID in the `DLV_Dest_ID` context variable which can be set in the GCM or httpclnt `request_eval` hook. `X-Registration-ID` identifies a recipient's device and application and Google uses this to determine to whom and where to send notifications.

### Note

`X-Registration-ID` corresponds to the [Registration ID](push.gloss.php#gloss.registration_id "Registration ID").

The `Content-Type` for a Google notification should be set to `message/vnd.msys.gcm`. The fields in the JSON object are user-defined and will mean something to the application that receives the notification.

If you want to send an alert without an actual text message then use empty braces, `{}`, which is a null message. If there is no text in the MCMT body then the message will fail. For messages with content, the JSON object is a series of key/value pairs which are defined by what the application expects.

```
{
  "key1": "value1",
  "key1": "value2",
  ...
}
```

There is no limit to the number of pairs as long as the entire message doesn't exceed 4 KB.

The MCMT Header extensions that the Momentum GCM module will accept and encode are as follows:

*   `X-Registration-ID` – The registration ID is a requirement for messages sent to Google's GCM server. If this header is not set, then the `DLV_Dest_ID` context variable must be set. This header corresponds to Google's `registration_ids` message field. For HTTP injections to GCM, Google supports an array of up to 1000 recipients.

*   `X-Time-To-Live` – This header extension corresponds to the `time_to_live` GCM message field and specifies a value in seconds. If the value is zero the message is considered a "now or never message"; GCM servers will make a best attempt but will not store the message on their server for future deliver if it is not delivered. Otherwise this value specifies the period of time over which attempts should be made. The default, as defined by the GCM specifications, is 4 weeks (expressed as seconds) which is also the maximum.

*   `X-Delay-While-Idle` – This corresponds header extension to the `delay_while_idle` GCM message field. This optional value defaults to `false` indicates whether or not GCM servers will wait for the device to become active before sending and, even then, only the last message per collapse key is actually sent. For a description of a collapse key see [Send-to-sync Message](push.gloss.php#push.gloss.send-to-sync "Send-to-sync Message").

*   `X-Application-ID` – This header extension corresponds to the optional GCM message field `restricted_package_name`. Messages will only be delivered if the destination's application package name matches this string. If this header extension is not present, the GCM module will encode a corresponding value for the application id from the [gcm_application_id](push.gcm.gcm_application_id.php "gcm_application_id") found in the domain or global scope. If there is no value for this option, then the field will not be present in the notification message sent to GCM servers and no package checking will occur for delivery.

*   `X-Collapse-Key` – This header extension corresponds to the optional GCM message field `collapse_key`. This is used to collapse a group of messages so that if the device is offline only one message for that group is ultimately sent. *The actual message that gets sent for the group is not necessarily the last message the GCM server has received for that group.*                                                                                                                             The collapse key is a convenience feature for [sync-to-send](push.gloss.php#push.gloss.send-to-sync "Send-to-sync Message") type alerts or messages.

*   `X-Dry-Run` – This option allows you to specify [gcm_dry_run](push.gcm.gcm_dry_run.php "gcm_dry_run") at the message level. This option is for testing purposes only.

| [Prev](push.modules.gcm_logger.php)  | [Up](push.google.php) |  [Next](push.gcm.disabling.php) |
| 6.2. gcm_logger Module  | [Table of Contents](index.php) |  7.2. Disabling GCM |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)