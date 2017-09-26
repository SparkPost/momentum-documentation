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

| msys.threadpool.stat |
| [Prev](lua.ref.msys.threadpool.find.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.timer.after.php) |

<a name="lua.ref.msys.threadpool.stat"></a>
## Name

msys.threadpool.stat — Return stats regarding a threadpool

<a name="idp18477792"></a>
## Synopsis

`msys.threadpool.stat(threadpoolname_or_jobclassid);`

`threadpoolname_or_jobclassid: mixed`<a name="idp18480800"></a>
## Description

Supply a job class ID (integer) or name (string) to this function. A table is returned with the following fields.

*   name

*   invocations

*   avg_concurrency

*   saturation

*   avg_wallclock_time_per_op

*   queue_sz

*   num_threads

*   num_active_threads

*   num_inactive_threads

*   job_num_queued

*   job_num_running

If no thread pool exists with the given name or job class then `nil` is returned. This function is only safe to call from the scheduler thread. Summaries returned by this function include a pretty printer.

<a name="lua.re.msys.threadpool_stat.example"></a>

**Example 70.62. msys.threadpool_stat example**

```
...
s = msys.threadpool.stat("SWAPIN");
print (s["invocations"]);
s = msys.threadpool.stat(1);
print (s["job_num_queued"]);
```

Enable this function with the statement `require('msys.threadpool');`.

<a name="idp18497968"></a>
## See Also

[msys.threadpool.find](lua.ref.msys.threadpool.find.php "msys.threadpool.find"), [msys.threadpool.count](lua.ref.msys.threadpool.count.php "msys.threadpool.count") [threadpool](conf.ref.threadpool.php "threadpool")

| [Prev](lua.ref.msys.threadpool.find.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.timer.after.php) |
| msys.threadpool.find  | [Table of Contents](index.php) |  msys.timer.after |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)