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

| threads |
| [Prev](console_commands.sysinfo.php)  | 12.2. System Console Commands |  [Next](console_commands.tls.php) |

<a name="console_commands.threads"></a>
## Name

threads stats, threads io queue, threads cpu queue — Display summary statistics for thread pools

## Synopsis

`threads cpu queue`

`threads io queue`

`threads stats`

<a name="idp10279456"></a>
## Description

**threads stats**       shows summary information of thread pools.

```
10:47:35 /tmp/2025> threads stats
CPU thread pool: concurrency 4
IO thread pool: concurrency 5
               Total invocations: 46010
    Observed average concurrency: 1.00
          Thread pool saturation:  0.01%
   Average wallclock time per op: 0.11ms
            Current thread count: 0
  [inactive threads]
            Current thread count: 5
SWAPOUT thread pool: concurrency 5
               Total invocations: 46668
    Observed average concurrency: 3.94
          Thread pool saturation: 49.54%
   Average wallclock time per op: 780.56ms
            Current thread count: 0
  [inactive threads]
            Current thread count: 5
SWAPIN thread pool: concurrency 5
CLOSE thread pool: concurrency 0
```

This command displays statistics for any of the "built-in" thread pools and also any thread pools that you have created.

**threads io queue**          shows the queued IO jobs.

```
10:47:35 /tmp/2025> threads io queue
Jobs in the IO pool
0 jobs
```

**threads cpu queue**           shows the queued CPU jobs.

```
10:47:35 /tmp/2025> threads cpu queue
Jobs in the CPU pool
0 jobs
```
<a name="idp10286704"></a>
## See Also

[threadpool](conf.ref.threadpool.php "threadpool")

| [Prev](console_commands.sysinfo.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.tls.php) |
| sysinfo  | [Table of Contents](index.php) |  tls |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)