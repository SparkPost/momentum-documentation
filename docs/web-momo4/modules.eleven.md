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

| 71.31. eleven – Eleven eXpurgate Content Scanning |
| [Prev](modules.ec_logger.php)  | Chapter 71. Modules Reference |  [Next](modules.engage_tracker.php) |

## 71.31. eleven – Eleven eXpurgate Content Scanning

<a class="indexterm" name="idp21656432"></a>

The eleven module implements the spam filter and e-mail categorization service available from [http://www.eleven.de/](http://www.eleven.de/). If you intend to use this module be sure to choose it during installation. For more information, see [Section 12.1, “Installing Partner Modules”](post_installation.php#install.additional.packages "12.1. Installing Partner Modules").

### 71.31.1. Configuration

As with other Validation modules, eleven may be loaded in passive mode which means that inbound messages will not be virus scanned unless you explicitly call a policy script. In order to enforce policy using scripts, this module must be loaded in passive mode. Modules are loaded passively by setting the `enabled` option to `false`.

The following is a typical configuration:

<a name="example.eleven3"></a>

**Example 71.58. eleven module**

```
eleven {
  enabled = false
  work_dir = "/var/tmp"
  update_period = 3600
  license = "/usr/local/eleven/etc/client.key"
  enable_antivir = true
  servers = ( "foo.example.com:55555:1" "bar.example.com:12345:2" )
}
```

The following configuration options are available:

<dl class="variablelist">

<dt>enable_antivir</dt>

<dd>

Enables the Avira SAVAPI-based virus detection. *Note*: The minor results `virus` and `outbreak` are only returned if this option is set to `true`. Default value is `false`.

</dd>

<dt>license</dt>

<dd>

Absolute path to the user's license. Default value is `/usr/local/eleven/etc/client.key`.

</dd>

<dt>servers</dt>

<dd>

Specifies additional update servers. Each server is specified as *`host:port:priority`*. The trailing port and priority fields are optional and, if omitted, default to 55555 (the default port for eleven updates) and 5 respectively. Priority decreases as the numerical value increases with `0` being the highest possible priority.

</dd>

<dt>update_period</dt>

<dd>

How often to poll for updates. Default value is `3600` seconds, one hour. If this value is set to `0`, updates are disabled.

</dd>

<dt>work_dir</dt>

<dd>

Location of temporary files created by this module. Default value is `/var/tmp`.

</dd>

</dl>

### 71.31.2. Lua Functions

This module makes the Lua function `msys.expurgate.scan` available. For a description of how this function is used, see [msys.expurgate.scan](lua.ref.msys.expurgate.scan.php "msys.expurgate.scan").

**Scores**

Lua creates a string representation of the major score value. These functions annotate the validation context with the following values:

*   eleven-majorscore – Numeric classification of the scan

*   eleven-minorscore – Numeric minor classification

*   eleven-result – String representation corresponding to the eleven-majorscore number

*   eleven-result-subtype – String representation corresponding to the eleven-minorscore number

If an error occurs, `eleven-majorscore` is set to "error" and `eleven-minorscore` holds the error message. The same applies to `eleven-result` and `eleven-result-subtype`; if an error occurs `eleven-result` is set to "error" and `eleven-result-subtype` is set to the error message.

Otherwise, the major score is set to the numeric major classification and the major result is set to a string version of that classification number. Its value will be one of the following:

*   clean

*   suspect

*   spam

*   bulk

*   dangerous

*   unknown

The minor score is set to the numeric minor classification, and the minor result is set to the string representation corresponding to the eleven-minorscore number. Its value will be one of the following:

*   normal

*   empty

*   empty-body

*   almost-empty

*   bounce

*   advertisement

*   porn

*   virus

*   attachment

*   code

*   iframe

*   outbreak

*   url

*   url-count

*   mail-count

*   sender

*Note*: The minor results `virus` and `outbreak` are only returned if the `enable_antivir` option is set to `true`.

| [Prev](modules.ec_logger.php)  | [Up](modules.php) |  [Next](modules.engage_tracker.php) |
| 71.30. EC_logger – Momentum-Style Logging  | [Table of Contents](index.php) |  71.32. engagement_tracker – HTTP Engagement Tracking |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)