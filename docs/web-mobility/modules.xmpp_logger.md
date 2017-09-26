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

| 10.2. The XMPP Logger Module |
| [Prev](mobility.xmpp.modules.php)  | Chapter 10. Mobile Momentum XMPP |  [Next](mobility.xmpp.modules.roster.presence.php) |

## 10.2. The XMPP Logger Module

The xmpp_logger is similar to the SMPP and MMS loggers. This module determines the location of the XMPP log file, which types of records are created and the format of those records. Use of this logger is optional. For general information about Momentum logging capabilities see [Logging](https://support.messagesystems.com/docs/web-ref/operations.logging.php).

Find below a sample xmpp_logger configuration:

```
xmpp_logger "xmpp_logger1" {
  logfile = "/var/log/ecelerity/xmpplog.ec"
  logmode = 0644
  log_reception_format = "%t+R+%st+%at+%af+%ai+%ay+%H"
  log_delivery_format = "%t+D+%st+%at+%af+%ai+%ay+%H"
}
```

The configuration options are as follows:

<dl class="variablelist">

<dt>heartbeat</dt>

<dd>

The heartbeat interval in seconds. A heartbeat is written periodically to the log to indicate that Momentum is still active and may log further data. The default value for this option is `60`.

</dd>

<dt>log_delivery</dt>

<dd>

Whether or not to log deliveries. The default value for this option is `true`.

</dd>

<dt>log_delivery_format</dt>

<dd>

The macro and separator format for delivered messages. The default value for this option is `%t+D+%st+%at+%af+%ai+%ay+%H`. The literal value ‘`D`’ indicates a delivery. For the macro substitutions see [Section 10.2.1, “XMPP Log Entry Macros”](modules.xmpp_logger.php#modules.xmpp_logger.macros "10.2.1. XMPP Log Entry Macros").

</dd>

<dt>log_heartbeat_format</dt>

<dd>

The format of a heartbeat log entry. The default value for this option is `%t+M`. The `%t` macro expands to a Unix timestamp and ‘`M`’ indicates that this log entry is a heartbeat.

</dd>

<dt>log_reception</dt>

<dd>

Whether or not to log receptions. The default value for this option is `true`.

</dd>

<dt>log_reception_format</dt>

<dd>

The macro and separator format for received messages. The default value for this option is `%t+R+%st+%at+%af+%ai+%ay+%H`. The literal value ‘`R`’ indicates a reception. For the macro substitutions see [Section 10.2.1, “XMPP Log Entry Macros”](modules.xmpp_logger.php#modules.xmpp_logger.macros "10.2.1. XMPP Log Entry Macros").

</dd>

<dt>logfile</dt>

<dd>

The log file path. The default value for this option is `/var/log/ecelerity/xmpplog.ec`.

</dd>

<dt>logmode</dt>

<dd>

The logfile mode in octal format. The default value for this option is `0644`.

</dd>

<dt>namespace</dt>

<dd>

The default value for this option is `xmpp_logger,sieve,custom_logger`.

</dd>

</dl>

### 10.2.1. XMPP Log Entry Macros

XMPP log entries can use nine macros. By default the first field is a timestamp and the second field identifies the log entry type. The remaining fields are macros. The macros used in defining the log formats are as follows:

*   %t – When the event was logged, in seconds since the Unix epoch.

*   %st – The type of XMPP stanza. Legal types are iq, message, presence, stream and error.

*   %so – The full XMPP stanza with the message obfuscated.

*   %sr – The entire raw XMPP stanza. This provides the most information. It is redundant since `%st, %at, %af, %ai,` and `%ay` are logged.

*   %af – The from attribute. This is the Jabber ID of the sender.

*   %at – The to attribute. This is the Jabber ID of the recipient.

*   %ai – The stanza's ID attribute. This attribute is used to associate responses with requests.

*   %ay – The stanza's XML type *attribute*. In the core protocol, <iq> stanzas may have a type value of: `get, set, result, or error`; <message> stanzas may have a type value of: `chat, normal, headline, group chat, or error`; <presence> stanzas may have a type value of: `error, probe, subscribe, subscribed, unavailable, unsubscribe, or unsubscribed`.

*   %H – The remote IP host and port.

| [Prev](mobility.xmpp.modules.php)  | [Up](mobility.xmpp.modules.php) |  [Next](mobility.xmpp.modules.roster.presence.php) |
| Chapter 10. Mobile Momentum XMPP  | [Table of Contents](index.php) |  10.3. Roster and Presence |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)