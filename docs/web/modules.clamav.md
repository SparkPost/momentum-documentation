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

| 14.13. clamav – ClamAV |
| [Prev](modules.cidrdb.php)  | Chapter 14. Modules Reference |  [Next](modules.cloudmark.php) |

## 14.13. clamav – ClamAV

<a class="indexterm" name="idp10950912"></a>

If you intend to use this module be sure to choose it during installation.

**Configuration Change. ** This feature is available starting from Momentum 2.2.0.7.

<a name="example.clamav"></a>

**Example 14.16. clamav module**

```
Validate validate/antivirus antivirus {
}

Validate validate/av_clamav clamav {
  daemon = "127.0.0.1:3310"
  timeout = "20"
  action = "pass"
  paranoid = false
  context_variable = "virus"
  skip_context_variable = "skip_virus_check"
  file_base = "/var/tmp"
}
```

**Configuration Change. ** Momentum version 2.2.2.45 supports Clam AV 0.95 and later. Prior to this, Momentum supported Clam AV 0.94\. Momentum version 2.2.2.44 does not support Clam AV at all.

Find below a description of the configuration options unique to this antivirus module.

<dl class="variablelist">

<dt>daemon</dt>

<dd>

The ClamAV engine connects to its external daemon over TCP/IP. This means the daemon may optionally be run on another machine. It runs in the IO pool by default.

</dd>

</dl>

For instructions on configuring this module using the web UI and for a list of the configuration options that this module shares with other antivirus modules see [Section 14.2.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.2.1. antivirus Configuration").

This module uses the configuration options common to all antivirus modules. These options are discussed in [Section 14.2, “antivirus – Antivirus Modules”](modules.antivirus.php "14.2. antivirus – Antivirus Modules"). For the clamav module, the `context_variable` option defaults to `clamav_status`.

| [Prev](modules.cidrdb.php)  | [Up](modules.php) |  [Next](modules.cloudmark.php) |
| 14.12. cidrdb – CIDRDB  | [Table of Contents](index.php) |  14.14. cloudmark – Cloudmark Authority Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)