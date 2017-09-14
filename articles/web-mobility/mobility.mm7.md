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

| Chapter 7. Mobile Momentum MM7 |
| [Prev](p.mm7.php)  | Part II. Mobile Momentum MMS |  [Next](mobility.mm7.mms_logger.php) |

## Chapter 7. Mobile Momentum MM7

**Table of Contents**

<dl class="toc">

<dt>[7.1\. The mm7_serv Module](mobility.mm7.php#mobility.configuration.mm7)</dt>

<dt>[7.2\. The mms_logger Module](mobility.mm7.mms_logger.php)</dt>

<dt>[7.3\. The mms_bounce_logger Module](mobility.mm7.mms_bounce_logger.php)</dt>

<dt>[7.4\. Multi Protocol Domain Naming](mobility.mm7.multiprotocol.php)</dt>

<dt>[7.5\. The `MCMT_Reception` option](mm7.mcmt_reception.php)</dt>

<dt>[7.6\. Listener Configuration for MCMT](mobility.mm7.listener.php)</dt>

<dt>[7.7\. Aggregator-specific Requirements](mobility.mm7.aggregator.specific.php)</dt>

<dt>[7.8\. Configuration for MM7](mobility.mm7.config.php)</dt>

</dl>

MM7 defines the standards used between a Multimedia Messaging service (MMS) value added service (VAS) application and a MMS center. MM7 is used to send messages from third party providers (e.g., a bank sending a statement or an advertiser sending publicity). It is based on SOAP with attachments, using HTTP as the transport protocol.

This document describes how to configure Momentum for Multimedia messaging. For a discussion of MM7 hook points see "[MM7 Hooks](https://support.messagesystems.com/docs/web-mob-dev/p.mm7.php)".

## 7.1. The mm7_serv Module

The Mobile Momentum MM7 Server provides the MM7 Value Added Service Provider (VASP) implementations of the Deliver, Delivery Report, and Read Reply Report MM7 transactions. The MM7 Server is configured using the HTTP_Listener and MM7_Serv stanzas. This section describes the configuration of the mm7_serv module.

### Note

The HTTP_Listener is described in detail in "[HTTP_Listener](https://support.messagesystems.com/docs/web-rest-injector/rest.http_listener.php)".

<a name="idp973120"></a>

**Example 7.1. mm7_serv module configuration**

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

<dl class="variablelist">

<dt>mm7_server_default_email_from_address</dt>

<dd>

This option defines the default FROM email address used for constructing source email addresses when converting MM7 requests to email. This parameter is used when the sender from the SOAP envelope is a short code or telephone number.

There is no default value for this option.

</dd>

<dt>mm7_server_default_email_from_domain</dt>

<dd>

This option defines the default FROM email domain used for constructing source email domains when converting MM7 requests to email. This parameter is used when the sender from the SOAP envelope is a short code or telephone number.

There is no default value for this option.

</dd>

<dt>mm7_server_default_email_to_address</dt>

<dd>

This option defines the default TO email address.

There is no default value for this option.

</dd>

<dt>mm7_server_default_email_to_domain</dt>

<dd>

This option defines the default TO email domain.

There is no default value for this option.

</dd>

<dt>mm7_vasp_uri_paths</dt>

<dd>

A list of URI path components that the MM7 server will register with the HTTP listener. You must provide the path component for each URI you intend to have handled by the MM7 server. A slash (‘`/`’) must be the last character in each path component name.

Suppose the host mm7.example.com uses Mobile Momentum and is configured with: `mm7_vasp_uri_paths = ("/ringtones/" "/photo_contest/" "/email_gateway/")` Then the following URIs are serviced by the Mobile Momentum MM7 server:

*   http://mm7.example.com/ringtones/

*   http://mm7.example.com/photo_contest/

*   http://mm7.example.com/email_gateway/

There is no default value for this option.

</dd>

<dt>mm7_server_version</dt>

<dd>

This option defines the MM7 version number.

The default value for this option is `6.8.0`.

</dd>

</dl>

| [Prev](p.mm7.php)  | [Up](p.mm7.php) |  [Next](mobility.mm7.mms_logger.php) |
| Part II. Mobile Momentum MMS  | [Table of Contents](index.php) |  7.2. The mms_logger Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)