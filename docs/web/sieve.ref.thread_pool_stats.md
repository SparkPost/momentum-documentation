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

| thread_pool_stats |
| [Prev](sieve.ref.stop.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.type.php) |

<a name="sieve.ref.thread_pool_stats"></a>
## Name

thread_pool_stats — Obtain information about thread pools

## Synopsis

`thread_pool_stats` { *`poolname`* } [ *`jobname`* ]

<a name="idp16008528"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.0.17.

`thread_pool_stats` takes a thread pool name as its first argument and returns a hash containing various information about the pool, including the number of threads in the pool, queue size, and number of invocations.

If the optional `jobname` is also specified, the queue size and the number of running instances for that specific job in the pool is also returned.

### Note

The list of thread pools can be obtained on the console using the `threads stats` command.

The returned hash contains these keys and associated values:

<dl class="variablelist">

<dt>poolname</dt>

<dd>

The name of the pool (e.g. "CPU", "IO", "SWAPIN", etc).

</dd>

<dt>queue_sz</dt>

<dd>

The queue size (number of jobs pending for this thread pool).

</dd>

<dt>invocations</dt>

<dd>

The number of jobs that have been handled by this thread pool.

</dd>

<dt>job_num_queued</dt>

<dd>

The queue size for the specific job described in `jobname`. This will be present only if the `jobname` argument was given.

</dd>

<dt>job_num_running</dt>

<dd>

The number of running instances of the specific job described in `jobname`. This will be present only if the `jobname` argument was given.

</dd>

</dl>

<a name="example.thread_pool_stats"></a>

**Example 15.125. thread_pool_stats example 1**

```
$stats = thread_pool_stats "CPU";
$qsize = $stats["queue_sz"];
if ec_test :value "gt" :comparator "i;ascii-numeric" "${qsize}" "100" {
  ec_tarpit 10 "CPU queue backlog";
}
```

<a name="example.thread_pool_stats.second"></a>

**Example 15.126. thread_pool_stats example 2**

```
$stats = thread_pool_stats "CPU" "clamav_avscan";
$jqsize = $stats["job_num_queued"];
if ec_test :value "gt" :comparator "i;ascii-numeric" "${jqsize}" "100" {
  ec_action 451 "resource unavailable";
}
```

| [Prev](sieve.ref.stop.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.type.php) |
| stop  | [Table of Contents](index.php) |  type |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)