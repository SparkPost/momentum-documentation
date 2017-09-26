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

| Chapter 4. Configuration Details |
| [Prev](policy.use.cases.php)  |   |  [Next](policy.default.configuration.msys.dp_config.rbls.php) |

## Chapter 4. Configuration Details

**Table of Contents**

<dl class="toc">

<dt>[4.1\. msys.dp_config.whitelist](policy.default.configuration.php#policy.default.configuration.msys.dp_config.whitelist)</dt>

<dt>[4.2\. msys.dp_config.rbls](policy.default.configuration.msys.dp_config.rbls.php)</dt>

<dt>[4.3\. msys.dp_config.early_talker](policy.default.configuration.msys.dp_config.early_talker.php)</dt>

<dt>[4.4\. msys.dp_config.fcdns](policy.default.configuration.msys.dp_config.fcdns.php)</dt>

<dt>[4.5\. msys.dp_config.concurrent_connection_limits](policy.default.configuration.msys.dp_config.concurrent_connection_limits.php)</dt>

<dt>[4.6\. msys.dp_config.audit_series](policy.default.configuration.msys.dp_config.audit_series.php)</dt>

<dt>[4.7\. msys.dp_config.audit_series.invalid_smtp_auth](policy.default.configuration.msys.dp_config.audit_series.invalid_smtp_auth.php)</dt>

<dt>[4.8\. msys.dp_config.audit_series.connections](policy.default.configuration.msys.dp_config.audit_series.connections.php)</dt>

<dt>[4.9\. msys.dp_config.audit_series.mailfrom](policy.default.configuration.msys.dp_config.audit_series.mailfrom.php)</dt>

<dt>[4.10\. msys.dp_config.audit_series.auth_user](policy.default.configuration.msys.dp_config.audit_series.auth_user.php)</dt>

<dt>[4.11\. msys.dp_config.mail_from_domain_validate](policy.default.configuration.msys.dp_config.mail_from_domain_validate.php)</dt>

<dt>[4.12\. msys.dp_config.recipient_validation](policy.default.configuration.msys.dp_config.recipient_validation.php)</dt>

<dt>[4.13\. msys.dp_config.relay_authorization](policy.default.configuration.msys.dp_config.relay_authorization.php)</dt>

<dt>[4.14\. msys.dp_config.audit_series.invalid_recipients](policy.default.configuration.msys.dp_config.audit_series.invalid_recipients.php)</dt>

<dt>[4.15\. msys.dp_config.audit_series.messages](policy.default.configuration.msys.dp_config.audit_series.messages.php)</dt>

<dt>[4.16\. msys.dp_config.audit_series.spam_mailfrom](policy.default.configuration.msys.dp_config.audit_series.spam_mailfrom.php)</dt>

<dt>[4.17\. msys.dp_config.audit_series.spam](policy.default.configuration.msys.dp_config.audit_series.spam.php)</dt>

<dt>[4.18\. msys.dp_config.audit_series.virus](policy.default.configuration.msys.dp_config.audit_series.virus.php)</dt>

<dt>[4.19\. msys.dp_config.audit_series.virus_mailfrom](policy.default.configuration.msys.dp_config.audit_series.virus_mailfrom.php)</dt>

<dt>[4.20\. msys.dp_config.message_size_limits](policy.default.configuration.msys.dp_config.message_size_limits.php)</dt>

<dt>[4.21\. msys.dp_config.beik](policy.default.configuration.msys.dp_config.beik.php)</dt>

<dt>[4.22\. msys.dp_config.commtouch](policy.default.configuration.msys.dp_config.commtouch.php)</dt>

<dt>[4.23\. msys.dp_config.cloudmark](policy.default.configuration.msys.dp_config.cloudmark.php)</dt>

<dt>[4.24\. msys.dp_config.antivirus](policy.default.configuration.msys.dp_config.antivirus.php)</dt>

<dt>[4.25\. msys.dp_config.keyword_filter](policy.default.configuration.dp_config.keyword_filter.php)</dt>

</dl>

Each configuration option is a Lua table. This section describes these tables and their elements.

## 4.1. msys.dp_config.whitelist

You may wish to whitelist IP addresses that will not be subjected to the policy in question. When whitelist support is enabled, each default policy can optionally honor one or more whitelists.

Whitelists can be text files or datasources. For instructions on how to create datasources see [ds_core Module](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php).

Find below the sample excerpt included in the `dp_config.lua` file.

```
msys.dp_config.whitelist = {
  {
    name = "global",
    type = "rbldnsd",
    refresh = 1800,
    source = "/opt/msys/ecelerity/etc/whitelist.txt",
    record_type = "TXT",
    default_value = "",
  },
  {
    name = "global_datasource",
    type = "datasource",
    refresh = 1800,
    cachename = "sqlite",
    query = "SELECT 1 as val, cidr FROM whitelist",
    cidr_column = "cidr",
    value_column = "val",
    default_value = "",
  }
};
```

The elements of this configuration option are as follows:

<dl class="variablelist">

<dt>name</dt>

<dd>

The name you wish to give to the whitelist. This name should be unique.

Throughout the configuration file the `honor_whitelist` element, supported by various configuration options, is assigned the name(s) given to a whitelist defined by this configuration option.

</dd>

<dt>type</dt>

<dd>

Define the type of whitelist. The legal values for this option are either `datasource` or `rbldnsd`. The other elements of this table vary depending upon the value of this element.

To create a datasource whitelist, you can define a database with a single table containing a single field. Populate this field with the desired domain names. For instructions on creating a datasource that references this database see [ds_core Module](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php).

</dd>

<dt>refresh</dt>

<dd>

How often to reload the rbldnsd or the datasource.

A recommended value for this option is `1800`.

</dd>

<dt>source</dt>

<dd>

Define the path to the rbldnsd source file on disk. This option is only applicable when the type is `rbldnsd`.

</dd>

<dt>record_type</dt>

<dd>

Legal values for this option are either `A` or `TXT`. This option is only applicable when the type is `rbldnsd`.

</dd>

<dt>default_value</dt>

<dd>

This option is applicable to both rbldnsds and datasources and must always be `""`.

</dd>

<dt>cachename</dt>

<dd>

The name of a datasource as defined in the `ecelerity.conf`

</dd>

<dt>query</dt>

<dd>

Define the `SELECT` statement when the type is a datasource.

</dd>

<dt>cidr_column</dt>

<dd>

The name of the column in the table that contains the CIDR block. This is only applicable when the type is `datasource`.

</dd>

<dt>value_column</dt>

<dd>

The name of the column containing the value (the value is ignored for the purposes of the whitelist but something must be there).

This is only applicable when the type is `datasource`.

</dd>

</dl>

### 4.1.1. Custom Whitelists

Note that you can define custom policies to create your own whitelists (for example, based on something other than connecting IP, like envelope parameters). You may then use the Default Policy whitelist "honor" mechanism by setting the whitelist as follows:

`msys.pbp.set_whitelist(vctx, "my_whitelist_name", true);`

Then you may put "my_whitelist_name" as one of the "honor_whitelist" table entries if you wish a specific policy to honor that whitelist.

| [Prev](policy.use.cases.php)  |   |  [Next](policy.default.configuration.msys.dp_config.rbls.php) |
| Chapter 3. Use Cases  | [Table of Contents](index.php) |  4.2. msys.dp_config.rbls |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)