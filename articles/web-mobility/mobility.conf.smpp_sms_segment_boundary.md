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

| smpp_sms_segment_boundary |
| [Prev](mobility.conf.smpp_submit_tracking_schema.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_sms_data_coding.php) |

<a name="mobility.conf.smpp_sms_segment_boundary"></a>
## Name

smpp_sms_segment_boundary — whether a word boundary is used to segment a concatenated message

## Synopsis

`smpp_sms_segment_boundary = false`

<a name="idp2030688"></a>
## Description

This option specifies whether a word boundary is used to segment a concatenated message.

**Configuration Change. ** This configuration option is currently only available in Momentum version 3.3.3.

The default value for this option is `false` meaning that each segment has a fixed length as defined by `smp_sms_segment_size.` When set to `true` a best effort is made to segment the message before a whitespace. This was the behavior of Momentum prior to the introduction of this option.

<a name="idp2036752"></a>
## Scope

This option is valid in the binding, binding_group, domain and global scopes.

<a name="idp2038624"></a>
## See Also

[smpp_sms_segment_size](mobility.conf.smpp_sms_segment_size.php "smpp_sms_segment_size")

| [Prev](mobility.conf.smpp_submit_tracking_schema.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_sms_data_coding.php) |
| smpp_submit_tracking_schema  | [Table of Contents](index.php) |  smpp_sms_data_coding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)