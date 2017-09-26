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

| Default Policy User Guide |
|   |   |  [Next](policy.preface.php) |

## Default Policy User Guide

### Message Systems, Inc.

Copyright © 2011-2014 Message Systems, Inc.

<a name="idp101984"></a>

Confidential & Proprietary.

**Abstract**

This book documents the default policy Lua script.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](policy.preface.php)</dt>

<dt>[1\. Enabling the Policy Scripts](policy.enabling.php)</dt>

<dt>[2\. Configuration Items](policy.configuration.options.php)</dt>

<dt>[3\. Use Cases](policy.use.cases.php)</dt>

<dd>

<dl>

<dt>[3.1\. Policy Categories](policy.use.cases.php#policy.inbound)</dt>

</dl>

</dd>

<dt>[4\. Configuration Details](policy.default.configuration.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[5\. Customizing Policy](policy.customize.php)</dt>

<dt>[A. The `dp_config.lua` and `custom_policy.lua` Files](policy.appendix.php)</dt>

<dd>

<dl>

<dt>[A.1\. The `dp_config.lua` File](policy.appendix.php#policy.appendixdp_config.lua)</dt>

<dt>[A.2\. The `custom_policy.lua` File](policy.appendix.custom_policy.lua.php)</dt>

</dl>

</dd>

</dl>

[List of Tables](table-toc.php)

|   |   |  [Next](policy.preface.php) |
|   |   |  Preface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)