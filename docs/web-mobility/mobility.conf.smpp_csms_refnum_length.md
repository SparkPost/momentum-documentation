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

| smpp_csms_refnum_length |
| [Prev](mobility.conf.smpp_command_window_size.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_default_email_address.php) |

<a name="mobility.conf.smpp_csms_refnum_length"></a>
## Name

smpp_csms_refnum_length — specifies the length of the CSMS number

## Synopsis

`smpp_csms_refnum_length = 2`

<a name="idp414496"></a>
## Description

This option specifies the length in bytes of the Concatenated SMS (CSMS) reference number used in the User Data Header (UDH) when SMS messages are segmented.

**Configuration Change. ** This configuration option is currently only available in Momentum version 3.3.3.

Valid values for this option are:

*   `0` – When set to `0` Momentum behaves the way it did prior to the introduction of this option. Namely, the CSMS number uses one byte when it is less than or equal to 255 and two bytes when it is greater than 255.

*   `1` – When set to `1` the CSMS reference number has a fixed length of one byte. In this case the reference number cannot exceed 255.

*   `2` – When set to `2` the CSMS reference number has a fixed length of two bytes. In this case the reference number cannot exceed 65535.

The default value for this option is `2`.

<a name="idp1489792"></a>
## Scope

This option is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_command_window_size.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_default_email_address.php) |
| smpp_command_window_size  | [Table of Contents](index.php) |  smpp_default_email_address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)