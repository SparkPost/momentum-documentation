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

| 1.2. Other Configuration Options Used with APNs |
| [Prev](apns.apn_expiry.php)  | Chapter 1. APNs Options |  [Next](apns.modules.php) |

## 1.2. Other Configuration Options Used with APNs

Other options not directly related to APNs must also be set in order to use this service.

### 1.2.1. `routes` and Related Options

In order to configure Momentum for delivery of Apple push notifications you must use the [routes](https://support.messagesystems.com/docs/web-ref/conf.ref.routes.php) and [delivery_method](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_method.php) options. You can also set the [delivery_response_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_response_timeout.php) and [idle_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.idle_timeout.php) options as needed. Set these options in the following way:

```
domain "apn_example.com"{
  ...
  idle_timeout = 10
  delivery_response_timeout = 1000
  delivery_method = "apn"
  routes = ("apn://gateway.push.apple.com?port=2195")
}
```

Set `delivery_method` to `apn`. `idle_timeout` allows a `0` value which usually means the connection is persistent and will not timeout. A zero value should never be used for Apple push.

Set `routes` to the `apn` protocol, the `gateway.push.apple.com` URL and use port `2195`. In a production environment the URL for `routes` is `gateway.push.apple.com`. In a development environment you can set this option to `gateway.sandbox.push.apple.com`.

### Note

If you change `routes` at runtime and issue the ec_console command config reload, any messages that are in process will continue to use the currently active connection. As soon as all active messages have been sent, the connection will close and any new connections will use the latest configuration values.

In this context, `delivery_response_timeout` defines the length of time, in milliseconds, to wait for an APNs error response. This value should be set to at least the Round Trip Time (RTT) between your host and the APNs and must be less than the value of [idle_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.idle_timeout.php). You can determine your RTT by pinging the APNs server.

If you set `delivery_response_timeout` too low, Momentum will erroneously indicate that a submission was successful before receiving a failure response from APNs. In short, a failure in APNs will be logged and processed as success by Momentum. If you set this too high, messages will stay too long in memory and increase overhead.

### 1.2.2. Permit Multi-Channel Message Type (MCMT) Reception

Apple notifications are sent as MCMT messages so a listener must be configured to allow this. To allow reception of injected MCMT messages set the `MCMT_Reception` option within the ESMTP_Listener as shown below:

```
esmtp_listener {
  listen ":25"{
    mcmt_reception = "allow"
    ...
  }
}
```

If MCMT messages are not allowed, notifications will either be treated as regular email or rejected depending on the settings. For more information about this option see [The MCMT_Reception Option](https://support.messagesystems.com/docs/web-mobility/mm7.mcmt_reception.php).

<a name="push.apn.listener.rest"></a>

**Using the REST Injector**

Momentum supports an HTTP REST injection API and has done so since version 3.1.4\. You can use REST injection and an HTTP Listener to send push notifications. Unlike the SMTP listener, there is no `mcmt_reception` option within the HTTP_Listener scope. *This listener is always MCMT enabled* . You can add an HTTP listener by adding the following stanza to your `ecelerity.conf` file:

```
http_listener {
  listen ":8081" {}
}
```

To use REST injection you must also configure the httpsrv and restinjector modules as described in [The Momentum REST Injector](https://support.messagesystems.com/docs/web-mc-rest/).

You can create a MCMT message as described at [Section 3.1, “Message Injection and the APNs Payload”](apns.using.php#apns.using.mcmt "3.1. Message Injection and the APNs Payload").

### 1.2.3. TLS

APNs requires a secure connection using an SSL certificate issued by Apple. For this reason the following Momentum TLS options must be set:

*   [tls](https://support.messagesystems.com/docs/web-ref/conf.ref.tls.php) – set this option to `required`. *Note*: currently, whether this option is set or not, a TLS connection with APNs will be attempted.

*   [tls_verify](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_verify.php) – set this option to `no`

*   [tls_certificate](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_certificate.php) – the certificate supplied by Apple

    Provide the full path to a `PEM` version of the `.cer` file provided by Apple, which can be converted in the following way: **openssl x509 -in *`apple-cert.cer`* -inform der -out *`mycert.pem`***                                                            

*   [tls_key](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_key.php) – the key for the iOS app provided by APNs

    The value for this option should be the full path to a `PEM` version of your iOS app's `.p12` (pkcs12) key. This key is provided by Apple and can be converted using the following commands.

    *   **openssl pkcs12 -in *`your-app.p12`* -out *`mykey-pass.pem`***                                                    

    *   **openssl rsa -in *`mykey-pass.pem`* -out *`mykey.pem`***                                              

    ### Warning

    Be careful when performing this conversion. If you don't provide a pass phrase for the generated key created by the first command, there will **not** be an error. Consequently, the key will not be included in the generated PEM and you will have to strip the password in a separate operation.

*   [tls_ciphers](https://support.messagesystems.com/docs/web-ref/conf.ref.tls_ciphers.php) – the list of ciphers

Follow the preceding links for information on configuring these options.

### Note

SSL certificates are issued for specific apps. If you wish to send push notifications to multiple apps you must have a certificate for each app.

If you configure APNs with a valid self-signed certificate that was not issued by APNs, the message is retried numerous times and is not affected by [mx_failures_to_delay](https://support.messagesystems.com/docs/web-ref/conf.ref.mx_failures_to_delay.php).

### 1.2.4. Outbound Connections and APNs

Connections to APNs are established on demand. To handle heavy traffic from a specific customer to a particular app, multiple connections to APNs can be established. Use the configuration option [max_outbound_connections](https://support.messagesystems.com/docs/web-ref/conf.ref.max_outbound_connections.php) to control the maximum number of connections to APNs on a domain/binding level. Notifications to an app will be spread over all available connections.

A connection will remain open until one of the following events occurs:

*   The connection has been idle for the configured length of time

*   An error response is received from APNs

*   There are exceptions on the connection

*   License expiration

### 1.2.5. Momentum and APNs

In order to set up APNs you should also be familiar with the following sections of the Momentum Reference Manual (3.x):

*   [domain scope](https://support.messagesystems.com/docs/web-ref/conf.ref.domain.php) – To configure APNs for a specific domain, you will need to use this option

*   [Configuration Scopes and Fallback](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.fallback.php) – This section of the manual describes how configuration options are scoped

*   [Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php) – To configure APNs, you will need to change the `ecelerity.conf` file.

*   [Logging](https://support.messagesystems.com/docs/web-ref/operations.logging.php) – This section describes how the Momentum logging API works. The apn_logger works in the same way as other Momentum loggers.

| [Prev](apns.apn_expiry.php)  | [Up](apns.options.php) |  [Next](apns.modules.php) |
| apn_expiry  | [Table of Contents](index.php) |  Chapter 2. APN Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)