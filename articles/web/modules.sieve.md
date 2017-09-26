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

| 14.51. sieve – The Sieve Module |
| [Prev](modules.sendmail_logger.php)  | Chapter 14. Modules Reference |  [Next](modules.sievelib.php) |

## 14.51. sieve – The Sieve Module

<a class="indexterm" name="idp12754400"></a>

Sieve script management is handled through the sieve module. This module allows for Sieve scripts to be specified for each phase of the SMTP transaction, online reconfiguration and reloading of Sieve scripts, and access to counters and metrics stored in Momentum's internal Sieve engine.

### 14.51.1. Loading and Configuring the Module

The sieve module is a "Validate" module and supports a number of configuration options. For the most part, they configure which scripts should be run in the various phases of the SMTP transaction.

<a name="example.sieve"></a>

**Example 14.69. sieve module**

```
Validate validate/sieve sieve {
  accept_phase1 = "/path/to/accept1.siv"
  accept_phase2 = "/path/to/accept2.siv"
  connect_phase1 = "/path/to/connect1.siv"
  connect_phase2 = "/path/to/connect2.siv"
  ehlo_phase1 = "/path/to/ehlo1.siv"
  ehlo_phase2 = "/path/to/ehlo2.siv"
  mailfrom_phase1 = "/path/to/mailfrom1.siv"
  mailfrom_phase2 = "/path/to/mailfrom2.siv"
  rcptto_phase1 = "/path/to/rcptto1.siv"
  rcptto_phase2 = "/path/to/rcptto2.siv"
  data_phase1 = "/path/to/data1.siv"
  data_phase2 = "/path/to/data2.siv"
  spool_phase1 = "/path/to/spool1.siv"
  spool_phase2 = "/path/to/spool2.siv"
  each_rcpt_phase1 = "/path/to/each_rcpt1.siv"
  each_rcpt_phase2 = "/path/to/each_rcpt2.siv"

  # the following have been available since version 2.1.1.8
  set_binding_phase1 = "/path/to/set_binding1.siv"
  set_binding_phase2 = "/path/to/set_binding2.siv"
}
```

*   accept_phase1

*   accept_phase2

*   connect_phase1

*   connect_phase2

*   ehlo_phase1

*   ehlo_phase2

*   mailfrom_phase1

*   mailfrom_phase2

*   rcptto_phase1

*   rcptto_phase2

*   data_phase1

*   data_phase2

*   spool_phase1

*   spool_phase2

*   each_rcpt_phase1

*   each_rcpt_phase2

*   set_binding_phase1

*   set_binding_phase2

Phase1 and Phase2 allow Sieve scripts to be split across two files while remaining completely self-contained and operational. This is useful for separating site-specific Sieve logic from vendor and/or third party Sieve logic. The convention is to run site-specific scripts during phase1 and vendor supplied rulesets during phase2.

If the end of phase 2 is reached without any terminal action, then there is an implicit "keep" as described in the Sieve specification. However, if the end of phase 1 is reached without any terminal action, then phase 2 is executed.

### Note

Unlike scripts that are included using `ec_include`, Sieve scripts included in the sieve module stanza are not periodically refreshed. However, all scripts are refreshed when the sieve cache is flushed using the ec_console command. *If you make changes to any Sieve scripts be sure to flush the Sieve cache.*                                                                         For more information about this command see [Section 14.51.2.3, “Flushing the Cache”](modules.sieve.php#modules.sieve.sieve.flush.cache "14.51.2.3. Flushing the Cache").

**Attaching sieve scripts to arbitrary hook points**

**Configuration Change. ** This feature was introduced in Momentum 2.1.1.8.

It's also possible to arrange for a Sieve script to be run at any hook point by using the following syntax:

<a name="example.sieve.hook"></a>

**Example 14.70. sieve hook example**

```
Validate validate/sieve sieve {
  hook:core_log_permanent_failure_v1 [
    script = "/path/to/other-script.siv"
    async = "true"
    pool = "IO"
  ]
}
```

The configuration snippet above causes Sieve to register a hook implementation for the core_log_permanent_failure_v1 hook. (See [ec_rfc3464_delivery_status](sieve.ref.ec_rfc3464_delivery_status.php "ec_rfc3464_delivery_status") for more information about this hook point. When it is called, it interrogates the hook prototype to determine which arguments reference structures such as the validation_context and email_message and uses those to prepare an execution context for running the script.

Prior to version 3.1, the default value for `async` is `true`. When `async` is set to `true`, the hook arguments will be copied into a job that will run in one of the thread pools. If `pool` is not specified, the job will run in the `CPU` pool. In any case, the threadpool referenced by this option must be defined. Any hook arguments of type `ec_message` will be referenced rather than copied, allowing you to potentially modify their properties from your hook. Excercise caution in this case, as other threads of execution may also be operating on the same message.

As of version 2.2.2.40 the `async` option may also be set to `ref` or `snapshot`. The `true` value used in earlier versions of the product is equivalent to `ref` and its behavior is described above. The `snapshot` value will create a snapshot of the message (that must not be modified) which is well suited for logging the state of the message asychronously from the main path of execution.

**Configuration Change. ** As of version 3.1, the default value for `async` is `false`.

If the `async` option is set to `false`, then the hook will execute synchronously, blocking the caller.

### Warning

Set `async` to `false` when using the core_final_validation_hook otherwise you may experience spool corruption.

Sieve scripts implementing the core_final_validation hook should not modify the message since it may have already been written to the spool.

There is one additional option to control the return value from the hook; by default Sieve will return `0` from its hook implementation. If you need to change that, then you can specify an integer return value via the `return`. Most users will not need this feature.

The following example shows how to hook the generation of messages by the delay DSN module (see [Section 14.20, “delay_dsn – Delay DSN Generation”](modules.delay_dsn.php "14.20. delay_dsn – Delay DSN Generation") for more details on delay DSNs). This uses `return` to indicate that a custom delay DSN has been injected.

<a name="example.sieve.delay_dsn"></a>

**Example 14.71. delay_dsn_send_notification example**

```
Validate validate/sieve sieve {
  hook:delay_dsn_send_notification [
    script = "/path/to/another-script.siv"
    async = "false"
    return = "1"
  ]
}
```

This is a very powerful feature that allows great flexibility. This flexibility allows you to configure Momentum in ways that have not been tested for stability by us. We strongly recommend that you thoroughly test your configuration before deploying it in production to avoid any possible unpleasant surprises.

**Script cache options in the sieve scope**

**Configuration Change. ** This feature was introduced in Momentum 2.0.6.

```
cache_size = 200
  cache_life = 260
```

Since Momentum 2.1, all script loading, either for globally configured scripts or scripts included via [ec_include](sieve.ref.ec_include.php "ec_include") is passed through the script fetching and caching layer. Once a script is compiled, its compiled form is cached so that it doesn't need to be recompiled each time it is used. Each cache item has a time-to-live, and once that time expires, the item is removed from the cache. Compiled scripts are reference counted, so the script resources are released when the final reference to it is released. Globally configured scripts are referenced directly by the sieve module, so they will persist even after the cache entry has expired.

The `cache_size` and `cache_life` directives control the number of compiled script cache entries to maintain, and the time-to-live for those entries. The compiled script cache is used whenever your Sieve scripts use the `ec_include` action to include another Sieve script. Both of these values are tunable online.

Each cached script included using the `ec_include` function has a time-to-live determined by the sieve module configuration option, `cache_life`, so cached scripts are periodically refreshed. However, if you make changes to a script, a best practise is to flush the Sieve cache immediately. For more information see [Section 14.51.2.3, “Flushing the Cache”](modules.sieve.php#modules.sieve.sieve.flush.cache "14.51.2.3. Flushing the Cache").

You will likely want to also load the icu and sievelib modules to make full use of the Sieve language. See [Section 14.32, “icu – ICU”](modules.icu.php "14.32. icu – ICU") for information about ICU and [Section 14.52, “sievelib – The sievelib Module”](modules.sievelib.php "14.52. sievelib – The sievelib Module") for information about the sievelib module.

**runtime_error in the sieve scope**

The `runtime_error` option affects how Sieve handles certain kinds of errors (for instance, passing incorrect parameters to Sieve functions, failed includes, low memory conditions). The default is to `fail` the incoming session with a transient error response, but you may set it to `continue` to have the script continue executing past the failure point.

The ability to change this behavior was introduced in 2.2, and the default was changed to `fail`. In prior releases, the default was effectively `continue` and this could not be altered.

### 14.51.2. sieve Management Using Console Commands

The sieve module can be controlled through the `ec_console`; the following commands are available:

**14.51.2.1. Statistics**`sieve stats`

Displays current Sieve statistics. Sample output is reproduced below:

```
sieve statistics since: 2004-11-24 00:58:48
mailfrom_phase2:blacklist (5xx) = 205
data_phase2:spam:SURBL (5xx) = 196
mailfrom_phase2:spam:SURBL (5xx) = 72
data_phase2:spam tarpit (informational) = 993
mailfrom_phase2:spam tarpit (informational) = 5303
mailfrom_phase2:spoof tarpit (informational) = 1102
:sieve-processed (informational) = 44823
data_phase1:bad attachment tarpit (informational) = 2008
data_phase2:spam:Ratware detected (5xx) = 36
mailfrom_phase2:spam:Known Spam Source (5xx) = 5231
rcptto_phase2:non-existent user tarpit (informational) = 89
mailfrom_phase2:policy:Fraudulent sender (5xx) = 1102
connect_phase2:spam:Ratware senders denied (4xx) = 1046
rcptto_phase2:policy:Blocked dictionary attack (5xx) = 89
data_phase2:spam:Known Spam Source [content] (5xx) = 797
rcptto_phase2:policy:Local domain spoofing attempt (5xx) = 2686
data_phase1:virus:Possibly unsafe attachment blocked (5xx) = 2008
data_phase1:policy:No Bounces for un-manned addresses (5xx) = 90
```
**14.51.2.2. Resetting counters**`sieve reset`

Reset the counters displayed by the `stats` command.

In Momentum version 1.2.5 and higher, this will also zero out the summary statistics, equivalent to issuing a `summary reset` command at the console.

**14.51.2.3. Flushing the Cache**`sieve flush cache`

This command removes all Sieve scripts from the cache. Use this command whenever you update a Sieve script. Any cached entries will be flushed and you should see a message similar to:

`flushed 3 entries from the script cache`

This command flushes everything from the cache, including each statically configured script, plus any script that was included and has not yet passed the cache_life duration. If no Sieve scripts are currently cached, the number of entries reported will be "`0`".

**14.51.2.4. Testing Content**sieve test *`phase`* *`script`*

This command verifies that the script content will compile and that it can run in the phase specified. Valid phases are: accept, connect, ehlo, mailfrom, rcptto, data, spool, each_rcpt and set_binding. Note that the actual script content is tested and not a filename. This is intended to be used by the web console to validate a custom script prior to saving and applying it.

**14.51.2.5. Testing Files**sieve testfile *`phase`* *`filename`*

**Configuration Change. ** This feature was introduced in Momentum 2.1.

This command verifies that the script in the specified file will compile and run in the phase specified. Valid phases are: accept, connect, ehlo, mailfrom, rcptto, data, spool, each_rcpt and set_binding.

Error messages are logged to the panic log.

**14.51.2.6. sieve set *`phase`* *`filename`***

Unload any script that is currently configured to run in the specified phase and replace it with the new script located in *`filename`*. See also [Section 14.51.2.8, “Caching options”](modules.sieve.php#modules.sieve.caching.options "14.51.2.8. Caching options").

**14.51.2.7. sieve unset *`config_name`***

Use this command to unset a specific phase and thus disable the script set to run in that phase. For example:

```
16:47:52 ecelerity(/tmp/2025)> sieve unset accept_phase1
accept_phase1 is now unset
```

This removes the script associated with `accept_phase1`.

**14.51.2.8. Caching options**sieve set cache_size *`size`*
  sieve set cache_life *`seconds`*

**Configuration Change. ** This feature was introduced in Momentum 2.0.6.

Allows you to tune the cache_size and cache_life configuration online. Changes made here will not automatically purge the cache; and existing cached items will survive until their life time expires. Any new items added to the cache will use the newly configured cache lifetime.

| [Prev](modules.sendmail_logger.php)  | [Up](modules.php) |  [Next](modules.sievelib.php) |
| 14.50. sendmail_logger – Sendmail-Compatible Logging  | [Table of Contents](index.php) |  14.52. sievelib – The sievelib Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)