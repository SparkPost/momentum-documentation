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

| smpp_gsm_transcodes_to |
| [Prev](mobility.conf.smpp_esme_validity_period.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_inactivity_timer.php) |

<a name="mobility.conf.smpp_gsm_transcodes_to"></a>
## Name

smpp_gsm_transcodes_to — what character encoding the GSM0338 text will be translated to when converting to email

## Synopsis

`smpp_gsm_transcodes_to = "ISO-8859-1"`

<a name="idp1773040"></a>
## Description

This option specifies what character encoding that GSM0338 text will be translated to when converting to email. The specified encoding is used for transcoding inbound/MO SMS messages when the SMPP PDU data_coding value is 0, and the `SMPP_SMSC_Default_Alphabet` is "gsm" or "gsm0338".

The default value for this option is `ISO-8859-1`.

<a name="idp1776496"></a>
## Scope

smpp_gsm_transcodes_to is valid in the binding, binding_group, domain and global scopes.

<a name="idp1778384"></a>
## See Also

[smpp_smsc_default_alphabet](mobility.conf.smpp_smsc_default_alphabet.php "smpp_smsc_default_alphabet")

| [Prev](mobility.conf.smpp_esme_validity_period.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_inactivity_timer.php) |
| smpp_esme_validity_period  | [Table of Contents](index.php) |  smpp_inactivity_timer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)