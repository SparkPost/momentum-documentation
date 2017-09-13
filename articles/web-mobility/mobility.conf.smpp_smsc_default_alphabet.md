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

| smpp_smsc_default_alphabet |
| [Prev](mobility.conf.smpp_sms_segment_size.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_smsc_default_message_mode.php) |

<a name="mobility.conf.smpp_smsc_default_alphabet"></a>
## Name

smpp_smsc_default_alphabet — specifies the default character encoding of the SMSC

## Synopsis

`smpp_smsc_default_alphabet = "gsm"`

<a name="idp2118496"></a>
## Description

This option specifies the default character encoding of the SMSC. The specified encoding is used for transcoding inbound MO-SMS messages when the SMPP protocol data unit (PDU) data_coding value is 0\. Supported values are as follows. You may use the integer value or the string equivalent.

*   `Default` – integer value `0`

*   `Ascii` – 1

*   `Latin-1` – 3

*   `ISO-8859-5` – 6

*   `ISO-8859-8` – 7

*   `UCS2` – 8

Binary is not currently supported.

The default value for this option is `gsm`.

<a name="idp2132256"></a>
## Scope

smpp_smsc_default_alphabet is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_sms_segment_size.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_smsc_default_message_mode.php) |
| smpp_sms_segment_size  | [Table of Contents](index.php) |  smpp_smsc_default_message_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)