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

| summary |
| [Prev](console_commands.spool_in.php)  | 12.2. System Console Commands |  [Next](console_commands.summary_reset.php) |

<a name="console_commands.summary"></a>
## Name

summary — show global metrics

## Synopsis

`summary`

<a name="idp10204064"></a>
## Description

Perhaps the most common and useful command for the console, **summary** will produce global metrics such as queue sizes, message counts and throughput rates since startup or the last reset of statistics.

```
10:47:35 /tmp/2025> summary
Summary Statistics
        Outbound Concurrency:    2248
        Inbound Concurrency:      90
        Active Domains:   35711
        Active Queue Size:   8793
        Delayed Queue Size: 263175
        Destaged Queue Size:      0
        Total Queue Size: 272334
        DNS A Queries: 565284
        DNS MX Queries: 243281
        Pending DNS Queries: 116
        Query Rate:   9.08 queries/second
        Successfully Delivered Messages: 2102439
        Failed Messages: 2508439
        Rejected Messages:      1
        Received Messages: 4883262
        Delivery Rate:  51.76 messages/second
        Reception Rate:  54.82 messages/second
        Statistics Last Reset:  89081 seconds
        Uptime:  89083 seconds
```

If you have configured your control listener to listen on the default Unix socket, you can invoke the summary command without opening the system console by issuing the command, **`ec_console /tmp/2025 summary`**                   .

The report fields are as follows:

<dl class="variablelist">

<dt>Outbound Concurrency</dt>

<dd>

The current number of established outbound sessions.

</dd>

<dt>Inbound Concurrency</dt>

<dd>

The current number of established inbound sessions.

</dd>

<dt>Active Domains</dt>

<dd>

The number of domains in the DNS cache.

</dd>

<dt>Active Queue Size</dt>

<dd>

The number of messages in the system that require immediate delivery attempts.

</dd>

<dt>Delayed Queue Size</dt>

<dd>

The number of messages in the system that have been delayed. A message is delayed due to transient delivery failures (4xx SMTP codes) and a retry time is calculated for the message. When that retry time is reached, the message will be moved from the delayed queue to the active queue.

</dd>

<dt>Destaged Queue Size</dt>

<dd>

The number of messages that have been destaged from the system.

</dd>

<dt>Total Queue Size</dt>

<dd>

The sum of all queues.

</dd>

<dt>DNS A Queries</dt>

<dd>

The total number of A/AAAA type queries issued since startup or last summary reset.

</dd>

<dt>DNS MX Queries</dt>

<dd>

The total number of MX type DNS queries issued since startup or last summary reset.

</dd>

<dt>Pending DNS Queries</dt>

<dd>

The total number of DNS queries that are not completed yet.

</dd>

<dt>Query Rate</dt>

<dd>

The average number of DNS queries/second performed since startup or last summary reset.

</dd>

<dt>Successfully Delivered Messages</dt>

<dd>

The number of messages successfully delivered by Momentum since it was started or since the last summary reset.

</dd>

<dt>Failed Messages</dt>

<dd>

The number of outbound messages permanently failed since it was started or since the last summary reset.

</dd>

<dt>Rejected Messages</dt>

<dd>

The number of messages rejected by Momentum since it was started or since the last summary reset.

</dd>

<dt>Received Messages</dt>

<dd>

The number of messages received by Momentum for deliver since it was started or since the last summary reset.

</dd>

<dt>Delivery Rate</dt>

<dd>

The average number of messages/second delivered (successful and unsuccessful) since Momentum was started or since the last summary reset.

</dd>

<dt>Reception Rate</dt>

<dd>

The average number of messages/second received for delivery since Momentum was started or since the last summary reset.

</dd>

<dt>Statistics Last Reset</dt>

<dd>

The number of seconds since statistics were reset using the "summary reset" command (see below).

</dd>

<dt>Uptime</dt>

<dd>

The number of seconds that Momentum has been running continuously.

</dd>

</dl>

<a name="idp10242992"></a>
## See Also

[binding summary](console_commands.binding_summary.php "binding summary"), [summary reset](console_commands.summary_reset.php "summary reset")

| [Prev](console_commands.spool_in.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.summary_reset.php) |
| spool_in  | [Table of Contents](index.php) |  summary reset |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)