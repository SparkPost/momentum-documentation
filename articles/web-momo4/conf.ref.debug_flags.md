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

| debug_flags |
| [Prev](config.crypto_lock_method.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.default_binding.php) |

<a name="conf.ref.debug_flags"></a>
## Name

debug_flags — configure debug verbosity

<a name="idp24117488"></a>
## Description

Debug_Flags {
  *`level`* = ( *`mask`* )
}

Debug_Flags tells Momentum which events to write to the log_error handler of the logging subsystem. When using the default logging module `ec_logger`, these messages will appear in the `paniclog`. The mask is a decimal number representing the bit mask that is used to activate logging statements. A human-readable variation of Debug_Flags is used. The sample below shows the default setting, which turns on useful severe error messages, but leaves the more informational messages turned off, so that they don't clutter your log files.

```
Debug_Flags {
        DEBUG = ()
        INFO = ()
        NOTICE = ()
        WARNING = ()
        ERROR = (TIME FD SMTP LOG1 DNS DNSDS NET SIG MEM DB LIC SSL MOD START ALL)
        CRITICAL = (TIME FD SMTP LOG1 DNS DNSDS NET SIG MEM DB LIC SSL MOD START ALL)
}
```

### Note

Use ‘`ALL`’ instead of listing each service debug flag.

<a name="conf.ref.debug.levels"></a>

**Table 72.1. Debug levels**

| Level | Description |
| --- | --- |
| 0 | Debug |
| 1 | Info |
| 2 | Notice |
| 3 | Warning |
| 4 | Error |
| 5 | Critical |

<a name="conf.ref.subsystems"></a>

**Table 72.2. Subsystems and symbolic names**

| Subsystem | Symbolic Name |
| --- | --- |
| Generic | ERROR |
| Time | TIME |
| File Descriptors | FD |
| SMTP | SMTP |
| LOG1 | LOG1 |
| DNS | DNS |
| DNS data structures | DNSDS |
| Network | NET |
| Signals | SIG |
| Memory Management | MEM |
| Database | DB |
| License | LIC |
| SSL | SSL |
| Modules | MOD |
| Start | START |

<a name="idp24163136"></a>
## Scope

debug_flags is valid in the global scope.

| [Prev](config.crypto_lock_method.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.default_binding.php) |
| crypto_lock_method  | [Table of Contents](index.php) |  default_binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)