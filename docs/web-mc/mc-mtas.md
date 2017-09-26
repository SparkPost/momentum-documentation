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

| 1.6. Inbound and Outbound MTAs |
| [Prev](mc-upgrade-341-to-351.php)  | Chapter 1. Installing Message Central |  [Next](mc-start-services.php) |

## 1.6. Inbound and Outbound MTAs

The Message Central bundle includes the latest version of Momentum. Install the inbound and outbound MTA as per the standard instructions. The recommended configuration is to install two separate instances on two different machines. However, depending upon your circumstances, you can install one instance for both incoming and outbound mail. For instructions on installing the MTA see ["Installation"](https://support.messagesystems.com/docs/web-ref/install.php).

### 1.6.1. The mc_logger Module

The mc_logger module is introduced in version 3.7\. It takes over from and improves on the pe2_logger but also handles SMPP deliveries and bounces in addition to SMTP deliveries and bounces. The mc_logger module is installed on both the inbound and outbound MTAs. Events are logged on the machine hosting the MTA and then transferred to the Message Central database as appropriate.

The mc_logger module is enabled by including the Message Central `ecelerity_logger.conf` file in the Momentum configuration file. This is done automatically for you by the installer. To confirm this open the Momentum configuration file, typically found at `/opt/msys/ecelerity/etc/conf/default/ecelerity.conf`. The line that includes `ecelerity_logger.conf` is as follows:

`readonly_include "/opt/msys/pe2/etc/ecelerity_logger.conf"`

**Configuration Change. ** As of version 3.7 the mc_logger module replaces the pe2_logger module.

**1.6.1.1. Configuration**
```
mc_logger "mc_logger1" {
  logfile = "jlog://var/log/ecelerity/mc_log.rt=>mclog_loader"
}
```

### Warning

Check with professional services before changing the values of any of these options.

<dl class="variablelist">

<dt>default_ident</dt>

<dd>

An identifier that will appear in the system logs. There is no default value for this option. Choose a meaningful value.

</dd>

<dt>logfile</dt>

<dd>

The location of the Message Central log files. The default value for this option is `/var/log/ecelerity/mc_logger.rt=>mclog_loader`.

### Warning

Changing the value of this option is not recommended. The [mclog_loader](mclog_loader.php "mclog_loader") script expects the path `/var/log/ecelerity/mc_logger.rt` and a subscriber named `mclog_loader`.

</dd>

<dt>log_delivery</dt>

<dd>

Whether or not to log deliveries. The default value for this option is `true`.

</dd>

<dt>log_delivery_format</dt>

<dd>

Not for public consumption. The format of the delivery log. The default value for this option is `%t@D@%v@%oid@%mid@%sid@%tid@%cid@%pc@%s@%rt@%rd@%pt@%mg`. The literal value `D` indicates a delivery log entry. For a description of the other fields see [Section 1.6.1.2, “Log Entry Macros”](mc-mtas.php#mc.mc_logger.macros "1.6.1.2. Log Entry Macros").

</dd>

<dt>log_inband</dt>

<dd>

Whether or not to log inband bounces. The default value for this option is `true`.

</dd>

<dt>log_inband_format</dt>

<dd>

The format of the log entry for inband bounces. The default value for this option is `%t@B@%v@%oid@%mid@%sid@%tid@%cid@%pc@%s@%rt@%rd@%pt@f@%bc@%mg`. The literal value `B` indicates a log entry for a bounce. The literal value for the third last field, `f`, means `false`, indicating that this is not an out-of-band bounce. For a description of the other fields see [Section 1.6.1.2, “Log Entry Macros”](mc-mtas.php#mc.mc_logger.macros "1.6.1.2. Log Entry Macros").

</dd>

<dt>mc_logger</dt>

<dd>

Whether or not to enable logging for Message Central. The default value for this option is `true`.

</dd>

<dt>log_outband</dt>

<dd>

Whether or not to log out-of-band bounces. The default value for this option is `true`.

</dd>

<dt>log_outband_format</dt>

<dd>

The format of the log entry for out-of-band bounces. The default value for this option is `%t@B@%v@%oid@%mid@%sid@%tid@%cid@%pc@%s@%rt@%rd@%pt@t@%bc@%mg`. The literal value `B` indicates that this is a bounce log entry. The literal value for the third last field, `t`, means `true`, indicating that this is an out-of-band bounce. For a description of the other fields see [Section 1.6.1.2, “Log Entry Macros”](mc-mtas.php#mc.mc_logger.macros "1.6.1.2. Log Entry Macros").

</dd>

</dl>

**1.6.1.2. Log Entry Macros**

The log format macros are resolved as follows:

*   `%t` a Unix timestamp in epoch format

*   `%v` the log version number. `1.0` indicates Message Central version 3.7.

*   `%oid` the org ID

*   `%mid` the mailing ID

*   `%sid` the segment ID

*   `%tid` the template ID

*   `%cid` the contact ID

*   `%pc` the progress counter

*   `%rt` the RCPT TO

*   `%rd` the routing domain

*   `%pt` the protocol. Legitimate values are `smtp` and `smpp`.

*   `%mg` the message

*   `%bc` the bounce code. For a complete list of codes see [Bounce Classification Codes](https://support.messagesystems.com/docs/web-ref/bounce_logger.classification.codes.php).

### 1.6.2. The `pe2_logger` Module

**Configuration Change. ** As of version 3.7, the pe2_logger module is deprecated. It is replaced by the [Section 1.6.1, “The mc_logger Module”](mc-mtas.php#mc.mc_logger "1.6.1. The mc_logger Module").

The `pe2_logger` module is installed on both the inbound and outbound MTAs. The outbound MTA tracks delivery and the inbound MTA tracks clicks, opens, bounces and other actions related to Message Central, such as out-of-band bounces. Events are logged on the machine hosting the MTA and then transferred to the Message Central database as appropriate.

Enabling the `pe2_logger` option is as simple as including the Message Central `ecelerity_logger.conf` file in the Momentum configuration file. This should be done automatically for you by the installer. To confirm this open the Momentum configuration file, typically found at `/opt/msys/ecelerity/etc/conf/default/ecelerity.conf`. There should be a line that includes `/opt/msys/pe2/etc/ecelerity_logger.conf` shown as following example.

<a name="example.mc.ecelerity_logger"></a>

**Example 1.1. Include ecelerity_logger.conf into ecelerity.conf**

`readonly_include "/opt/msys/pe2/etc/ecelerity_logger.conf"`

A sample `ecelerity_logger.conf` file is reproduced below.

```
# This configuration snippet enables logging of data to feed back
# into Message Central for deliverability and message disposition
# reporting.

ecstream {}

ECStream_Listener {
 Listen ":1825" {
 }
}

# For throttles, bindings and validation context data to be passed
# through, you will need to configure the XSETCONTEXT SMTP extension
# in your ESMTP_Listener

# without a campaign stanza, suspend/resume/cancel operations
# from the UI will not take effect.
# Additionally, binding assignment and mailing throttles will
# be ineffective.
campaign {
  message_central = "true"
  throttle_context_variable = "mc_throttle"
  # the mcdb datasource is defined automatically by the installer
  # when the message central bundle is installed
  ds_cache = "mcdb"
}

Datasource "mcdb" {
  # allow up to 1 minute of caching for campaign status
  cache_life = 60
}
# deprecated as of version 3.7
pe2_logger "pe2_logger1" {
  filename_template = "/var/log/ecelerity/pe2/%s-%s-%d-%d"
}
# mc_logger is available as of version 3.7
mc_logger "mc_logger1" {
  logfile = "jlog://var/log/ecelerity/mc_log.rt=>mclog_loader"
}
scriptlet scriptlet {
#  routing for SMPP; don't enable by default as it requires SMPP to be
#  configured!
#  script routing {
#    source = "msys.mc.routing"
#  }
#  script cust {
#    source = "path_to_your_custom_rules"
#  }
}
```

The campaign module has a number of options that have default values specific to Message Central. These values should not be changed otherwise the web UI will not work properly.

These options are shown below with their default values:

*   message_central = "true"

    Whether the MTA is part of a Message Central configuration.

*   throttle_context_variable = "mc_throttle"

    The name of the throttle validation context variable.

*   ds_cache = "mcdb"

    The data source cache. This cache is automatically defined by the installer.

The default log location where the MTA will write Message Central delivery and bounce logs is `/var/log/ecelerity/pe2` Create this directory and make sure that it is writable by the user the MTA will run as, typically `ecuser`.

**1.6.2.1. The `pe2_logger` Configuration Options**

`pe2_logger` options are typically defined in the file `/opt/msys/pe2/etc/ecelerity_logger.conf`. It is then included into the Momentum configuration file. The `pe2_logger` module configured on an outbound MTA is shown show below with its default values:

**Configuration Change. ** The pe2_logger is deprecated as of version 3.7\. It has been replaced by the mc_logger module. For more information see [Section 1.6.1, “The mc_logger Module”](mc-mtas.php#mc.mc_logger "1.6.1. The mc_logger Module").

```
pe2_logger "pe2_logger1" {
 filename_template = "var/log/ecelerity/pe2/%s-%s-%d-%d"
 batch_interval = "300"
}
```

At runtime, the first string value for the filename template will be replaced with either `bounce` or `delivery` and the second string value with the *`hostname`*. The integer values are, respectively, the Org ID and the Mailing ID. This log file is loaded into the database by the pe2batch process.

There is also a `default_ident` option that can be added to the VERP address immediately preceding the five hexadecimal numbers in the log file name. This makes the log file more readily identifiable.

On an inbound MTA the pe2_logger module must be loaded in passive mode. When loaded in passive mode, it will no longer log anything and you will instead need to use the Sieve `pe2_mark_unsubscribed` and `pe2_mark_bounced` functions to log unsubscribe and bounce events. You may use any Sieve logic you wish to determine whether an incoming message is a bounce or an unsubscribe. When used in passive mode, you must make sure that the MTA is not one being injected into directly by the Message Central generator, as there is no way for that MTA to log deliveries.

A sieve module appears as shown in the sample `ecelerity_logger.conf` file above. This module invokes the `pe2.siv` script which calls the `pe2_mark_bounced` function.

For complete documentation of the pe2_logger see ["pe2_logger"](https://support.messagesystems.com/docs/web-ref/modules.pe2_logger.php).

| [Prev](mc-upgrade-341-to-351.php)  | [Up](mc-installation.php) |  [Next](mc-start-services.php) |
| 1.5. Upgrading from Message Central version 3.4.1 to version 3.5.1  | [Table of Contents](index.php) |  1.7. Services |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)