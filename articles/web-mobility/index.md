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

| Mobile Momentum Reference Manual |
|   |   |  [Next](preface.php) |

## Mobile Momentum Reference Manual

### Message Systems, Inc.

Copyright © 2009-2014 Message Systems, Inc.

<a name="idp134672"></a>

Confidential & Proprietary.

**Abstract**

This book is an administration guide for Mobile Momentum.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](preface.php)</dt>

<dd>

<dl>

<dt>[1\. Typographical Conventions Used in This Document](preface.php#typographical)</dt>

</dl>

</dd>

<dt>[I. Mobile Momentum SMPP](p.smpp.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[II. Mobile Momentum MMS](p.mm7.php)</dt>

<dd>

<dl>

<dt>[7\. Mobile Momentum MM7](mobility.mm7.php)</dt>

<dd>

<dl>

<dt>[7.1\. The mm7_serv Module](mobility.mm7.php#mobility.configuration.mm7)</dt>

<dt>[7.2\. The mms_logger Module](mobility.mm7.mms_logger.php)</dt>

<dt>[7.3\. The mms_bounce_logger Module](mobility.mm7.mms_bounce_logger.php)</dt>

<dt>[7.4\. Multi Protocol Domain Naming](mobility.mm7.multiprotocol.php)</dt>

<dt>[7.5\. The `MCMT_Reception` option](mm7.mcmt_reception.php)</dt>

<dt>[7.6\. Listener Configuration for MCMT](mobility.mm7.listener.php)</dt>

<dt>[7.7\. Aggregator-specific Requirements](mobility.mm7.aggregator.specific.php)</dt>

<dt>[7.8\. Configuration for MM7](mobility.mm7.config.php)</dt>

</dl>

</dd>

<dt>[8\. Mobile Momentum MM7 Options](mobility.mm7.options.php)</dt>

<dd>

<dl>

<dt>[8.1\. MM7 Configuration Option Details](mobility.mm7.options.php#mm7.conf)</dt>

</dl>

</dd>

<dt>[9\. Aggregator APIs](mobility.aggregator.apis.php)</dt>

<dd>

<dl>

<dt>[9.1\. The mBlox API](mobility.aggregator.apis.php#mobility.aggregator.apis.mblox)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[III. Mobile Momentum XMPP](p.xmpp.php)</dt>

<dd>

<dl>

<dt>[10\. Mobile Momentum XMPP](mobility.xmpp.modules.php)</dt>

<dd>

<dl>

<dt>[10.1\. The XMPP Module and Listener](mobility.xmpp.modules.php#modules.xmpp)</dt>

<dt>[10.2\. The XMPP Logger Module](modules.xmpp_logger.php)</dt>

<dt>[10.3\. Roster and Presence](mobility.xmpp.modules.roster.presence.php)</dt>

<dt>[10.4\. Lua XMPP Functions](xmpp.lua.functions.php)</dt>

<dt>[10.5\. Converting MCMT to XMPP](mcmt2xmpp.php)</dt>

<dt>[10.6\. Filtering Out Chat State Notifications](mcmt2xmpp.caveat.php)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[IV. Retrying Messages](p.retry.php)</dt>

<dd>

<dl>

<dt>[11\. Retrying Messages](mobility.message.retry.php)</dt>

<dd>

<dl>

<dt>[11.1\. The mstore Module](mobility.message.retry.php#mobility.message.retry.modules.mstore)</dt>

<dt>[11.2\. Message Retention](mobility.message.retry.retention.php)</dt>

</dl>

</dd>

</dl>

</dd>

<dt>[Glossary](glossary.php)</dt>

<dt>[A. Acronyms](acronyms.php)</dt>

<dt>[B. Command Status Codes](status_codes.php)</dt>

<dt>[C. SMPP PDU Operation Definitions](smpp_pdu.definitions.php)</dt>

</dl>

[List of Figures](figure-toc.php)[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](preface.php) |
|   |   |  Preface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)