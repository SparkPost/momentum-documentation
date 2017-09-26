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

| Chapter 3. Configuring the Mobile Momentum Modules |
| [Prev](quickmob.installing.php)  |   |  [Next](quickmob.mm7.modules.php) |

## Chapter 3. Configuring the Mobile Momentum Modules

**Table of Contents**

<dl class="toc">

<dt>[3.1\. The SMPP Modules](quickmob.config.modules.php#quickmob.smpp.modules)</dt>

<dt>[3.2\. The MM7 Modules](quickmob.mm7.modules.php)</dt>

<dt>[3.3\. Configuring for Web UI Stats](quickmob.config.web.stats.php)</dt>

</dl>

Once installation is complete you can configure Mobile Momentum. Configuring it requires

*   configuration of the modules specific to Mobile Momentum

*   configuration of other mobile-related options or scopes

This chapter describes configuring the Mobile Momentum modules. The subsequent chapter deals with other configuration requirements. In both cases configuration MM7 configuration follows SMPP configuration.

The Mobile Momentum modules are either Short Message Peer-to-Peer Protocol(SMPP) or Multi-Messaging Service (MM7) modules. The SMMP modules relate to logging SMPP protocol messages and the MM7 modules to the MM7 protocol. Separate sections are devoted to the different protocols.

## 3.1. The SMPP Modules

There are three SMPP modules: smpp, smpp_logger and smpp_bounce_logger. The smpp module is loaded automatically as required. You only need to explicitly include it if you wish to change the debug level.

### 3.1.1. The smpp_logger Module

The smpp_logger module determines the location of the SMPP log file, which types of records are created and the format of those records.

A sample configuration follows. (This example demonstrates the use of optional log formatting parameters.)

<a name="quickmob.example.smpp_logger"></a>

**Example 3.1. smpp_logger configuration**

```
smpp_logger "smpp_logger1" {
  logfile = "/var/log/ecelerity/smpplog.ec"
  logmode = 0644
  log_reception_format = "%t@R@%i@%sa@%da@%d@%g@%b@%H@%B@%sg"
  log_permfail_format = "%t@P@%i@%sa@%da@%d@%g@%b@%H@%e"
  log_delivery_format = "%t@D@%i@%sa@%da@%d@%g@%b@%H@%B@%sg@%rm"
  log_tempfail = false
  log_status = false
}
```

You must add this module to your configuration file if you wish to log SMPP events. You can do this using the web UI or as described in "[Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php)".

You may not need to change any of the configuration options from their default values. For detailed instructions regarding this module's configuration options see "[The smpp_logger Module](https://support.messagesystems.com/docs/web-mobility/mobility.configuration.smpp.php)".

### 3.1.2. smpp_bounce_logger Module

It is often convenient to look at bounced SMPP messages only. The smpp_bounce_logger makes this much easier by writing bounces—both in-band and out-of-band bounce messages—to a single file in ‘@’ delimited format.

A sample configuration follows:

<a name="quickmob.example.smpp.bounce"></a>

**Example 3.2. smpp_bounce_logger configuration**

```
smpp_bounce_logger "smpp_bounce_logger1" {
  bounce_concurrency = 1
  bounce_logfile = "/var/log/ecelerity/smppbouncelog.ec"
}
```

You must add this module to your configuration file if you wish to log SMPP bounces separately. You can do this using the web UI or as described in "[Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php)".

You may not need to change any of the configuration options from their default values. For detailed instructions regarding this module's configuration options see https://support.messagesystems.com/docs/web-mobility/ "[The smpp_bounce_logger Module](https://support.messagesystems.com/docs/web-mobility/modules.mobility.smpp_bounce_logger.php)".

| [Prev](quickmob.installing.php)  |   |  [Next](quickmob.mm7.modules.php) |
| Chapter 2. Installing Mobile Momentum  | [Table of Contents](index.php) |  3.2. The MM7 Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)