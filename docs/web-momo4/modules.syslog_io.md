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