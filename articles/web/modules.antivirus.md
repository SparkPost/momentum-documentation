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

| 14.2. antivirus – Antivirus Modules |
| [Prev](modules.alias.php)  | Chapter 14. Modules Reference |  [Next](modules.as_logger.php) |

## 14.2. antivirus – Antivirus Modules

<a class="indexterm" name="idp10418224"></a>

Momentum's antivirus framework currently ships with support for F-Secure, Kaspersky, and ClamAV antivirus engines. These engines can be configured to run separately or together, and to either reject a message or pass it back to a policy script for processing.

The antivirus module is loaded by adding the following stanza to your configuration file:

<a name="example.antivirus"></a>

**Example 14.1. antivirus module**

`Validate validate/antivirus antivirus { }`

The following modules are controlled by the antivirus module:

*   [Section 14.29, “fsecure – F-Secure”](modules.fsecure.php "14.29. fsecure – F-Secure") (no longer available as of version 3.1)

*   [Section 14.13, “clamav – ClamAV”](modules.clamav.php "14.13. clamav – ClamAV")

*   [Section 14.35, “kaspersky – Kaspersky”](modules.kaspersky.php "14.35. kaspersky – Kaspersky")

*   [Section 14.18, “csapi – The Content Scanning API Module”](modules.csapi.php "14.18. csapi – The Content Scanning API Module")

For information specific to the individual antivirus engines see the preceding links.

Starting with Momentum 2.1, the antivirus framework has been enhanced to allow third party vendors to support other antivirus products.

### 14.2.1. antivirus Configuration

The antivirus subsystem has both a general configuration that is relevant for all engines and engine-specific configurations which apply to that particular engine. The general parameters are:

<dl class="variablelist">

<dt>action</dt>

<dd>

(reject|quarantine|pass) The behavior to exhibit on a positive match. When `action` is set to `reject` this module rejects in the most conservative way—both "infected" and "unscannable" messages will be rejected. If you wish to "pass" unscannable messages but reject "infected" messages then they will need to set `action` to `pass` and use a policy script to set the SMTP response behavior.

</dd>

<dt>cache_size</dt>

<dd>

The size of the virus hash cache. Once a virus is present in the cache, matching is significantly faster. The default is 1000 viruses.

</dd>

<dt>context_variable</dt>

<dd>

The name of the context variable that will be set in the event of a positive match. If no value is assigned to `context_variable`, it defaults to "*`engine name`*      _status", `clamav_status` for the ClamAV module, for example. If *`engine name`*      _status is set to a value, this also sets another context variable named, "*`engine name`*      _status_info", which usually contains the virus name.

If the option, `context_variable`, *is* assigned a value, then the value it is set to is used as the name of the context variable. This context variable will only be set if a virus is found or an error occurs. Additionally, a second variable, *`context_variable`*_info is also set. To use this variable in a Sieve script see [antivirus](sieve.ref.antivirus.php "antivirus").

### Note

If no virus is found, then neither the default context variable *`engine name`*      _status nor *`engine name`*      _status_info will be set. The same applies when `context_variable` is assigned a value.

</dd>

<dt>error_code</dt>

<dd>

Set the ESMTP response code that should be sent if there is a problem scanning, not indicating the presence of any virus. Defaults to `451` (Requested action aborted: local error in processing). You should not normally set this to a fatal (5XX error code).

</dd>

<dt>file_base</dt>

<dd>

**Configuration Change. ** This feature is available starting from Momentum 2.2.0.7.

A path that the Momentum process can write temporary files into before scanning. Large messages need to be written out in canonical form before the scanner can be called. If you have enabled `mime_decompose`, those files will be stored here as well. `/tmp` or `/var/tmp` are good choices for most systems. Temporary files are deleted immediately after virus scanning.

</dd>

<dt>max_concurrency</dt>

<dd>

**Configuration Change. ** This feature was introduced in Momentum 2.1.

Each antivirus engine runs in a default [threadpool](conf.ref.threadpool.php "threadpool") (see individual documentation for your AV engine for details). By setting `max_concurrency` to a non-zero value, you can limit how many antivirus threads will be run simultaneously. Default is `0`, which will mean as many threads as are available in the threadpool. To change the thread pool used by a given engine, you may use the `pool` option.

### Note

If you use the [csapi module](modules.csapi.php "14.18. csapi – The Content Scanning API Module") be sure to set the concurrency of the [CPU threadpool](conf.ref.threadpool.php "threadpool") to a value that is less than the max_concurrency of the csapi module.

</dd>

<dt>mime_decompose</dt>

<dd>

**Configuration Change. ** This feature is available starting from Momentum 2.2.0.7.

Have Momentum decompose any MIME-encoded messages and scan the parts individually, instead of relying on the AV engine to decompose messages. Requires `file_base` to be set as well. The default value for this option is `0`.

</dd>

<dt>num_workers</dt>

<dd>

Deprecated - will be removed in Momentum 3.0.0\. Please use `max_concurrency` instead.

</dd>

<dt>paranoid</dt>

<dd>

Mark as viruses mails which appear to have been constructed to bypass virus checkers. The default value for this option is `0`.

</dd>

<dt>pool</dt>

<dd>

**Configuration Change. ** This feature is available starting from Momentum 2.2.0.7.

Run all antivirus scans out of a dedicated threadpool. AV scanners that run in-process default to the `CPU` pool and scanners that call an external process default to the `IO` pool. See [threadpool](conf.ref.threadpool.php "threadpool") for details on creating custom threadpools.

</dd>

<dt>skip_context_variable</dt>

<dd>

If this context variable is set by another module, the AV subsystem will avoid running the scanner on the current message. The default value for this variable is "skip_virus_check".

</dd>

<dt>timeout</dt>

<dd>

How long to wait for the engine to return a result for a particular message. Default is 10 seconds.

</dd>

</dl>

### 14.2.2. Runtime Usage

**14.2.2.1. Sieve**

Use the [antivirus](sieve.ref.antivirus.php "antivirus") methods for user processing.

**14.2.2.2. antivirus Management Using Console Commands**

The antivirus modules can be controlled through the `ec_console`; the following command is available:

**14.2.2.2.1. antivirus:*`antivirus1`* stats**

Display statistics. See sample output below:

```
15:42:50 /tmp/2025> antivirus:av1 stats
clamav
  Messages checked:   0
  MIME parts checked: 0
  Viruses detected:   0
  Viruses cured:      0
  Avg. time/message   nanms
  Avg. time/MIME part nanms
csapi
  Messages checked:   5
  MIME parts checked: 5
  Viruses detected:   1
  Viruses cured:      0
  Avg. time/message   14.994ms
  Avg. time/MIME part 14.994ms
```

| [Prev](modules.alias.php)  | [Up](modules.php) |  [Next](modules.as_logger.php) |
| 14.1. alias – Alias Expansion Module  | [Table of Contents](index.php) |  14.3. as_logger – Audit series logger |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)