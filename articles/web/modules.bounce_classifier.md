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

| 14.9. bounce_classifier – Bounce Classifier |
| [Prev](modules.beik.php)  | Chapter 14. Modules Reference |  [Next](modules.bounce_logger.php) |

## 14.9. bounce_classifier – Bounce Classifier

<a class="indexterm" name="idp10776704"></a>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The bounce classifier module allows you to augment and override the built-in bounce classification system. It allows new rules (static and wildcarded) to be registered within the system, and new categories to be registered as well. Logs can be pulled out of either flat files, or via an arbitrary datasource. The types of datasources available are:

*   `CSV` (installed by default)

*   `SQLite` (installed by default)

*   `ODBC`

*   `LDAP`

### 14.9.1. Configuration

Whether or not you intend to use datasource-based feeds for your bounce classification overrides, you must minimally load the ds_core module.

<a name="example.bounce_classifier"></a>

**Example 14.12. bounce_classifier module**

```
Module datasource/ds_core ds_core {
  sqlite[
    uri = "sqlite:/path/to/db"
  ]
}

Module generic/bounce_classifier bounce_classifier {
  user_smtp_classification_overide =
    ":datasource:sqlite:SELECT domain, bounce_code, rule FROM overrrides;"
  refresh = 900
  custom_classes = [
    99 = "profanity"
  ]
}
```

When querying a flat file instead of a datasource, simply specify the path to the file.

There are two kinds of classification overrides, SMTP and Message Disposition Notification (MDN). SMTP overrides apply to the classification of errors that are returned over the SMTP dialog. MDN overrides apply to messages that are received out-of-band with the delivery. SMTP overrides can be special-cased to apply only to particular domains, whereas MDN overrides apply globally.

'SMTP bounces' are much more common than 'MDN bounces'. To determine the kind of bounce look at the connection stage code in the bounce log. For a description of these codes see [Section C.3, “Connection Stages”](log_formats.connection.stages.php "C.3. Connection Stages").

<dl class="variablelist">

<dt>user_smtp_classification_overide (Note the single ‘`r`’)</dt>

<dd>

The SMTP classification override file. The default name of this file is `user_smtp_classification.ovr`. The default location for administrators to add their file is `/opt/ecelerity/etc/`. The file format for SMTP overrides is: `domain,bounce_code,rule` . `domain` can be the empty string, in which case the rule is considered to be global, otherwise the rule will only apply to responses given when talking to the specified domain. `bounce_code` is the numeric bounce classification code you want to assign—this must either be an internal code, or one registered via the `custom_classes` directive. For more information about the internal codes see [Section C.2, “Bounce Classification Codes”](bounce_logger.classification.codes.php "C.2. Bounce Classification Codes"). When adding new codes be careful not to use existing internal code numbers. `rule` can take one of two forms. If the ‘`|`’ character appears anywhere in the string, it will act as a globbing character in a wildcard, otherwise the string will be considered a simple static pattern. In both cases, the rule will return true if the pattern matches any substring of the classification text. If you use a datasource instead of a flat-file, the datasource query must return 3 fields: domain, bounce_code, rule.

</dd>

<dt>user_mdn_classification_overide (Note the single ‘`r`’)</dt>

<dd>

The default name of this file is `user_mdn_classification.ovr`. In version 2.2 the default location for administrators to add their file is `/opt/ecelerity/etc/`. The file format for MDN overrides is: `bounce_code,rule` . `bounce_code` is the numeric bounce classification code you want to assign—this must either be an internal code, or one registered via the `custom_classes` directive. For more information about the internal codes see [Section C.2, “Bounce Classification Codes”](bounce_logger.classification.codes.php "C.2. Bounce Classification Codes"). When adding new codes be careful not to use existing internal code numbers. `rule` can be of one of two forms. If the ‘`|`’ character appears anywhere in the string, it will act as a globbing character in a wildcard, otherwise the string will be considered a simple static pattern. In both cases, the rule will return `true` if the pattern matches any substring of the classification text.

</dd>

<dt>refresh</dt>

<dd>

The frequency (in seconds) for refreshing the bounce classifications lists. The default value is `300` seconds.

</dd>

<dt>custom_classes</dt>

<dd>

`custom_classes` is a map of user-defined bounce_codes that have a numeric value less than 100 and a user-defined description string. Registering new bounce codes in this manner will allow you to setup `user_smtp_classification_overide` and `user_mdn_classification_overide` rules to assign to that bounce code. This description string is currently available via the custom_logger or other internal calls, but will not be rendered in the web UI bounce processing page.

</dd>

<dt>system_smtp_classification_override</dt>

<dd>

The default value for this option is `/opt/ecelerity/etc/updates/smtp_classification.ovr`. Do **not** change this option without consulting support.

</dd>

<dt>system_mdn_classification_override</dt>

<dd>

The default value for this option is `/opt/ecelerity/etc/updates/mdn_classification.ovr`. Do **not** change this option without consulting support.

</dd>

<dt>enable_system_updates</dt>

<dd>

Load unclassified bounce reasons into memory. The default value for this option is `0`. When this option is disabled, there are *no* system classifications, only the ones that you define manually.

</dd>

</dl>

### 14.9.2. bounce_classifier Management Using Console Commands

The bounce_classifier module can be controlled through `ec_console`; the following command(s) are available:

**14.9.2.1. bounce_classifier reload**

Using this command, a manual reload of the bounce classification overrides can be triggered at runtime.

**14.9.2.2. bounce_classifier set user_mdn_classification_overide *`file_name`***

Use this command to set the file used to override MDN bounces, commonly known as out-of-band bounces.

**14.9.2.3. bounce_classifier set user_smtp_classification_overide *`file_name`***

Use this command to set the file used to override SMTP bounces, commonly known as in-band bounces.

| [Prev](modules.beik.php)  | [Up](modules.php) |  [Next](modules.bounce_logger.php) |
| 14.8. beik – BEIK Module  | [Table of Contents](index.php) |  14.10. bounce_logger – Momentum-Style Bounce Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)