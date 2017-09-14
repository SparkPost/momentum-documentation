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

| smpp_max_sms_message_size |
| [Prev](mobility.conf.smpp_max_sms_from_size.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_max_sms_subject_size.php) |

<a name="mobility.conf.smpp_max_sms_message_size"></a>
## Name

smpp_max_sms_message_size — The maximum size of outgoing MT_SMS message text in octets

## Synopsis

`smpp_max_sms_message_size = 140`

<a name="idp1813728"></a>
## Description

Specifies the maximum size of outgoing MT-SMS message text in octets. Note: The amount of message text inserted into the SMS message is additionally constrained by message data resulting from the SMPP_Max_Sms_From_Size and SMPP_Max_Sms_Subject_Size. For example, if SMPP_Max_Sms_Message_Size=140 and SMPP_Max_Sms_From_Size=20, the SMS message will consist maximally of 20 octets from the source email address, 1 blank space, and 119 octets of data from the message body.

**Configuration Change. ** As of version 3.3.3, the default value for this option is `160`. When upgrading, if required, explicitly set this option to `140` in the appropriate scope or scopes.

The default value for this option is `140`.

<a name="idp1820096"></a>
## Scope

smpp_max_sms_message_size is valid in the binding, binding_group, domain and global scopes.

<a name="idp1821984"></a>
## See Also

[smpp_max_sms_from_size](mobility.conf.smpp_max_sms_from_size.php "smpp_max_sms_from_size"), [smpp_max_sms_subject_size](mobility.conf.smpp_max_sms_subject_size.php "smpp_max_sms_subject_size")

| [Prev](mobility.conf.smpp_max_sms_from_size.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_max_sms_subject_size.php) |
| smpp_max_sms_from_size  | [Table of Contents](index.php) |  smpp_max_sms_subject_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)