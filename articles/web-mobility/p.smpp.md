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

| Part I. Mobile Momentum SMPP |
| [Prev](preface.php)  |   |  [Next](overview.php) |

## Part I. Mobile Momentum SMPP

**Table of Contents**

<dl class="toc">

<dt>[1\. Overview of Mobile Momentum](overview.php)</dt>

<dd>

<dl>

<dt>[1.1\. Architecture](overview.php#overview-architecture)</dt>

<dt>[1.2\. The Short Message Peer-to-Peer Protocol (SMPP) ESME Module](overview.smppesme.php)</dt>

<dt>[1.3\. Message Conversions, Transformations, and Mappings](overview-SmppEmailSMS.php)</dt>

<dt>[1.4\. Installing Momentum](overview.installing.php)</dt>

</dl>

</dd>

<dt>[2\. Mobile Momentum SMPP](momentum.mobility.php)</dt>

<dd>

<dl>

<dt>[2.1\. The smpp Modules](momentum.mobility.php#modules.mobility.smpp_logger)</dt>

<dt>[2.2\. Persistent Connections](mobility.persistent.connections.php)</dt>

<dt>[2.3\. Throttling](mobility.throttling.php)</dt>

<dt>[2.4\. SMPP Caveats](mobility.smpp.caveats.php)</dt>

<dt>[2.5\. smpp_logger Module Configuration](mobility.configuration.smpp.php)</dt>

<dt>[2.6\. The smpp_bounce_logger Module](modules.mobility.smpp_bounce_logger.php)</dt>

<dt>[2.7\. Message Context Variables](mobility.runtime.php)</dt>

<dt>[2.8\. SMS Conversion Hook Points](mobility.runtime.hooks.php)</dt>

</dl>

</dd>

<dt>[3\. Mobile Momentum SMPP Options](mobility.smpp.options.php)</dt>

<dd>

<dl>

<dt>[3.1\. SMPP Configuration Option Details](mobility.smpp.options.php#mobility.conf)</dt>

</dl>

</dd>

<dt>[4\. Use Cases](admin.use.cases.php)</dt>

<dd>

<dl>

<dt>[4.1\. Route to SMS Matching a Regex in the Subject Header](admin.use.cases.php#admin.use.case.regex)</dt>

<dt>[4.2\. Route to SMS Based on the Recipient Address](admin.use.case.recipient.address.php)</dt>

<dt>[4.3\. Route to SMS Based on the Sender IP Address](admin.use.case.sender.ip.php)</dt>

<dt>[4.4\. Route to SMS Based on the Sender Address](admin.use.case.sender.address.php)</dt>

</dl>

</dd>

<dt>[5\. SMPP Configuration Best Practices](mobility.best.practices.php)</dt>

<dd>

<dl>

<dt>[5.1\. SMSC Bind Parameters](mobility.best.practices.php#mobility.best.practices.bind.params)</dt>

<dt>[5.2\. Message Conversion Parameters](mobility.best.practices.conversion.php)</dt>

<dt>[5.3\. SMPP Timer Parameters](mobility.best.practices.timer.params.php)</dt>

<dt>[5.4\. Delivery Receipts](mobility.best.practices.delivery.receipts.php)</dt>

<dt>[5.5\. Persistent Connections](mobility.best.practices.persistent.cnnections.php)</dt>

<dt>[5.6\. SMS to Email Address Mappings](mobility.best.practices.sms.to.email.php)</dt>

<dt>[5.7\. Throttling](mobility.best.practices.throttling.php)</dt>

<dt>[5.8\. SMPP Logging](mobility.best.practices.logging.php)</dt>

<dt>[5.9\. Message Mode](mobility.best.practices.message.mode.php)</dt>

</dl>

</dd>

<dt>[6\. FAQ](faq.php)</dt>

<dd>

<dl>

<dt>[6.1\. Configuration](faq.php#faq-mobility1)</dt>

<dt>[6.2\. Domains](faq-mobility2.php)</dt>

</dl>

</dd>

</dl>

| [Prev](preface.php)  |   |  [Next](overview.php) |
| Preface  | [Table of Contents](index.php) |  Chapter 1. Overview of Mobile Momentum |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)