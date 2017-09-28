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

| smpp_default_email_address |
| [Prev](mobility.conf.smpp_csms_refnum_length.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_default_email_from_domain.php) |

<a name="mobility.conf.smpp_default_email_address"></a>
## Name

smpp_default_email_address — Specifies a destination email address to be used during SMS-to-email translation after other methods fail

## Synopsis

smpp_default_email_address = "*`value`*"

<a name="idp1497232"></a>
## Description

This option specifies a destination email address to be used during SMS-to-email translation after other methods of identifying a destination email address (23.040 SMS/email interworking parse and reverse address mapping lookup) have failed. If not specified and other attempts fail, no email will be generated and the incoming SMS message is logged as a permanent failure.

If you expect SMS-to-email traffic (and not just email-to-SMS), you should also set a SMPP_Default_Email_Address; this is used as a catch-all in case the reverse address mappings can't find what email address to send SMS-to-email replies to.

<a name="idp1500160"></a>
## Scope

smpp_default_email_address is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_csms_refnum_length.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_default_email_from_domain.php) |
| smpp_csms_refnum_length  | [Table of Contents](index.php) |  smpp_default_email_from_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)