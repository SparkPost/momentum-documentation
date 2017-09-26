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

| binding summary |
| [Prev](console_commands.binding_flush_domain.php)  | 12.2. System Console Commands |  [Next](console_commands.cache_list.php) |

<a name="console_commands.binding_summary"></a>
## Name

binding summary — show binding statistics

## Synopsis

`binding summary` [ *`<binding name>`*        | *`<binding slot>`*        | group:*`<binding group>`*         ]

<a name="idp15473152"></a>
## Description

**binding summary**         will produce metrics such as queue sizes, message counts and throughput rates since startup over all the bindings. If a specific binding name, binding slot or binding group name is given, the metrics will be for the specified binding or binding group.

```
10:47:35 /tmp/2025> binding summary
Summary Statistics For Binding default
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:     12
        Successfully Delivered Messages:      0
        Failed Messages:      0
        Received Messages:      0
        Resident Messages:      0
        Delivery Rate:   0.00 messages/second
        Reception Rate:   0.00 messages/second
        Uptime:    590 seconds
Summary Statistics For Binding example
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    506
        Failed Messages:      0
        Received Messages:    506
        Resident Messages:      0
        Delivery Rate:   0.86 messages/second
        Reception Rate:   0.86 messages/second
        Uptime:    590 seconds
Summary Statistics For Binding example2
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    494
        Failed Messages:      0
        Received Messages:    494
        Resident Messages:      0
        Delivery Rate:   0.84 messages/second
        Reception Rate:   0.84 messages/second
        Uptime:    590 seconds

09:37:38 ecelerity(/tmp/2025)> binding summary example
Summary Statistics For Binding example
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    506
        Failed Messages:      0
        Received Messages:    506
        Resident Messages:      0
        Delivery Rate:   0.85 messages/second
        Reception Rate:   0.85 messages/second
        Uptime:    596 seconds

09:37:44 ecelerity(/tmp/2025)> binding summary group:group1
Summary Statistics For Binding example in Binding Group group1
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    506
        Failed Messages:      0
        Received Messages:    506
        Resident Messages:      0
        Delivery Rate:   0.84 messages/second
        Reception Rate:   0.84 messages/second
        Uptime:    602 seconds
Summary Statistics For Binding example2 in Binding Group group1
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:    494
        Failed Messages:      0
        Received Messages:    494
        Resident Messages:      0
        Delivery Rate:   0.82 messages/second
        Reception Rate:   0.82 messages/second
        Uptime:    602 seconds

********************************************
Summary Statistics For Binding Group group1
        Open Connections:       0
        Active Queue Size:      0
        Total Queue Size:      0
        Successfully Delivered Messages:   1000
        Failed Messages:      0
        Received Messages:   1000
        Incore Messages:      0
        Delivery Rate:   1.66 messages/second
        Reception Rate:   1.66 messages/second
        Uptime:    602 seconds

09:37:50 ecelerity(/tmp/2025)>
```

<dl class="variablelist">

<dt>Open Connections</dt>

<dd>

The current number of established outbound sessions.

</dd>

<dt>Active Queue Size</dt>

<dd>

The number of messages in the system that require immediate delivery attempts.

</dd>

<dt>Total Queue Size</dt>

<dd>

The sum of all queues.

</dd>

<dt>Successfully Delivered Messages</dt>

<dd>

The number of messages successfully delivered by Momentum since it was started or since the last summary reset.

</dd>

<dt>Failed Messages</dt>

<dd>

The number of outbound messages permanently failed since it was started or since the last summary reset.

</dd>

<dt>Received Messages</dt>

<dd>

The number of message received by Momentum for deliver since it was started or since the last summary reset.

</dd>

<dt>Delivery Rate</dt>

<dd>

The average number of messages/second delivered (successful and unsuccessful) since Momentum was started or since the last summary reset.

</dd>

<dt>Reception Rate</dt>

<dd>

The avergage number of messages/second received for delivery since Momentum was started or since the last summary reset.

</dd>

<dt>Uptime</dt>

<dd>

The number of seconds that Momentum has been running continuously.

</dd>

</dl>

### Note

If the name you provide is a binding group, then the output will show a listing of all the bindings that are part of that group, followed by a summary for the group.

| [Prev](console_commands.binding_flush_domain.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.cache_list.php) |
| binding flush domain  | [Table of Contents](index.php) |  cache list |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)