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

| 5.2. Other Configuration Options Used with GCM |
| [Prev](push.gcm.gcm_ttl.php)  | Chapter 5. GCM Options |  [Next](push.gcm.modules.php) |

## 5.2. Other Configuration Options Used with GCM

Other options not directly related to GCM must also be set in order to use this service.

### 5.2.1. `delivery_method` and Related Options

As of Momentum version 3.5.6, the [delivery_method](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_method.php) option includes a number of additional connection types, `gcm`, an HTTP protocol, being one of them. When using GCM, you must set `delivery_method` to this value.

In order to configure Momentum for delivery of Google push notifications you must also use the [routes](https://support.messagesystems.com/docs/web-ref/conf.ref.routes.php) option and set the [delivery_response_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_response_timeout.php) option and the [idle_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.idle_timeout.php) options. Configure these options in the following way:

```
domain "gcm.example.com"{
  ...
  idle_timeout = 10
  delivery_response_timeout = 1000
  delivery_method = "gcm"
  routes = ("gcm://android.google.apis.com?port=443")
}
```

Set `routes` to the `gcm` protocol, the `android.google.apis.com` URL and use port `443`. For testing purposes you can set the [gcm_dry_run](push.gcm.gcm_dry_run.php "gcm_dry_run") option to `true`. There is no "sandbox" URL as there is for Apple push.

### Note

If you change `routes` at runtime and issue the ec_console command config reload, any messages that are in process will continue to use the currently active connection. As soon as any active messages are sent, the connection will close and any new connections will use the latest configuration values.

The `delivery_reponse_timeout` option must be set and it must be `1000` (1 sec) or greater. This is the maximum time that GCM will wait for a response. If it does not get a response in that amount of time it will temporarily fail the message and go on to the next one. A setting of less than `1000` will not work for GCM.

When used with GCM, `idle_timeout` specifies the time (in seconds)that a connection will remain open while waiting for the current active message (or for another message to be sent). It must be a positive integer greater than `0`. If the timer expires it will close the connection. In other delivery protocols, `0` indicates that the the connection is a persistent connection. GCM does not support persistent connections and for this reason `idle_timeout` should never be set to `0`.

**5.2.1.1. HTTP Protocol Configuration**<a class="indexterm" name="idp789184"></a>

Google push notifications also make use of the generic HTTP protocol configuration options introduced in Momentum 3.5.6. You must configure the following options with the values indicated:

```
http_uri = "/gcm/send"
http_host = "android.google.apis.com"
```

### Note

You can view Google push connections using the console command, [show outbound](https://support.messagesystems.com/docs/web-ref/console_commands.show_outbound.php).

You need not configure the following options because their default values, `POST` and `1.1`, meet the GCM requirements:

```
http_method = "post" 
http_version = "1.1"
```

Do not use `http_basic_auth` with GCM because it defaults to `NULL`.

For a detailed description of these options see [http_basic_auth](https://support.messagesystems.com/docs/web-ref/conf.ref.http_basic_auth.php) and following.

### 5.2.2. Permit MCMT Reception

Google notifications are sent as Multi-Channel Message Type (MCMT) messages so a listener must be configured to allow this. To allow reception of injected MCMT messages set the `MCMT_Reception` option within the ESMTP_Listener as shown below:

```
esmtp_listener {
  listen ":25"{
    mcmt_reception = "allow"
  }
}
```

Messages with MCMT content will be accepted and they will be directed to the GCM module based on the envelope recipient domain.

If MCMT messages are not allowed, notifications will either be treated as regular email or rejected depending on the settings. For more information about this option see [The mcmt_reception Option](https://support.messagesystems.com/docs/web-mobility/mm7.mcmt_reception.php).

<a name="push.gcm.listener.rest"></a>

**Using the REST Injector**

Momentum supports an HTTP REST injection API and has done so since version 3.1.4\. You can use REST injection and an HTTP Listener to send push notifications. Unlike the SMTP listener, there is no `mcmt_reception` option within the HTTP_Listener scope. *This listener is always MCMT enabled* . You can add an HTTP listener by adding the following stanza to your `ecelerity.conf` file:

```
http_listener {
  listen ":8081" {}
}
```

To use REST injection you must also configure the httpsrv and restinjector modules as described in [The Momentum REST Injector](https://support.messagesystems.com/docs/web-mc-rest/).

You can create a MCMT message as described at [Section 7.1, “Message Injection and the GCM Payload”](push.gcm.using.php#push.gcm.using.mcmt "7.1. Message Injection and the GCM Payload").

### 5.2.3. TLS

GCM requires a secure connection. For this reason the following Momentum TLS options must be set:

*   [tls](https://support.messagesystems.com/docs/web-ref/conf.ref.tls.php) – set this option to `required`.

*   [tls_verify](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_verify.php) – set this option to `no`

Follow the preceding links for information about configuring these options.

### 5.2.4. Outbound Connections and GCM

Connections to GCM are established on demand. To handle heavy traffic from a specific customer to a particular app, multiple connections to GCM can be established. Use the configuration option [max_outbound_connections](https://support.messagesystems.com/docs/web-ref/conf.ref.max_outbound_connections.php) to control the maximum number of connections to GCM on a domain/binding level. Notifications to an app will be spread over all available connections.

A connection will remain open until one of the following events occurs:

*   The connection has been idle for the configured length of time

*   An error response is received from Google

*   There are exceptions on the connection

*   License expiration

### 5.2.5. Momentum and GCM

In order to set up GCM you should also be familiar with the following sections of the Momentum Reference Manual (3.x):

*   [domain scope](https://support.messagesystems.com/docs/web-ref/conf.ref.domain.php) – To configure GCM for a specific domain, you will need to use this option. A Google GCM domain is characterized as a domain that has the `routes` option specified as `"gcm://android.google.apis.com?port=443"` in the domain stanza. It is suggested that you include `GCM` or `gcm` as part of the name as a convention but it is not a requirement.

*   [Configuration Scopes and Fallback](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.fallback.php) – This section of the manual describes how configuration options are scoped

*   [Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php) – To configure GCM, you will need to change the `ecelerity.conf` file.

*   [Logging](https://support.messagesystems.com/docs/web-ref/operations.logging.php) – This section describes how the Momentum logging API works. The gcm_logger works in the same way as other Momentum loggers.

| [Prev](push.gcm.gcm_ttl.php)  | [Up](push.gcm.options.php) |  [Next](push.gcm.modules.php) |
| gcm_ttl  | [Table of Contents](index.php) |  Chapter 6. GCM Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)