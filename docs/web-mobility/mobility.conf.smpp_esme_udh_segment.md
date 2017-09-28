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

| smpp_esme_udh_segment |
| [Prev](mobility.conf.smpp_esme_type_of_number.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_esme_max_segments.php) |

<a name="mobility.conf.smpp_esme_udh_segment"></a>
## Name

smpp_esme_udh_segment — this option indicates whether UDH prepends each SMS segment when converted from an email

## Synopsis

`smpp_esme_udh_segment = false`

<a name="idp1693328"></a>
## Description

`smpp_esme_udh_segment` indicates whether a User Data header (UDH) prepends each SMS segment when converted from an email. With this option set to `false`, should segmentation be needed (when `smpp_sms_segment_size` < total message size), `sar tlvs` (segmentation and reassembly using the optional SMPP TLVs (tag, length, value) fields) is the default.

The default value for this option is `false`.

<a name="idp1698896"></a>
## Scope

`smpp_esme_udh_segment` is valid in the binding, binding_group, domain and global scopes.

<a name="idp1701200"></a>
## See Also

[smpp_sms_segment_size](mobility.conf.smpp_sms_segment_size.php "smpp_sms_segment_size")

| [Prev](mobility.conf.smpp_esme_type_of_number.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_esme_max_segments.php) |
| smpp_esme_type_of_number  | [Table of Contents](index.php) |  smpp_esme_max_segments |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)