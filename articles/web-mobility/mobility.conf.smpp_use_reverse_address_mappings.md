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

| smpp_use_reverse_address_mappings |
| [Prev](mobility.conf.smpp_use_interworking_parse.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_vendor_command_status_table.php) |

<a name="mobility.conf.smpp_use_reverse_address_mappings"></a>
## Name

smpp_use_reverse_address_mappings — Determines if email to MT-SMS processing saves associated pairs of source email addresses and destination sms addresses

## Synopsis

`smpp_use_reverse_address_mappings = true`

<a name="idp2232848"></a>
## Description

This option determines if email to MT-SMS processing saves associated pairs of source email addresses and destination SMS addresses and also determines if Mobile Originated Short Message Service (MO-SMS) to email conversion will attempt to obtain the destination email address from a saved address pair containing the current SMS source address. Address mappings are partitioned by domain. MO-SMS-to-email conversion normally uses reverse address mappings only after the 23.040 SMS/email interworking processing was unable to parse a destination email address from the SMS message text.

The default value for this option is `true`.

<a name="idp2236224"></a>
## Scope

smpp_use_reverse_address_mappings is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_use_interworking_parse.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_vendor_command_status_table.php) |
| smpp_use_interworking_parse  | [Table of Contents](index.php) |  smpp_vendor_command_status_table |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)