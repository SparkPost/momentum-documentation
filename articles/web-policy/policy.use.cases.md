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

| Chapter 3. Use Cases |
| [Prev](policy.configuration.options.php)  |   |  [Next](policy.default.configuration.php) |

## Chapter 3. Use Cases

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Policy Categories](policy.use.cases.php#policy.inbound)</dt>

</dl>

The following table describes the configuration options in the sample `dp_config.lua` file and indicates whether or not the policy is enabled in the default configuration. If an option is dependent upon a configuration module, that module is identified.

### Note

The `enabled` column in this table indicates the status of a configuration option *after* performing the steps described in [Chapter 1, *Enabling the Policy Scripts*](policy.enabling.php "Chapter 1. Enabling the Policy Scripts") .

<a name="policy-table"></a>

**Table 3.1. Default policy script status**

| Name | Enabled | Action | Module |
| --- | --- | --- | --- |
| whitelist |   | Add any suitable whitelists | ds_core (datasource) |
| rbls |   | Define RBLs |   |
| early_talker | ✓ | Configure behavior for early talkers | conntrol |
| fcdns | ✓ | Perform a FCDNS check |   |
| concurrent_connection_limits | ✓ | Set the number of concurrent connections |   |
| mail_from_domain_validate | ✓ | Validate the MAIL FROM |   |
| recipient_validation |   | Validate recipients. On 'outbound' systems disable this option | ds_core (datasource) |
| relay_authorization |   | Allow SMTP-authenticated users to relay | auth_ds |
| audit_series | ✓ | A requirement for using any of the audit_series options | inbound_audit |
| audit_series.invalid_smtp_auth |   | Failed SMTP AUTH limiting | inbound_audit |
| audit_series.connections | ✓ | Limit the connection rate | inbound_audit |
| audit_series.mailfrom |   | MAIL FROM rate limiting | inbound_audit |
| audit_series.auth_user | ✓ | SMTP AUTH user rate limiting | inbound_audit |
| audit_series.invalid_recipients | ✓ | Set DHA parameters | inbound_audit |
| audit_series.messages | ✓ | Limit the rate of messages | inbound_audit |
| audit_series.spam_mailfrom |   | Spam MAIL FROM rate limiting | inbound_audit |
| audit_series.spam | ✓ | Spam rate limiting | inbound_audit |
| audit_series.virus | ✓ | Virus rate limiting | antivirus, inbound_audit |
| audit_series.virus_mailfrom |   | Virus MAIL FROM rate limiting | antivirus, inbound_audit |
| message_size_limits | ✓ | Set message size limits |   |
| beik |   | Enable if you use this scanner | beik |
| commtouch |   | Enable if you use this scanner | commtouch |
| cloudmark |   | Enable if you use this scanner | cloudmark |
| antivirus |   | Enable for virus scanners such as CSAPI | antivirus |
| keyword_filter |   | Perform a keyword search | ds_core (datasource) |

All policies can be disabled by being commented out in the Lua code. Some policies can also be enabled or disabled using a `check` option.

### Warning

By default `msys.dp_config.relay_authorization` is disabled—the `check` element is set to `false`. If you do not enable this policy and you are using the `default_policy.conf` file be sure to change the value of [relay_hosts](https://support.messagesystems.com/docs/web-ref/conf.ref.relay_hosts.php). If you leave `check` as `false` and you use the `default_policy.conf` file (where `relay_hosts` is set to `( "0.0.0.0/0" )`) your MTA is effectively an open relay.

## 3.1. Policy Categories

This section classifies the policies enumerated in [Table 3.1, “Default policy script status”](policy.use.cases.php#policy-table "Table 3.1. Default policy script status").

### 3.1.1. Outbound Sender Authentication Policy

**3.1.1.1. SMTP Authentication**

This policy requires customer/senders to authenticate before they are permitted to relay outbound mail. Authentication may be performed against LDAP or a database.

Implemented using `msys.dp_config.relay_authorization`.

### 3.1.2. Inbound IP Reputation Policy

**3.1.2.1. Realtime Blacklist (RBL)**

Use of Realtime Blacklists (RBLs) are an efficient way to detect and eliminate spam before the system performs more "expensive" policy like content filtering. Any combination of internally maintained or externally maintained RBLs, such as Spamhaus, can be implemented. This policy loads an RBL, looks up sender and takes appropriate action.

Implemented using `msys.dp_config.rbls`.

### 3.1.3. Inbound Session Management Policies

**3.1.3.1. Concurrent Connection Limits**

This policy limits how many concurrent connections a given *Classless Inter-Domain Routing*                      (CIDR) range may have open. You can apply different maximum concurrent connection limits based on defined CIDR blocks.

Specific trusted, high volume, senders should be whitelisted.

Implemented using `msys.dp_config.concurrent_connection_limits`, `msys.dp_config.audit_series.connections` and `msys.dp_config.whitelist`.

**3.1.3.2. MAIL FROM Rate Limiting**

This policy limits The MAIL FROM rate by CIDR block. Applicable in a cluster configuration.

Specific trusted, high volume, senders should be whitelisted.

Implemented using `msys.dp_config.audit_series.mailfrom`.

**3.1.3.3. Failed SMTP Auth Rate**

Set a threshold by CIDR block for rejection after failed SMTP AUTH. Applicable in a cluster configuration.

Implemented using `msys.dp_config.audit_series.auth_user`.

**3.1.3.4. Concurrent Connection Limits Based on Full Circle DNS Check**

Perform a Full Circle DNS Check. Exempt whitelists from this policy.

Implemented using `msys.dp_config.fcdns`.

**3.1.3.5. Early Talker Detection**

This policy rejects a client that sends data before the server sends a greeting message (banner). Sloppily written spamware often sends the HELO immediately without waiting for the greeting.

Implemented using `msys.dp_config.early_talker`.

**3.1.3.6. Message Rate Limiting**

This policy enforces the maximum number of messages per given time period (i.e. rolling one hour) that will be accepted from a given CIDR range. Specific trusted, high volume, senders can be whitelisted. Applicable in a cluster configuration.

Implemented using `msys.dp_config.audit_series.messages`.

### 3.1.4. Inbound Sender Reputation Policy

**3.1.4.1. Inbound Envelope Validation Policy****3.1.4.1.1. Sending Domain DNS Validation.**

Email must be sent from a valid domain. This policy verifies that the domain exists and will permanently fail the message if the domain does not exist.

Implemented using `msys.dp_config.mail_from_domain_validate`.

**3.1.4.1.2. Recipient/Domain Validation**

This policy performs a lookup in LDAP or another relevant data source to determine if the message is addressed to a valid recipient. If the recipient does not exist, permanently fail the message.

Implemented using `msys.dp_config.recipient_validation`.

**3.1.4.1.3. Directory Harvesting Detection**

Recipient validation is a very useful way to not only limit the messages you receive but also provide feedback to senders about recipients that are not valid. Unfortunately, this functionality can be used to traverse a directory and create a list of valid recipients to attack. This policy will transiently fail messages from a given sender for a given length of time if the sender exceeds a specified number of invalid recipients for a given time period. This policy also looks at the percentage of messages with invalid recipients over a specified time frame. Messages from senders that have exceeded a specified threshold will be temporarily failed for a specified duration. For example, if 50% or more of the recipients from a given sender in are invalid, then temporarily fail the sender for the next 24 hours. Because this threshold is percent-based, a specified minimum number of messages must be received from a given sender to ensure the counts are statistically significant before the policy will apply.

Implemented using `msys.dp_config.audit_series.invalid_recipients` and `msys.dp_config.audit_series.invalid_smtp_auth`.

**3.1.4.2. Inbound Content Policy****3.1.4.2.1. Maximum Message Size**

This policy enforces a specified maximum message size and permanently fails the message when this size is exceeded.

Implemented using `msys.dp_config.message_size_limits`.

**3.1.4.2.2. Anti-spam Content Scanning**

Momentum does not have any intrinsic content scanning capabilities, but instead customers may choose a third-party partner best suited to their needs. The Momentum content scanning model uses all content scanners as engines which are fed the message and its metadata, returning a verdict about the message. The mechanisms used and results returned vary from partner to partner. Policy can set whether to silently discard the message or reject it.

Implemented using `msys.dp_config.audit_series.spam_mailfrom` and `msys.dp_config.audit_series.spam`.

**3.1.4.2.3. Anti-Virus Content Scanning**

Similar to Anti-spam content, but message disposition is typically to silently discard the message. Applicable in a cluster configuration.

Implemented using `msys.dp_config.antivirus` and the various partner options.

**3.1.4.2.4. Anti-Virus Content Rate**

Suspend delivery when the threshold for anti-virus content is met. Applicable in a cluster configuration.

Implemented using `msys.dp_config.audit_series.virus`.

**3.1.4.2.5. Anti-Virus MAIL FROM Rate**

Suspend delivery when the threshold for anti-virus MAIL FROM Rate is met. Applicable in a cluster configuration.

Implemented using `msys.dp_config.audit_series.virus_mailfrom`.

**3.1.4.2.6. Keyword Filtering**

Questionable content using specific keywords can be rejected using content filtering. Each MIME part is scanned separately.

Implemented using `msys.dp_config.keyword_filter`.

| [Prev](policy.configuration.options.php)  |   |  [Next](policy.default.configuration.php) |
| Chapter 2. Configuration Items  | [Table of Contents](index.php) |  Chapter 4. Configuration Details |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)