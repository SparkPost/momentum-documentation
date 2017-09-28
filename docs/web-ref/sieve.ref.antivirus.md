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

| antivirus |
| [Prev](sieve.ref.advertize_esmtp_capability.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.audit_connections_on_listener.php) |

<a name="sieve.ref.antivirus"></a>
## Name

f_secure_avscan, clamav_avscan, csapi_avscan — antivirus functions for Sieve

## Synopsis

`f_secure_avscan`

`clamav_avscan`

`csapi_avscan`

<a name="idp28565968"></a>
## Description

These Sieve tests and actions are provided by the [Section 14.5, “antivirus – Antivirus Modules”](modules.antivirus.php "14.5. antivirus – Antivirus Modules"); you must have loaded and correctly configured it before you can successfully use them. They can be used only in the data validation phase.

### Note

The fsecure module is not supported in version 3.1.

The antivirus framework automatically registers Sieve actions for each antivirus engine that is loaded into Momentum, allowing you to selectively run the engine based on criteria in a Sieve script. The chief benefit of doing this is to reduce the CPU cost of scanning messages if some earlier validation has decided that the mail will be rejected. In order to reap this benefit, you should load your antivirus modules in "passive" mode:

```
clamav {
  Enabled = false
  ...
}
```

Validation modules loaded in passive mode will not have their validation hooks called automatically, which means that inbound messages will not be virus scanned unless you explicitly call the corresponding Sieve action.

As each AV module is loaded, the AV framework registers a Sieve action to trigger a scan. The action name is built up from the name of the AV engine with non alpha-numeric characters translated to underscores with `_avscan` appended to it. The F-Secure engine using **f_secure_avscan**, the ClamAV engine using **clamav_avscan** and the csapi engine using **csapi_avscan**. Other third party AV modules will be named in a similar fashion.

Usage is as simple as:

`clamav_avscan;`

The action returns no value. The scanning process will mark up the validation context for further processing by a Sieve script. For example, add the following block in your `ecelerity.conf`:

```
clamav {
  Enabled = false
  daemon = "127.0.0.1:3310"
  timeout = "20"
  action = pass
  paranoid = false
  context_variable = "VIRUS"
  skip_context_variable = "skip_virus_check"
  file_base = "/var/tmp"
}

sieve "sieve1" {
  script "data_phase1" {
    source = "/path/to/clamav.siv"
  }
}
```

The value of `context_variable` is prefixed to `_info` to create the vctx_mess context variable `VIRUS_info`. This variable is used in the following Sieve script saved as `/path/to/clamav.siv`:

```
clamav_avscan;

if vctx :contains "VIRUS_info" "error" {
  ec_action 451 "AV system offline" "virus:check error";
  stop;
}
elsif vctx :contains "VIRUS_info" "" {
  ec_action 550 "Virus detected %{vctx_mess:clamav_status_info}" "virus:Viruses rejected";
  stop;
}
# if we got here, there was no virus detected
```

The %{vctx_mess:*`avscan`*_status_info} will contain textual information from the AV engine itself, typically the virus name. The actual name of this context variable is the engine name prepended to `_status_info` so it varies depending upon the antivirus engine used. (In this particular case it is `clamav_status_info`.) See [Section 14.5, “antivirus – Antivirus Modules”](modules.antivirus.php "14.5. antivirus – Antivirus Modules") for more details.

| [Prev](sieve.ref.advertize_esmtp_capability.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.audit_connections_on_listener.php) |
| advertize_esmtp_capability  | [Table of Contents](index.php) |  audit_connections_on_listener |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)