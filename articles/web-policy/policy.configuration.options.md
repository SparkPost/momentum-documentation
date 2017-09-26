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

| Chapter 2. Configuration Items |
| [Prev](policy.enabling.php)  |   |  [Next](policy.use.cases.php) |

## Chapter 2. Configuration Items

The configuration options in the `dp_config.lua` file affect how the default policy script (`default_policy.lua`) behaves.

You can configure the following items:

*   `msys.dp_config.whitelist` – define IP addresses that are exempt from scripts

*   `msys.dp_config.rbls` – configure both DNS and RBLDNSD RBLs

*   `msys.dp_config.early_talker` – set early talker options

*   `msys.dp_config.fcdns` – define Full Circle DNS (FCDNS)

*   `msys.dp_config.concurrent_connection_limits` – set concurrent connection limits

*   `msys.dp_config.mail_from_domain_validate` – configure MAIL FROM domain validation

*   `msys.dp_config.recipient_validation` – Whether or not to perform recipient validation

*   `msys.dp_config.relay_authorization` – perform per-recipient or per-domain recipient validation

*   `msys.dp_config.audit_series` – this table is required to enable other audit series options

*   `msys.dp_config.audit_series.invalid_smtp_auth` – limit failed SMTP AUTH

*   `msys.dp_config.audit_series.connections` – limit the connection rate

*   `msys.dp_config.audit_series.mailfrom` – limit the MAIL FROM rate

*   `msys.dp_config.audit_series.auth_user` – limit the user SMTP AUTH rate.

*   `msys.dp_config.audit_series.invalid_recipients` – set the Directory Harvest Attack (DHA) parameters

*   `msys.dp_config.audit_series.messages` – set the message rate

*   `msys.dp_config.audit_series.spam_mailfrom` – set the SPAM MAIL FROM rate

*   `msys.dp_config.audit_series.spam` – set the spam rate

*   `msys.dp_config.audit_series.virus` – set virus thresholds

*   `msys.dp_config.audit_series.virus_mailfrom` – set the MAIL FROM virus thresholds

*   `msys.dp_config.message_size_limits` – set message size limits

*   `msys.dp_config.beik` – set the BEIK scanner parameters

*   `msys.dp_config.commtouch` – set the Commtouch parameters

*   `msys.dp_config.cloudmark` – set the Cloudmark parameters

*   `msys.dp_config.antivirus` – set the parameters for an anti-virus engine

*   `msys.dp_config.keyword_filter` – set the keyword filter parameters

| [Prev](policy.enabling.php)  |   |  [Next](policy.use.cases.php) |
| Chapter 1. Enabling the Policy Scripts  | [Table of Contents](index.php) |  Chapter 3. Use Cases |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)