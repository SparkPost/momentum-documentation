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

| 71.71. syslog_io – The syslog_io Module |
| [Prev](modules.suppress_spool.php)  | Chapter 71. Modules Reference |  [Next](tls_macros.php) |

## 71.71. syslog_io – The syslog_io Module

<a class="indexterm" name="idp23211904"></a>

syslog_io is a wrapper module that uses the syslog library routines to log to the system logger facility.

### 71.71.1. Configuration

The following is an example configuration:

<a name="example.syslog.3"></a>

**Example 71.96. syslog_io version 3.0**

```
syslog_io {
  ident = "ecelerity" # the default
  default_facility = "mail" # the default
}
```

The following configuration options are available:

<dl class="variablelist">

<dt>default_facility</dt>

<dd>

The default_facility. The default value is `mail`.

</dd>

<dt>ident</dt>

<dd>

The identification string. The default value is `ecelerity`.

</dd>

</dl>

When this module is enabled, you can use the `syslog://` wrapper to write paniclog entries to the system log. You can override the default facility via an URL parameter, and optionally set the priority (the default value is `error`). For example:

<a name="example.syslog.paniclog.3"></a>

**Example 71.97. Usage**

```
ec_logger "ec_logger1" {
  paniclog = "syslog://?facility=mail&priority=error"
}
```

The facilities and priorities are the standard syslog values. Not all facilities are available on all systems.

### Warning

Be careful using this wrapper for the mainlog or rejectlog as the volume is likely to swamp the system logger.

| [Prev](modules.suppress_spool.php)  | [Up](modules.php) |  [Next](tls_macros.php) |
| 71.70. suppress_spool – Deferred Message Spooling  | [Table of Contents](index.php) |  71.72. tls_macros – TLS-related Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)