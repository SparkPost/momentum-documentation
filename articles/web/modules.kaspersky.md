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

| 14.35. kaspersky – Kaspersky |
| [Prev](modules.jlog.php)  | Chapter 14. Modules Reference |  [Next](modules.mail_loop.php) |

## 14.35. kaspersky – Kaspersky

<a class="indexterm" name="idp12305248"></a>

This AV engine client module communicates with an external Kaspersky scan engine over TCP/IP. It runs in the IO pool by default.

<a name="example.kaspersky"></a>

**Example 14.55. kaspersky module**

```
Validate validate/antivirus antivirus {
}

Validate validate/av_kaspersky kaspersky  {
  daemon = "127.0.0.1:9001"
  daemon_is_remote = true
  timeout = 180
  action = pass
  paranoid = false
  context_variable = "virus"
  skip_context_variable = "skip_virus_check"
  file_base = "/var/tmp"
}
```

### Note

This module is not supported after version 2.2.

For a list of the configuration options that this module shares with other antivirus modules see [Section 14.2.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.2.1. antivirus Configuration").

Find below a description of the configuration options unique to this antivirus module.

<dl class="variablelist">

<dt>daemon</dt>

<dd>

Daemon IP address and port number (default 9001). The daemon may optionally be run on another machine.

</dd>

<dt>daemon_is_remote</dt>

<dd>

Must be set to `true` (even if the daemon is running locally) to enable TCP/IP scanning (NETSCAN) of large messages, as opposed to local file scanning (SCAN), which requires a different Kaspersky license.

</dd>

</dl>

For a list of the configuration options that this module shares with other antivirus modules see [Section 14.2.1, “antivirus Configuration”](modules.antivirus.php#modules.antivirus.configuration "14.2.1. antivirus Configuration").

This module supports the **kaspersky_avscan** Sieve command. For more information see [antivirus](sieve.ref.antivirus.php "antivirus").

For more information about Kaspersky see [http://www.kaspersky.com/](http://www.kaspersky.com/).

| [Prev](modules.jlog.php)  | [Up](modules.php) |  [Next](modules.mail_loop.php) |
| 14.34. jlog – The jlog Module  | [Table of Contents](index.php) |  14.36. mail_loop – Mail Loop Detection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)