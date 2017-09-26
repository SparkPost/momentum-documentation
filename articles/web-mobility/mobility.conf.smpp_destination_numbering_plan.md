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

| smpp_destination_numbering_plan |
| [Prev](mobility.conf.smpp_destination_flag.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_destination_type_of_number.php) |

<a name="mobility.conf.smpp_destination_numbering_plan"></a>
## Name

smpp_destination_numbering_plan — The second of two parameters that specify the destination address

## Synopsis

`smpp_destination_numbering_plan = "e164"`

<a name="idp1553376"></a>
## Description

The second of two parameters that specify the destination address (together with the address which is taken from the local part of the email message by default).

The default value for this option is `e164` .

The legal values for this option are: `e164` | `unknown`.

<a name="idp1557648"></a>
## Scope

smpp_destination_numbering_plan is valid in the binding, binding_group, domain and global scopes.

<a name="idp1559552"></a>
## See Also

[Numbering Plan Indicator](glossary.php#gloss-npi "Numbering Plan Indicator")

| [Prev](mobility.conf.smpp_destination_flag.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_destination_type_of_number.php) |
| smpp_destination_flag  | [Table of Contents](index.php) |  smpp_destination_type_of_number |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)