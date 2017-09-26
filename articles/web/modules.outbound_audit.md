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

| 14.39. outbound_audit – Outbound traffic analytics |
| [Prev](modules.mtamark.php)  | Chapter 14. Modules Reference |  [Next](modules.persistio.php) |

## 14.39. outbound_audit – Outbound traffic analytics

<a class="indexterm" name="idp12398224"></a>

The outbound_audit module provides time-series analytics on the behavior of receiving domains. It is designed to help spot emergent issues, such as blocking, tarpitting, etc. The outbound_audit module differs from the standard analytics available in Momentum in that it allows you to compare short-term real-time data with data from earlier time windows. This makes it easy to spot changes in behavior.

### 14.39.1. Configuration

<a name="example.outbound_audit"></a>

**Example 14.59. outbound_audit module**

```
Logger logging/outbound_audit outbound_audit
{
  monitor = 300,6
  monitor = 1800,12
  monitor_domains = on
  threshold = 100
}
```

Valid configuration parameters are:

<dl class="variablelist">

<dt>domainlist = domain1[,domain2,...]</dt>

<dd>

Hardcode a list of domains that you want to store data for. This overrides and supercedes the `threshold` setting.

</dd>

<dt>monitor = window-size, number-of-windows</dt>

<dd>

Create monitoring windows *window-size* seconds long, and maintain *number-of-windows* windows historically. In the examples above, we create 2 different time-series: 5 minutes for the past half hour, and 30 minutes for the past 6 hours.

</dd>

<dt>monitor_domains = (on|off)</dt>

<dd>

Monitor individual domains, or simply hold global time-series data.

</dd>

<dt>threshold = size</dt>

<dd>

Only store time-series data for domains if they have transited more than *size* messages. This helps control memory usage by not storing long-term data for small domains.

</dd>

</dl>

### 14.39.2. Usage

Using system console commands you can query the outbound_audit module's time-series data, as shown in the following:

11:32:29 ecelerity(2025)> outbound_audit:*`outbound_audit1`* show domain aol.com
aol.com 300/0: r: 107 d: 111 dt: 8.20 t: 2 f: 0
aol.com 300/1: r: 190 d: 168 dt: 8.65 t: 1 f: 0
aol.com 300/2: r: 143 d: 154 dt: 8.91 t: 0 f: 0
aol.com 300/3: r: 264 d: 283 dt: 8.87 t: 1 f: 1
aol.com 300/4: r: 240 d: 216 dt: 9.16 t: 3 f: 0
aol.com 300/5: r: 194 d: 207 dt: 6.60 t: 0 f: 0
aol.com 300/6: r: 264 d: 248 dt: 7.78 t: 3 f: 0

The fields for this output are as follows:

<dl class="variablelist">

<dt>domain</dt>

<dd>

The domain name of the receiving domain being queried.

</dd>

<dt>window size/window offset</dt>

<dd>

The size of the window being displayed, plus the number of the window. Thus `300/0` is the current 5 minute window, while `300/2` is the 5 minute window that occured 10 minutes ago (i.e 2 windows back from current).

</dd>

<dt>r: receptions</dt>

<dd>

The number of message received by Momentum for that domain during that window.

</dd>

<dt>d: deliveries</dt>

<dd>

The number of messages successfuly delivered to that domain during that window.

</dd>

<dt>dt: delivery time</dt>

<dd>

The average delivery time for a successful delivery to that domain during that window, in seconds. It is not time-in-spool, but time between connection and a successful delivery.

</dd>

<dt>t: transient failures</dt>

<dd>

The number of transient failures (4xx response codes) for delivery attempts to that domain during that window.

</dd>

<dt>f: permanent failures</dt>

<dd>

The number of permanent failures (5xx response codes) for delivery attempts to that domain during that window.

</dd>

</dl>

### 14.39.3. outbound_audit: System Console Commands

The system console commands you can use to access the outbound_audit data are:

<dl class="variablelist">

<dt>outbound_audit show domain [domain]</dt>

<dd>

Dump all collected time-series data for the specified domain.

</dd>

<dt>outbound_audit show global</dt>

<dd>

Show the global (aggregated) time-series data.

</dd>

<dt>outbound_audit show domains</dt>

<dd>

List the names of all domains which have collected data.

</dd>

<dt>outbound_audit show all</dt>

<dd>

Dump all collected time-series data for all collected domains. This can be a large amount of data.

</dd>

<dt>outbound_audit monitor_domains (on|off)</dt>

<dd>

Runtime enablement/disablement of tracking.

</dd>

<dt>outbound_audit domain_list (add|delete) [domain]</dt>

<dd>

Runtime addition/deletion of a domain in the monitoring list.

</dd>

<dt>outbound_audit threshold <N></dt>

<dd>

Set a minimum number of receptions before cataloging will commence

</dd>

<dt>outbound_audit clear domain [domain]</dt>

<dd>

Zero-out a domain's statistics.

</dd>

<dt>outbound_audit clear all</dt>

<dd>

Zero-out all statistics.

</dd>

</dl>

| [Prev](modules.mtamark.php)  | [Up](modules.php) |  [Next](modules.persistio.php) |
| 14.38. mtamark – MTAMARK  | [Table of Contents](index.php) |  14.40. persist_io – Persistent IO Wrapper |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)