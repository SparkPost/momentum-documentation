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
| [Prev](console_commands.count.php)  | Chapter 73. Non-Module-Specific Console Commands |  [Next](console_commands.delayed.php) |

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

<a name="idp8634128"></a>
## Description

Lua makes use of generic counters. These commands display and manipulate counters.

<dl class="variablelist">

<dt>counter add</dt>

<dd>

Increments the specified counter by the value of the second parameter.

</dd>

<dt>counter help</dt>

<dd>

Displays a brief description of each command.

</dd>

<dt>counter list</dt>

<dd>

Displays the statistics for all counters. See below for sample output:

<a name="console_commands.counter.list.example"></a>

**Example 73.1. counter list**

```
07:21:07 /tmp/2025> counter list
VALUE       RESET_TIME       SEMANTICS COUNTER

1024   2010-12-02@07:20:58    relaxed  /vendor/sample

2 counters listed.
```

All content scanning modules record statistics on scanned virus and spam volume metrics. These metrics are exposed via the counters subsystem and can be viewed using the **counter list**      command.

The **counter increment**           command increments the specified counter by one. For example, you can increment the `/vendor/sample` counter shown in [Example 73.1, “counter list”](console_commands.counter.php#console_commands.counter.list.example "Example 73.1. counter list") by issuing the command **counter increment /vendor/sample** .

</dd>

<dt>counter unlink</dt>

<dd>

Deletes a counter and the **counter reset**       sets a counter to `0`.

</dd>

</dl>

You can also display and manipulate counters through the following Lua functions:

*   [msys.counter.add](lua.ref.msys.counter.add.php "msys.counter.add")

*   [msys.counter.inc](lua.ref.msys.counter.inc.php "msys.counter.inc")

*   [msys.counter.open](lua.ref.msys.counter.open.php "msys.counter.open")

*   [msys.counter.read](lua.ref.msys.counter.read.php "msys.counter.read")

*   [msys.counter.reset](lua.ref.msys.counter.reset.php "msys.counter.reset")

*   [msys.counter.unlink](lua.ref.msys.counter.unlink.php "msys.counter.unlink")

| [Prev](console_commands.count.php)  | [Up](console.cmds.ref.php) |  [Next](console_commands.delayed.php) |
| count  | [Table of Contents](index.php) |  delayed |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)