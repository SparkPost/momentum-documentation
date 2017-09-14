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

| 14.18. csapi – The Content Scanning API Module |
| [Prev](modules.conntrol.php)  | Chapter 14. Modules Reference |  [Next](modules.custom_logger.php) |

## 14.18. csapi – The Content Scanning API Module

<a class="indexterm" name="idp11119696"></a>

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.35.

The Content Scanning Application Programming Interface (CSAPI) module provides integration to Symantec's suite of content scanners. If you intend to use this module be sure to choose it during installation. This module runs in an external process (`/opt/ecelerity/sbin/ec_avscan` ) initiated by Momentum during startup. This module shares all of the same parameters as the global antivirus module, plus nine custom parameters shown in [Section 14.18.1, “Configuration”](modules.csapi.php#modules.csapi.configuration "14.18.1. Configuration").

You must load the antivirus module in order to run the csapi module. For more information see [Section 14.2, “antivirus – Antivirus Modules”](modules.antivirus.php "14.2. antivirus – Antivirus Modules").

For instructions on configuring this module using the web UI and for a list of the configuration options that this module shares with other antivirus modules see [Section 14.2.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.2.1. antivirus Configuration").

### Note

This module requires that the `max_concurrency` option be configured.

*   RH4 64 bit – 9.1 with 32 bit emulation

*   RH5 32 bit – 9.1

*   RH4 32 bit – 9.1

*   RH5 64 bit – 9.1 with 32 bit emulation

*   Solaris V10/Sparc V9 64 bit – 9.1

### 14.18.1. Configuration

<a name="example.csapi.configuration"></a>

**Example 14.23. csapi configuration**

```
Validate validate/antivirus {
}

Validate validate/av_csapi csapi passive {
  action = "pass"
  context_variable = "csapi_status"
  skip_context_variable = "skip_virus_check"
  scan_as = "stream"
  max_concurrency = "5"
}
```

For instructions on configuring this module using the web UI and for a list of the configuration options that this module shares with other antivirus modules see [Section 14.2.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.2.1. antivirus Configuration").

The default value for the `context_variable` for this module is `csapi_status`.

Validation modules can be loaded passively, in which case the validation system will not call the SMTP transaction hooks defined by the module. When a module is loaded in passive mode inbound messages will not be virus scanned unless you explicitly call the appropriate scripting action.

Modules are loaded passively by using the `passive` attribute when defining the module.

The first three options shown in the configuration example are common to all antivirus modules and are discussed in [Section 14.2, “antivirus – Antivirus Modules”](modules.antivirus.php "14.2. antivirus – Antivirus Modules"). The parameters specific to the csapi module are the following:

<dl class="variablelist">

<dt>max_concurrency</dt>

<dd>

Specifies the maximum number of threads the external scanner should use. This setting is mandatory.

### Note

Be sure to set the concurrency of the [CPU threadpool](conf.ref.threadpool.php "threadpool") to a value that is less than the max_ concurrency of the csapi module.

</dd>

<dt>max_extract_depth</dt>

<dd>

The maximum directory depth when extracting an archive. The maximum value is 50, the minimum value is 1, the CSAPI default value is 10.

</dd>

<dt>max_extract_size</dt>

<dd>

The maximum size in bytes of a file extracted from an archive. The CSAPI default value is `104857600` bytes.

This limit and the following `extract` limits, exist to avoid potential denial of service attacks with messages containing archive files.

</dd>

<dt>max_extract_time</dt>

<dd>

The maximum amount of time in seconds to spend extracting an archive file, a setting of 0 means unlimited. The default value is `180` seconds.

</dd>

<dt>max_file_count</dt>

<dd>

The maximum number of files allowed for a single scan or 0 for no limit. The default value is `5000`.

</dd>

<dt>scan_as</dt>

<dd>

Determines which method is used to scan the messages. The default method is `stream` which is also the most efficient, since it doesn't require copying the message. The `memory` method either scans the message as a block of memory or saves the message to a file before calling the scanner on the disk file, depending on whether the `file_base` parameter is set.

</dd>

<dt>scanner_log</dt>

<dd>

The log file for the external scanner. The default value for this option is `/var/log/ecelerity/csapi.log`.

</dd>

<dt>scanner_path</dt>

<dd>

The path to the external scanning process. Normally you would not need to change this value. The default value for this option is `/opt/ecelerity/sbin/ec_avscan`.

</dd>

<dt>update_interval</dt>

<dd>

How often to update the antivirus definitions. The default value for this option is `86400` (one day).

</dd>

</dl>

### 14.18.2. csapi Runtime Usage

The csapi module sets two validation context variables:

<dl class="variablelist">

<dt>*`csapi`*_status</dt>

<dd>

Using the `context_variable` option, you can name a context variable whatever you choose. If not set, it defaults to *`engine_name`*_status, hence the name `csapi_status`. If the message is clean, this context variable will not be set.

If there was a problem scanning the message, it will contain `error`. Otherwise it will contain an empty string.

</dd>

<dt>virus_info</dt>

<dd>

If the *`engine_name`*_status context variable is set, this also sets another context variable named, *`engine_name`*_status_info, which contains the virus name as defined by the CSAPI library.

</dd>

</dl>

See [Section 14.2.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.2.1. antivirus Configuration") for more information about antivirus context variables.

**14.18.2.1. Sieve Usage**

The antivirus framework automatically registers Sieve actions for each antivirus engine that is loaded into Momentum, allowing you to selectively run the engine based on criteria in a Sieve script. The chief benefit of doing this is the reduced CPU cost of scanning messages if some earlier validation has already decided that the mail will be rejected. In order to reap this benefit, you should load the csapi module in `passive` mode as described in [Section 14.18.1, “Configuration”](modules.csapi.php#modules.csapi.configuration "14.18.1. Configuration").

Validation modules loaded in passive mode will not have their validation hooks called automatically, which means that inbound messages will not be virus scanned unless you explicitly call the corresponding Sieve action.

Usage is as simple as:

`csapi_avscan;`

This action returns no value. The scanning process will mark up the validation context for further processing by a Sieve script. This action must be run in one of the data phase hooks. However, you can process the scan result in a later phase, such as each_rcpt_phase1.

As an example, add the following block to your `ecelerity.conf` file:

```
Validate validate/antivirus antivirus {
}

Validate validate/av_csapi csapi passive {
  action = "pass"
  context_variable = "virus"
  max_concurrency = 4
}

Validate validate/sieve sieve {
  data_phase1 = "/path/to/csapi_scan.siv"
  each_rcpt_phase1 = "/path/to/csapi_process.siv"
}
```

Save the following Sieve script to `/path/to/csapi_scan.siv`, or add it to any other data_phase1 script:

`csapi_avscan;`

And save the following Sieve script to `/path/to/csapi_process.siv`:

```
if vctx :contains "virus" "error" {
  ec_action 451 "AV system offline" "virus:check error";
  stop;
}
elsif vctx :contains "virus" "" {
  ec_action 550 "Virus detected %{vctx_mess:virus_info}" "virus:Viruses rejected";
  stop;
}
# if we got here, there was no virus detected
```

The `%{vctx_mess:virus_info}` will contain the virus name as defined by the CSAPI library. The actual name of the info context variable is based on the context_variable that was set in the configuration stanza. See [Section 14.2, “antivirus – Antivirus Modules”](modules.antivirus.php "14.2. antivirus – Antivirus Modules") for more details.

**14.18.2.2. CSAPI Management Using Console Commands**

The CSAPI module can be controlled through the `ec_console`; the following commands are available:

<dl class="variablelist">

<dt>csapi show version</dt>

<dd>

Displays the versions of all of the CSAPI components, as well as the update status.

</dd>

<dt>csapi reload</dt>

<dd>

Request that the CSAPI engine download the latest definition files from the Symantec servers. Normal updates happen asynchronously once per day. You can use `csapi show version` to monitor the status of the update process. After the update is completed, the CSAPI engine will automatically start using the new definitions.

</dd>

</dl>

| [Prev](modules.conntrol.php)  | [Up](modules.php) |  [Next](modules.custom_logger.php) |
| 14.17. conntrol – Fine-Grained Connection Control  | [Table of Contents](index.php) |  14.19. custom_logger – Customizable Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)