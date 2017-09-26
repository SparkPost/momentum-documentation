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

| 3.2. The MM7 Modules |
| [Prev](quickmob.config.modules.php)  | Chapter 3. Configuring the Mobile Momentum Modules |  [Next](quickmob.config.web.stats.php) |

## 3.2. The MM7 Modules

There are four MM7 modules: mm7, mm7_serv, mms_logger and mms_bounce_logger. The mm7 module, the MM7 client is loaded automatically as required so we need not be concerned with it. You only need to configure it if you wish to set the debug level.

### 3.2.1. mm7_serv Module

MM7 defines the standards used between a Multimedia Messaging service (MMS) value added service (VAS) application and a MMS center. MM7 is used to send messages from third party providers (e.g., a bank sending a statement or an advertiser sending publicity). It is based on SOAP with attachments, using HTTP as the transport protocol.

A sample configuration follows:

<a name="quickmob.example.mm7_serv"></a>

**Example 3.3. mm7_serv configuration**

```
mm7_serv {
  mm7_server_default_email_from_address = "test@messagesystems.com"
  mm7_server_default_email_from_domain = "messagesystems.com"
  mm7_server_default_email_to_address = "test@exampleto.com"
  mm7_server_default_email_to_domain = "exampleto.com"
  mm7_server_version = "6.8.0"
  mm7_vasp_uri_paths =  ("/ringtones/" "/photo_contest/" "/email_gateway/")
}
```

You must add this module to your configuration file if you wish to run an MM7 server. You can do this using the web UI or as described in "[Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php)".

For detailed instructions regarding this module's configuration options see "[The mm7_server Module](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.php#mobility.configuration.mm7)".

**3.2.1.1. HTTP_Listener**

The HTTP_listener is new in Mobile Momentum. It is a listener module that can enclose Peer and Listen scopes like other listeners. All the options that are valid in the SMTP_Listener scope and its nested Peer and Listen scopes are likewise valid in the HTTP_Listener scope and its nested scopes. For a complete list of these options see "[The Listener Options](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#listener-options)".

Since the MM7 protocol uses SOAP calls, configuring an MM7 server requires that this listener be configured. Find an example below:

<a name="quickmob.config.httplistener"></a>

**Example 3.4. HTTP_Listener**

```
HTTP_Listener {
  Listen ":8089" { }
  Listen "[::1]:8089" {}
}
```

In this case the listener is listening on port 8089 and the server will responds to URIs configured using the mm7_serv module `MM7_VASP_URI_Paths` option. These are SOAP endpoints.

URI paths are registered to the HTTP_Listener by the mm7 server. When the HTTP_Listener recognizes a registered URI, it wakes the mm7 server with the incoming mm7 XML SOAP message.

Your aggregator or mobile network provider will supply the URI path names it will use when sending MM7 SOAP web service requests. You will specify those on the MM7_VASP_URI_Paths configuration parameter

For more details about the HTTP_Listener see "[HTTP_Listener](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)".

### 3.2.2. The mms_logger Module

It is often convenient to look at MM7 messages only. The mms_logger makes this much easier by writing to a single file in ‘@’ delimited format.

A sample configuration follows:

<a name="quickmob.example.mms_logger"></a>

**Example 3.5. mms_logger configuration**

```
mms_logger "mms_logger1" {
  logmode = 0644
  logfile = "/var/log/ecelerity/mmslog.ec"
  heartbeat = 60
}
```

You must add this module to your configuration file if you wish to log MMS events. You can do this using the web UI or as described in "[Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php)".

You may not need to change any of the configuration options from their default values. For detailed instructions regarding this module's configuration options see "[The mms_logger Module](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_logger.php)".

### 3.2.3. mms_bounce_logger Module

It is often convenient to look at bounced MM7 messages only. The mms_bounce_logger makes this much easier by writing bounces—both in-band and out-of-band bounce messages—to a single file in ‘@’ delimited format.

A sample configuration follows:

<a name="quickmob.example.mms_bounce"></a>

**Example 3.6. mms_bounce_logger configuration**

```
mms_bounce_logger "mms_bounce_logger1" {
  bounce_logmode = 0644
  bounce_logfile = "/var/log/eclerity/mmsbouncelog.ec"
  heartbeat = 60
}
```

You must add this module to your configuration file if you wish to log MMS bounces separately. You can do this using the web UI or as described in "[Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php)".

You may not need to change any of the configuration options from their default values. For detailed instructions regarding this module's configuration options see "[The mms_bounce_logger Module](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.mms_bounce_logger.php)".

| [Prev](quickmob.config.modules.php)  | [Up](quickmob.config.modules.php) |  [Next](quickmob.config.web.stats.php) |
| Chapter 3. Configuring the Mobile Momentum Modules  | [Table of Contents](index.php) |  3.3. Configuring for Web UI Stats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)