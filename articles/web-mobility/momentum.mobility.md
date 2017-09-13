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

| Chapter 2. Mobile Momentum SMPP |
| [Prev](overview.installing.php)  | Part I. Mobile Momentum SMPP |  [Next](mobility.persistent.connections.php) |

## Chapter 2. Mobile Momentum SMPP

**Table of Contents**

<dl class="toc">

<dt>[2.1\. The smpp Modules](momentum.mobility.php#modules.mobility.smpp_logger)</dt>

<dt>[2.2\. Persistent Connections](mobility.persistent.connections.php)</dt>

<dt>[2.3\. Throttling](mobility.throttling.php)</dt>

<dt>[2.4\. SMPP Caveats](mobility.smpp.caveats.php)</dt>

<dt>[2.5\. smpp_logger Module Configuration](mobility.configuration.smpp.php)</dt>

<dt>[2.6\. The smpp_bounce_logger Module](modules.mobility.smpp_bounce_logger.php)</dt>

<dt>[2.7\. Message Context Variables](mobility.runtime.php)</dt>

<dt>[2.8\. SMS Conversion Hook Points](mobility.runtime.hooks.php)</dt>

</dl>

## 2.1. The smpp Modules

<a class="indexterm" name="idp212448"></a>

Mobile Momentum supports SMPP version 3.4 and provides the ability to identify and capture email for Short Message Peer-to-Peer Protocol (SMPP) delivery. It provides a simple conversion of an email message to a Short Message Service (SMS) text message destined for a mobile phone.

Mobile Momentum provides an SMPP client within Momentum for transforming and forwarding email messages as SMS messages. In the language of the SMPP specifications, it is the implementation of an External Short Message Entity (ESME) that sends to Message Centers (MC) or Short Message Service Centers (SMSC), also known as a Short Message Gateway (SMG), using the Short Message Peer-to-Peer Protocol (SMPP). Mobile Momentum is also capable of transforming SMS to email.

When transforming email to SMS, Mobile Momentum first attempts to determine the destination email from the message text or subject. Failing this, Mobile Momentum attempts to look up the destination email address in a reverse address mapping database, using the source and destination telephone numbers as selection criteria.

During installation the SMPP reverse address mapping PostgreSQL table, `smpp.reverse_address_mappings`, is created in the `ecelerity` database. For information about this database see [PostgreSQL](https://support.messagesystems.com/docs/web-ref/operations.postgresql.php). This table is populated as email to SMS conversions occur. This allows address mappings to persist across restarts. During installation a datasource named `ram` is created to cache the results of database look-ups. This datasource is defined as follows:

Datasource "ram" {
  uri =
  ("pgsql:host=*`hostname`*;dbname=ecelerity;user=ecuser;password=*`passwd`*")
  no_cache = "true"
}
### Note

For Mobile Momentum 2.0, Early Availability version, you must manually create this datasource. You also need to set up a cron job to periodically clean up expired ram records. The script **/opt/msys/ecelerity/bin/clean_expired_pgsql.pl** is provided for this purpose. Modify it if your database configuration differs from the default.

For more information about datasources see [ds_core – Datasource Query Core](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php).

The SMPP element of Mobile Momentum is made up of the `smpp` module and the `smpp_logger` module. The smpp module is defined as `smpp {}` and is autoloaded as required so need not be explicitly included in your configuration file. Apart from the `enabled` option, the `debug_level` option is the only option valid within the smpp module scope. You only need to set this option if you are performing module-level debugging. The `debug_level` option is set in the same way as it is for other modules but you can only use error, warning and debug levels. The notice, info and critical levels are **not** available.

There are numerous mobility options that apply in the smpp_logger scope and others applicable in the global, domain, binding and binding_group scopes. The module-specific mobility options are found in [Section 2.5, “smpp_logger Module Configuration”](mobility.configuration.smpp.php "2.5. smpp_logger Module Configuration"). The other options that affect Mobile Momentum are listed in [Table 3.1, “smpp options”](mobility.smpp.options.php#table-smpp-options "Table 3.1. smpp options"). The most important are the server and port used to identify the target Message Center.

The minimum requirements in order to configure Mobile Momentum for interoperation with a Short Message Service Center (SMSC) are:

*   IP address of target SMSC(s)

*   SMPP TCP port number(s) on target SMSC(s)

*   Bind Credentials

*   SMSC System ID

*   SMSC Password

*   SMSC System Type – may be required by SMSC

Typical global and domain configuration options are shown in the following example:

<a name="mobility.domain.configuration"></a>

**Example 2.1. Domain configuration**

SMPP_SMSC_Port = 2775
SMPP_SMSC_Server = "*`ip_address`*"

domain "example.com" {
  SMPP_SMSC_Server  = "*`ip_address`*"
  SMPP_SMSC_Port = "8888"
  SMPP_SMSC_System_ID = "myid"
  SMPP_SMSC_Password = "mypass"
  SMPP_SMS_Data_Coding = "LATIN1"
  SMPP_ESME_Address = "57425"
  SMPP_Inactivity_Timer = 600
  SMPP_Enquire_Link_Timer = 90
  SMPP_Response_Timer = 60
  SMPP_Default_Email_Address = "user@example.com"
}

The `SMPP_SMSC_Server`, `SMPP_SMSC_Port` and `SMPP_Persistent_Connections` options are valid in the global and domain scopes only. The `SMPP_SMSC_Server` option can be either an IP address or a hostname. Following the usual semantics, the most specific definition applies. For example, in the above configuration the `SMPP_SMSC_Port` for the domain `testsmpp` is `8888` while all other domains default to `2775`. Besides these three options, all other mobility configuration options are valid in the binding, binding_group, domain and global scopes. All configuration options in all scopes can be set through the web UI in exactly the same way as other options.

If you expect SMS-to-email traffic (and not just email-to-SMS), you should also set a `SMPP_Default_Email_Address`; this is used as a catch-all in case the reverse address mappings can't determine what email address to send SMS-to-email replies to.

You can set any options by manually changing the `ecelerity.conf` file. You can also use the web UI. For example, to change or add an SMS binding configuration option through the web UI, point your browser at the machine hosting the UI, navigate to the Administration page and choose the "Advanced Configuration Editor" menu. Select the desired binding from the list box on the left. After selecting a binding you should see a list of all available options on the right side of the screen. The following image shows a partial list of the available options:

<a name="figure_binding"></a>

**Figure 2.1. Setting binding options**

![Setting binding options](images/binding_options.png)

Click on the desired option and set its value. For more information about using the web UI see [Using the Web Console](https://support.messagesystems.com/docs/web-ref/web3.php).

| [Prev](overview.installing.php)  | [Up](p.smpp.php) |  [Next](mobility.persistent.connections.php) |
| 1.4. Installing Momentum  | [Table of Contents](index.php) |  2.2. Persistent Connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)