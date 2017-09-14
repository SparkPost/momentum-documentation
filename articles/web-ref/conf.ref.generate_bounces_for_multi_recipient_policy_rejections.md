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

| generate_bounces_for_multi_recipient_policy_rejections |
| [Prev](conf.ref.generate_bounces.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.generate_delay_dsn.php) |

<a name="conf.ref.generate_bounces_for_multi_recipient_policy_rejections"></a>
## Name

generate_bounces_for_multi_recipient_policy_rejections — generate MDNs after reception for policy rejections

## Synopsis

`generate_bounces_for_multi_recipient_policy_rejections = true`

`generate_bounces_for_multi_recipient_policy_rejections = false`

<a name="idp9686480"></a>
## Description

If you have configured a module or a policy script to reject mail in the each_rcpt phase of the validation process, then it is possible that you don't want to generate an MDN for that rejected mail, on the grounds that it was unwanted mail and likely has a bogus sender. If that is the case, setting `Generate_Bounces_For_Multi_Recipient_Policy_Rejections` to `false` will cause Momentum to suppress MDN generation for multi-recipient mail when some, but not all, recipients were rejected.

When all recipients reject the mail, Momentum will respond with a failure code to the sender; an MDN does not need to be generated in this case.

The default value for this option is `true` for conformance with the SMTP specification.

<a name="idp9691312"></a>
## Scope

generate_bounces_for_multi_recipient_policy_rejections is valid in the global, pathway_group and pathway scopes.

| [Prev](conf.ref.generate_bounces.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.generate_delay_dsn.php) |
| generate_bounces  | [Table of Contents](index.php) |  generate_delay_dsn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)