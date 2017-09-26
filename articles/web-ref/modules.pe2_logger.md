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

| 14.52. pe2_logger – Module |
| [Prev](modules.outbound_smtp_auth.php)  | Chapter 14. Modules Reference |  [Next](modules.persistio.php) |

## 14.52. pe2_logger – Module

<a class="indexterm" name="idp20738096"></a>

Use this module to track deliveries and bounces when the MTA is part of a Message Central configuration.

**Configuration Change. ** As of Momentum version 3.5 (Message Central version 3.7) this module has been replaced by the [mc_logger Module](https://support.messagesystems.com/docs/web-mc/mc-mtas.php).

### 14.52.1. Configuration

<a name="modules.pe2_logger.example"></a>

**Example 14.80. pe2_logger outbound configuration**

```
pe2_logger "pe2_logger1" {
  filename_template = "var/log/ecelerity/pe2/%s-%s-%d-%d"
  batch_interval = 300
}
```

<dl class="variablelist">

<dt>batch_interval</dt>

<dd>

How often log entries are batched and forwarded to the PostgeSQL database. The default value for this option is 300 seconds.

</dd>

<dt>default_ident</dt>

<dd>

**Configuration Change. ** This feature is available starting from Momentum 3.0.20.

An optional identifier added to the VERP address immediately preceding the five hexadecimal numbers in the log file name (These numbers relate to Message Central identifiers such as the Org ID and mailing ID). This identifier must include at least one non-hexadecimal character to avoid ambiguity with the fields that follow it. If this option is specified, the identifier will be prepended to the log file name. This option is useful if you are running more than one instance of Message Central where the instances log to the same directory and you wish to have distinct log files.

If you set this option *and* override `filename_template` an additional `%s` macro is required in the definition of `filename_template` as shown below:

```
pe2_logger "pe2_logger1" {
  filename_template = "/var/log/ecelerity/pe2/%s-%s-%s-%d-%d"
  default_ident = "my_identifier"
}
```

If you only set the `default_ident`, and do not set `filename_template`, the module will do the right thing on its own.

</dd>

<dt>filename_template</dt>

<dd>

At runtime, the first string value for the filename template will be replaced with either `bounce` or `delivery` and the second string value with the *`hostname`*. The integer values are, respectively, the Org ID and the Mailing ID. This log file is loaded into the database by the pe2batch process. The default value for this option is `/var/log/ecelerity/pe2/%s-%s-%d-%d`.

</dd>

<dt>suppress_delivery_logs</dt>

<dd>

The default value for this option is `false`. To suppress the creation of logs, set this option to `true`.

</dd>

<dt>timestamp_format</dt>

<dd>

The default value for this option is Unix timestamp format, seconds since the epoch. There are two "special" value: `unix` which is also the default and `SQLServer` which uses `YYYYMMDDTHH:MM:SS.mmm` where `SS.mmm` means seconds with up to 1/1000 of a second resolution.

</dd>

</dl>

The configuration shown in [Example 14.80, “pe2_logger outbound configuration”](modules.pe2_logger.php#modules.pe2_logger.example "Example 14.80. pe2_logger outbound configuration") is suitable for an outbound MTA. To use this module on an inbound MTA, load it passively as shown below.

```
pe2_logger "pe2_logger1" {
  enabled = false
}
```

When loaded in passive mode, you must use Sieve actions to log events.

Passive operation is not suitable for outbound MTAs, as there is no way to log the delivery in passive mode.

For information on using this module in a Message Central configuration, see [Inbound and Outbound MTAs](https://support.messagesystems.com/docs/web-mc/mc-mtas.php).

### 14.52.2. Sieve Usage

If you load the module in passive mode, it will no longer log anything and you will instead need to use the Sieve functions [pe2_mark_unsubscribed](sieve.ref.pe2_mark_unsubscribed.php "pe2_mark_unsubscribed") and [pe2_mark_bounced](sieve.ref.pe2_mark_bounced.php "pe2_mark_bounced") to log unsubscribe and bounce events.

The `pe2_mark_unsubscribed` Sieve action can be used to implement unsubscribe-via-email; you would configure your policy scripts to make a determination about whether the incoming message is a request to unsubscribe, and then issue a call to `pe2_mark_unsubscribed`.

Note that unsubscribe in this context is equivalent to marking the recipient as unsubscribed in the system, opting them out of **all** future mailings until they are re-subscribed.

When used in passive mode, you must make sure that the MTA is not one being injected into directly by the Message Central generator, as there is no way for that MTA to log deliveries.

| [Prev](modules.outbound_smtp_auth.php)  | [Up](modules.php) |  [Next](modules.persistio.php) |
| 14.51. outbound_smtp_auth – Module  | [Table of Contents](index.php) |  14.53. persist_io – Persistent IO Wrapper |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)