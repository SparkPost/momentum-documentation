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