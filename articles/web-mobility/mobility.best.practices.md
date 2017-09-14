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

| Chapter 5. SMPP Configuration Best Practices |
| [Prev](admin.use.case.sender.address.php)  | Part I. Mobile Momentum SMPP |  [Next](mobility.best.practices.conversion.php) |

## Chapter 5. SMPP Configuration Best Practices

**Table of Contents**

<dl class="toc">

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

This chapter describes best practices for Mobile Momentum including configurations for various usage scenarios.

## 5.1. SMSC Bind Parameters

SMSC bind parameters (also called bind credentials), specify the values needed to enter a bound state on an SMPP connection. The SMPP connection must be in a bound state before SMS messages may be sent or received on the SMPP connection. Bind parameter values will be supplied by your SMS network operator.

1.  `SMPP_SMSC_Server` – host name or IP address of the SMSC

2.  `SMPP_SMSC_Port` – port number for the SMPP TCP connection

3.  `SMPP_SMSC_System_ID` – Subscriber ESME User ID

4.  `SMPP_SMSC_Password` – Password

5.  `SMPP_SMSC_System_Type` – System type

6.  `SMPP_ESME_Address` – ESME telephone number or short code

7.  `SMPP_Bind_Type` – Specify if the SMPP connection is transmitter only, receiver only, or transceiver (default transceiver)

Below is an example of the bind credential specification in the domain stanza. Mobile Momentum connects to the SMSC at `10.0.0.1` port `2776` and supplies the system id of `GSMSGW`, password `secret`, and system type `CMT` in the default SMPP bind_transceiver request. SMS messages sent to the short code `67890` will be routed to this SMPP connection by the carrier and/or aggregator networks. `67890` will be the sending telephone number of Mobile Momentum SMS transmissions on this connection.

```
domain "somewhere.com" {
  SMPP_SMSC_Server  = "10.0.0.1"
  SMPP_SMSC_Port = "2776"
  SMPP_SMSC_System_ID = "GSMSGW"
  SMPP_SMSC_Password = "secret"
  SMPP_SMSC_System_Type = "CMT"
  SMPP_ESME_Address = "67890"
  ...
}
```

| [Prev](admin.use.case.sender.address.php)  | [Up](p.smpp.php) |  [Next](mobility.best.practices.conversion.php) |
| 4.4. Route to SMS Based on the Sender Address  | [Table of Contents](index.php) |  5.2. Message Conversion Parameters |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)