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

| 14.29. fsecure – F-Secure |
| [Prev](modules.exim_logger.php)  | Chapter 14. Modules Reference |  [Next](modules.host_fingerprint.php) |

## 14.29. fsecure – F-Secure

<a class="indexterm" name="idp12130192"></a><a name="idp12131792"></a>

**Example 14.49. fsecure module**

```
Validate validate/antivirus antivirus {
}

Validate validate/av_fsecure fsecure  {
  daemon = "/tmp/.fsav-65534"
  timeout = 60
  action = pass
  paranoid = false
  context_variable = "virus"
  skip_context_variable = "skip_virus_check"
  file_base = "/var/tmp"
}
```

**Configuration Change. ** This module is **not** supported in version 3.1.

<dl class="variablelist">

<dt>daemon</dt>

<dd>

The F-Secure antivirus runs as an independent process, and relies on a Unix domain socket for synchronization. The socket name defaults to `/tmp/.fsav-#####`, where "#####" is the userid that is executing the daemon. See the FSecure documentation at [http://www.f-secure.com/](http://www.f-secure.com/) for more details on setting the socket name. This engine runs in the IO pool by default.

</dd>

</dl>

For a list of the configuration options that this module shares with other antivirus modules see [Section 14.2.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.2.1. antivirus Configuration").

This module supports the **f_secure_avscan** Sieve command. For more information see [antivirus](sieve.ref.antivirus.php "antivirus").

For more information about F-Secure see [http://www.f-secure.com/](http://www.f-secure.com/).

| [Prev](modules.exim_logger.php)  | [Up](modules.php) |  [Next](modules.host_fingerprint.php) |
| 14.28. exim_logger – Exim-Compatible Logging  | [Table of Contents](index.php) |  14.30. fingerprint – Host Fingerprinting |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)