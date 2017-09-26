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

| smpp_default_email_from_domain |
| [Prev](mobility.conf.smpp_default_email_address.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_delivery_receipt_message_id_format.php) |

<a name="mobility.conf.smpp_default_email_from_domain"></a>
## Name

smpp_default_email_from_domain — specify the domain name to use in the source email when converting SMS to email

## Synopsis

smpp_default_email_from_domain = *`domain_name`*

<a name="idp1507264"></a>
## Description

`smpp_default_email_from_domain` specifies the domain name to use in the source email when converting SMS to email. In the absence of this parameter, the source email address is constructed using the domain name configured on the domain stanza. This parameter is useful when the domain name on the domain stanza is a multi-protocol domain name since multi-protocol domain names do not form valid email addresses. If you are using multi-protocol domain names and the default sms to email conversion, this parameter is mandatory. Note that a side effect from this parameter is that any "bounce" messages will be directed to the specified email domain. You may need to configure an additional domain stanza using the corresponding domain name to appropriately process bounce messages.

There is no default value for this option.

<a name="idp1510848"></a>
## Scope

`smpp_default_email_from_domain` is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_default_email_address.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_delivery_receipt_message_id_format.php) |
| smpp_default_email_address  | [Table of Contents](index.php) |  smpp_delivery_receipt_message_id_format |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)