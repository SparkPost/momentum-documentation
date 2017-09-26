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

| 71.17. clamav – ClamAV |
| [Prev](modules.cidrdb.php)  | Chapter 71. Modules Reference |  [Next](modules.cloudmark.php) |

## 71.17. clamav – ClamAV

<a class="indexterm" name="idp20294160"></a>

The clamav module is an open source antivirus engine that is part of the default Momentum installation.

### 71.17.1. Configuration

The following is an example configuration:

<a name="example.clamav.3"></a>

**Example 71.28. clamav Configuration**

```
clamav {}
antivirus "antivirus1" {
  clamav "clamav1" {
    daemon = "127.0.0.1:3310"
    timeout = "20"
    action = "pass"
    paranoid = false
    context_variable = "virus"
    skip_context_variable = "skip_virus_check"
    file_base = "/var/tmp"
  }
}
```

### Note

In order to use this module, you must install ClamAV on your server and update it as needed or desired. Configure this module in the global scope **and** also within the antivirus scope as shown in [Example 71.28, “clamav Configuration”](modules.clamav.php#example.clamav.3 "Example 71.28. clamav Configuration").

The clamav module is a singleton in the global scope but a non-singleton within the antivirus scope. In the global scope this module only supports the `enabled` and `debug_level` options.

For more information about Clam AV, see the [ClamAV](http://www.clamav.net/lang/en/) web page.

This module uses the configuration options common to all antivirus modules, plus the following plus the following clamav-specific options:

<dl class="variablelist">

<dt>daemon</dt>

<dd>

The ClamAV engine connects to its external daemon over TCP/IP. This means the daemon may optionally be run on another machine. It runs in the IO pool by default.

</dd>

</dl>

For a list of the configuration options that this module shares with other antivirus modules, see [Section 71.6.1, “Configuration”](modules.antivirus.php#modules.antivirus.configuration "71.6.1. Configuration"). For the clamav module, the `context_variable` option defaults to `clamav_status`.

**71.17.1.1. clamav Runtime Usage****Lua Functions**

This module supports the **msys.av.scan** and the **msys.av.scan_part** Lua functions.

These functions return four values:

*   The *scan status* , which is one of the following values:

    *   msys.av.EC_AV_PART_IS_CONTAINER – A container was passed to msys.av.scan.

    *   msys.av.EC_AV_NAME_TOO_LONG – `av_engine_name` is longer than 40 characters.

    *   msys.av.EC_AV_NO_ENGINE – No AV engine is configured.

    *   msys.av.EC_AV_NOT_SUITABLE_FOR_STREAMING – AV engine cannot scan the message that was passed in as a stream.

    *   msys.av.EC_AV_ERROR – A runtime error occurred. This status is returned if the *engine scan code*           is either `OK` or `Empty file`, and the error text is returned in the *informational string* .

    *   msys.av.EC_AV_CLEAN – The scan code is either `OK` or `Empty file`, and there is no runtime error.

        This includes cases where a runtime error in the AV engine occurs.

    *   msys.av.EC_AV_INFECTED – Message is classified as infected if the scan code is **not** `OK` or `Empty file`.

    *   msys.av.EC_AV_UNSCANNABLE – Message could not be scanned.

*   An *informational string* , which typically contains the virus name; the precise contents of this string depend on the engine.

*   The *name of the AV engine*                  that detected the virus or `nil` if no virus was detected.

*   The *engine scan code*           or `nil` if no engine scan code is available. If the scan result is msys.av.EC_AV_CLEAN, this code will be either `OK` or `Empty file`.

For additional details about these functions, see [msys.av.scan](lua.ref.msys.av.scan.php "msys.av.scan") and [msys.av.scan_part](lua.ref.msys.av.scan_part.php "msys.av.scan_part").

| [Prev](modules.cidrdb.php)  | [Up](modules.php) |  [Next](modules.cloudmark.php) |
| 71.16. cidrdb – CIDRDB  | [Table of Contents](index.php) |  71.18. cloudmark – Cloudmark Authority® Content Scanning |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)