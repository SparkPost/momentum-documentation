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

| Chapter 3. The msc_logger Module |
| [Prev](messagescope.console.php)  |   |  [Next](msc_logger.runtime.php) |

## Chapter 3. The msc_logger Module

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Module Configuration](modules.msc_logger.php#msc_logger.configuration)</dt>

<dt>[3.2\. Runtime Usage](msc_logger.runtime.php)</dt>

<dt>[3.3\. Logging SMTP Events](msc.log.smtp.events.php)</dt>

<dt>[3.4\. Logging of SMPP Events](ch03s04.php)</dt>

<dt>[3.5\. Sieve Usage](modules.msc_logger.sieve.php)</dt>

<dt>[3.6\. Lua Usage](modules.msc_logger.lua.php)</dt>

</dl>

The msc_logger module logs data for use by the Message Scope web UI. It creates records that are consumed by the indexers and searchable through the Message Scope web UI.

The platform is designed to support 40 days of information for the entire email platform.

## 3.1. Module Configuration

<a name="example.msc_logger.2"></a>

**Example 3.1. msc_logger module 2.2**

```
Logger logging/msc_logger msc_logger {
  msclog_path = /var/log/ecelerity/scope
  msclog_mode = 0644
  granularity = 300
  device_type = "Momentum"
  ingestor_nodes = ( "node1" "node2" )
}
```

<a name="example.msc_logger.3"></a>

**Example 3.2. msc_logger module 3.x**

```
msc_logger "msc_logger1" {
  msclog_path = "/var/log/ecelerity/scope"
  msclog_mode = 0644
  granularity = 300
  ingestor_nodes = ( "node1" "node2" )
}
```

Module configuration options can be set through the web UI in exactly the same way as other options. Setting module options through the web UI is described in " [Changing Module Configuration Options](https://support.messagesystems.com/docs/web-ref/web3.php#web3.module_config)". Module options are described below.

<dl class="variablelist">

<dt>device_type</dt>

<dd>

Static string that is written to the log file. The default value for this option is `Momentum`.

</dd>

<dt>granularity</dt>

<dd>

How often to switch files in seconds. By default, a new log file is written every 5 minutes (300 seconds). This allows the backend to process many files at once. The default value for this option is `300`.

</dd>

<dt>ingestor_nodes</dt>

<dd>

An array of the node or nodes that host the ingestor. This option must be configured after installation. There is no default value for this option. See also [Section 3.1.1, “Multiple Ingestor Nodes”](modules.msc_logger.php#msc_logger.multiple.ingestors "3.1.1. Multiple Ingestor Nodes").

</dd>

<dt>log_deliveries</dt>

<dd>

Whether or not to log deliveries. The default value for this option is `true`.

</dd>

<dt>log_final_rule_len</dt>

<dd>

The identifier that represents the final ruling on the message. This field indicates internal reason for rejection. Vctx: msc_final_rule Can try to auto-populate it if its not set. Limit 256 chars. The default value for this option is `256`.

</dd>

<dt>log_from_header</dt>

<dd>

Whether or not to log the FROM header. The default value for this option is `true`.

</dd>

<dt>log_from_header_len</dt>

<dd>

The maximum length for the entry log field. The default value for this option is `1024`.

</dd>

<dt>log_message_id</dt>

<dd>

Whether or not to log the message ID. The default value for this option is `true`.

</dd>

<dt>log_oob_bounces</dt>

<dd>

Whether or not to log out-of-band bounces. The default value for this option is `true`.

</dd>

<dt>log_partner_data_len</dt>

<dd>

Storage space for information about partner validation modules. The default value for this option is `256`.

</dd>

<dt>log_permanent_failures</dt>

<dd>

Whether or not to log the permanent failures. The default value for this option is `true`.

</dd>

<dt>log_receptions</dt>

<dd>

Whether or not to log receptions. The default value for this option is `true`.

</dd>

<dt>log_rejections</dt>

<dd>

Whether or not to log rejections. The default value for this option is `true`.

</dd>

<dt>log_remote_rsp_len</dt>

<dd>

The default value for this option is `1024`.

</dd>

<dt>log_smpp_body</dt>

<dd>

Whether or not to log the Short Message Peer-to-Peer (SMPP) body. The default value for this option is `true`.

</dd>

<dt>log_smpp_deliveries</dt>

<dd>

Whether or not to log Short Message Peer-to-Peer (SMPP) deliveries. The default value for this option is `true`.

</dd>

<dt>log_smpp_permfails</dt>

<dd>

Whether or not to log the SMPP permanent failures. The default value for this option is `true`.

</dd>

<dt>log_smpp_receptions</dt>

<dd>

Whether or not to log SMPP receptions. The default value for this option is `true`.

</dd>

<dt>log_smpp_status</dt>

<dd>

Whether or not to log the SMPP status. The default value for this option is `true`.

</dd>

<dt>log_smpp_transfails</dt>

<dd>

Whether or not to log the SMPP transient failures. The default value for this option is `true`.

</dd>

<dt>log_subject</dt>

<dd>

Whether or not to log the SUBJECT. The default value for this option is `true`.

</dd>

<dt>log_subject_header_len</dt>

<dd>

The maximum length for the entry log field. The default value for this option is `1024`.

</dd>

<dt>log_to_header</dt>

<dd>

Whether or not to log the TO header. The default value for this option is `true`.

</dd>

<dt>log_to_header_len</dt>

<dd>

The maximum length for the entry log field.. The default value for this option is `1024`. While UTF-8 data is supported, this value does constrain the number of actual characters shown. A UTF-8 string of 256 bytes may contain as few as 64 actual characters.

</dd>

<dt>log_transient_failures</dt>

<dd>

Whether or not to log transient failures. The default value for this option is `true`.

</dd>

<dt>log_user_data_len</dt>

<dd>

Specify the length of the `msc_user_data` context variable. For more information about this variable see [Section 3.2, “Runtime Usage”](msc_logger.runtime.php "3.2. Runtime Usage"). The default value for this option is `256`.

</dd>

<dt>msclog_mode</dt>

<dd>

The file permissions for the Message Scope log. The default value for this option is `0644`.

</dd>

<dt>msclog_path</dt>

<dd>

The path to the Message Scope log. The default value for this option is `/var/log/ecelerity/scope`. Directory into which files will be placed.

</dd>

</dl>

### 3.1.1. Multiple Ingestor Nodes

When a search is executed from the web UI, the search request is sent to the msc_server process on any one of the ingestor nodes. This node searches the local datastore and then forwards the request to the remaining ingestor nodes. After the remaining nodes have finished searching, results are sent back to the original ingestor node. This node does not sort results and simply forwards the data to the web UI; The results from an individual node are sorted but the aggregated results are not. Consequently, when paging through the results in the web UI items won't necessarily be in temporal sequence.

### Note

Information is **not** replicated across ingestor nodes. There **will** be missing data if a single ingestor node goes down.

| [Prev](messagescope.console.php)  |   |  [Next](msc_logger.runtime.php) |
| 2.4. messagescope Management Using Console Commands  | [Table of Contents](index.php) |  3.2. Runtime Usage |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)