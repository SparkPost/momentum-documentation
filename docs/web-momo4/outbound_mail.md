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

| Chapter 25. Configuring Outbound Mail Delivery |
| [Prev](multi_event_loops.php)  | Part III. Configuring Momentum |  [Next](outbound_mail.prohibited.hosts.php) |

## Chapter 25. Configuring Outbound Mail Delivery

**Table of Contents**

<dl class="toc">

<dt>[25.1\. Routing Mail](outbound_mail.php#outbound_mail.routing.mail)</dt>

<dt>[25.2\. Prohibited_Hosts](outbound_mail.prohibited.hosts.php)</dt>

<dt>[25.3\. MultiVIP© Interfaces](outbound_mail.multivip.interfaces.php)</dt>

<dt>[25.4\. Throttling and Traffic Shaping](outbound_mail.traffic.shaping.php)</dt>

<dt>[25.5\. Outbound TLS](tls_option.php)</dt>

<dt>[25.6\. Outbound XCLIENT support](outbound_mail.outbound.xclient.php)</dt>

<dt>[25.7\. Outbound Email Relay](outbound_mail.relay_hosts.php)</dt>

</dl>

## 25.1. Routing Mail

By default, Momentum will use DNS to resolve the MX records for a destination domain to decide which machine(s) it will connect to when delivering the mail. You can override the use of MX records using the `Gateway` or `Routes` configuration options. When set, Momentum will attempt to resolve the gateway using MX records. If there are no MX records, it will attempt to resolve it as an A record and use the resultant list of IP addresses. The gateway option can be set per binding, per domain, or at the global level. In addition, you can configure either LMTP or SMTP for delivery methods, and specify the remote port number to use, allowing a great deal of flexibility in customizing routing.

The following is an example configuration in the `ecelerity.conf` file:

```
# route all mail to a "smart host"
Gateway = 10.10.10.50

# Except for mail for local.example.com
Domain local.example.com {
  # which is routed to this address
  Gateway = 10.10.10.20
  # using LMTP
  Delivery_Method = LMTP
}
```

| [Prev](multi_event_loops.php)  | [Up](p.configuration.php) |  [Next](outbound_mail.prohibited.hosts.php) |
| Chapter 24. Configuring Multiple Event Loops  | [Table of Contents](index.php) |  25.2. Prohibited_Hosts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)