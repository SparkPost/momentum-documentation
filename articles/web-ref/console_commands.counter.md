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

| counter |
| [Prev](console_commands.count.php)  | 12.2. System Console Commands |  [Next](console_commands.delayed.php) |

<a name="console_commands.counter"></a>
## Name

counter add, counter help, counter increment, counter list, counter reset, counter unlink — manage counters

## Synopsis

`counter add` { *`counter_name`* } { *`delta`* }

`counter help`

`counter increment` { *`counter_name`* }

`counter list`

`counter reset` { *`counter_name`* }

`counter unlink` { *`counter_name`* }

<a name="idp15788832"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.1.

Both Sieve and Lua make use of generic counters. These commands display and manipulate counters.

The **counter list**      command displays the statistics for all counters. Find sample output below.

<a name="console_commands.counter.list.example"></a>

**Example 12.1. counter list**

```
07:21:07 /tmp/2025> counter list
VALUE       RESET_TIME       SEMANTICS COUNTER
19     2010-11-26@06:33:39    strict   /sieve/informational/partner:av_name:scanned
1024   2010-12-02@07:20:58    relaxed  /vendor/sample

2 counters listed.
```

All content scanning modules record statistics on scanned virus and spam volume metrics. These metrics are exposed via the counters subsystem and can be viewed using the **counter list**      command.

The **counter increment**           command increments the specified counter by one. For example, you can increment the `/vendor/sample` counter shown in [Example 12.1, “counter list”](console_commands.counter.php#console_commands.counter.list.example "Example 12.1. counter list") by issuing the command **counter increment /vendor/sample** .

The **counter add**     command increments the specified counter by the value of the second parameter.

The **counter unlink**        deletes a counter and the **counter reset**       sets a counter to `0`.

The **counter help**      command displays a brief description of each command.

<a name="console_commands.counter.details"></a>
### Counters in Momentum

Momentum generic counters are scalable low latency counters that are identified by a unique path in a counter namespace. This namespace may be exported to other facilities for visualization, analysis and more. The namespace hierarchy is defined as follows.

*   `/` – reserved for Message Systems use.

*   `/sieve` – reserved for Sieve counters.

*   `/vendor/<name>` – reserved for vendors. For example, vendor `Foo` may reserve `/vendor/foo`.

*   `/site/<name>` – reserved for clients. For example, client `CompanyA` may use `/site/companya`.

Both Sieve and Lua counters are integrated into this system. A Sieve counter is an alias to `/sieve/type/[phase/]name` where "type" may have the values 5xx, 4xx or informational. The phase field is optional and represents the SMTP phase the counter is associated with. The name field is the name of the Sieve counter. For example, the Sieve counter `spool_phase1:ec_reject spool (5xx)` is an alias to `/sieve/5xx/spool_phase1/ec_reject spool`. Strict semantics mean all counter handles will update the same value in memory. Relaxed means all counter handles update their own values in memory. Those values are then aggregated when someone does a read operation on the counter.

Counters may be opened with either `msys.counter.STRICT` or `msys.counter.RELAXED` semantics. Strict semantics mean all counter handles will update the same value in memory. Relaxed means all counter handles update their own values in memory. Those values are then aggregated when someone does a read operation on the counter. If a counter value is updated mostly in a single thread on one processor then the STRICT semantics are recommended. Also, for policy-level logic, STRICT semantics are recommended as the counters may later be augmented to support atomic fetch and phi operations. If a counter is often updated across different threads or processors then RELAXED semantics are recommended. STRICT semantics provide almost perfect read scalability and RELAXED semantics provide almost perfect update scalability. For a graphic representation see below:

<a name="fig.console_command.counter"></a>

**Figure 12.1. Counter semantics**

![Counter semantics](images/counter.png)

**Note about [Figure 12.1, “Counter semantics”](console_commands.counter.php#fig.console_command.counter "Figure 12.1. Counter semantics"). ** In this figure `update` refers to increment and add operations. The sample machine used two Intel® Xeon® CPU E5530 at 2.4GHz with four cores each.

<a name="idp15825504"></a>
## See Also

[Section 14.64.3, “sieve Management Using Console Commands”](modules.sieve.php#modules.sieve.console "14.64.3. sieve Management Using Console Commands"), [ec_inc_counter](sieve.ref.ec_inc_counter.php "ec_inc_counter")

| [Prev](console_commands.count.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.delayed.php) |
| count  | [Table of Contents](index.php) |  delayed |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)