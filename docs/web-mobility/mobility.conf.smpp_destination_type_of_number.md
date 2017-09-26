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

| smpp_destination_type_of_number |
| [Prev](mobility.conf.smpp_destination_numbering_plan.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_enquire_link_timer.php) |

<a name="mobility.conf.smpp_destination_type_of_number"></a>
## Name

smpp_destination_type_of_number — The first of two parameters that specify the destination address

## Synopsis

`smpp_destination_type_of_number = "international"`

<a name="idp1566928"></a>
## Description

SMPP_Destination_Type_Of_Number is the first of two parameters that specify the destination address (together with the address which is taken from the local part of the email message by default).

The default value for this option is `international`.

The legal values for this option are:

*   `unknown`

*   `international`

*   `national`

*   `network specific`

*   `subscriber number`

*   `alphanumeric`

*   `abreviated`

*   `extension`

<a name="idp1581552"></a>
## Scope

smpp_destination_type_of_number is valid in the binding, binding_group, domain and global scopes.

<a name="idp1583456"></a>
## See Also

[Type of Number](glossary.php#gloss-ton "Type of Number")

| [Prev](mobility.conf.smpp_destination_numbering_plan.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_enquire_link_timer.php) |
| smpp_destination_numbering_plan  | [Table of Contents](index.php) |  smpp_enquire_link_timer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)