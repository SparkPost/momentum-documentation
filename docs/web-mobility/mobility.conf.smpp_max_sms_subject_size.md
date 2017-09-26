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

| smpp_max_sms_subject_size |
| [Prev](mobility.conf.smpp_max_sms_message_size.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_message_mode.php) |

<a name="mobility.conf.smpp_max_sms_subject_size"></a>
## Name

smpp_max_sms_subject_size — The maximum size (in octets) of the source email subject to be included in the outgoing MT-SMS message

## Synopsis

`smpp_max_sms_subject_size = 10`

<a name="idp1830016"></a>
## Description

This option specifies the maximum size (in octets) of the source email subject to be included in the outgoing Mobile Terminated Short Message Service (MT-SMS) message. When using this parameter, the email subject will appear in the SMS message within parenthesis immediately following the source email address (if SMPP_Max_Sms_From_Size is also used), according to the SMS/Email Interworking format as specified in 3GPP TS 23.040.

The default value for this option is `10`.

<a name="idp1833216"></a>
## Scope

smpp_max_sms_subject_size is valid in the binding, binding_group, domain and global scopes.

<a name="idp1835104"></a>
## See Also

[smpp_max_sms_from_size](mobility.conf.smpp_max_sms_from_size.php "smpp_max_sms_from_size")

| [Prev](mobility.conf.smpp_max_sms_message_size.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_message_mode.php) |
| smpp_max_sms_message_size  | [Table of Contents](index.php) |  smpp_message_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)