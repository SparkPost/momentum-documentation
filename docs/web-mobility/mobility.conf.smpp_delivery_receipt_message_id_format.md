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

| smpp_delivery_receipt_message_id_format |
| [Prev](mobility.conf.smpp_default_email_from_domain.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_destination_flag.php) |

<a name="mobility.conf.smpp_delivery_receipt_message_id_format"></a>
## Name

smpp_delivery_receipt_message_id_format — declare the message ID format

## Synopsis

`smpp_delivery_receipt_message_id_format = "String"`

<a name="idp1518576"></a>
## Description

**Configuration Change. ** This option is available as of Momentum version 3.4.

As per the SMPP specification the value for a delivery receipt should be `String`. Some aggregators, such as mBlox, use numeric values. The purpose of this option (and its companion, `smpp_submit_response_message_id_format`) is to declare the representation of message IDs so conversion can be made during delivery receipt processing.

### Note

When mBlox sends a message ID in response to an SMPP message, it is in hexadecimal format. When it returns a delivery report in response to the same message, it uses the same message ID in decimal format. Use the following settings for this aggregator:

```
SMPP_Submit_Response_Message_ID_Format = "Hexadecimal"
SMPP_Delivery_Receipt_Message_ID_Format = "Decimal"
```

The default value for this option is `String`. The legal values for this option are: `Decimal`, `Hexadecimal` and `String`.

<a name="idp1527312"></a>
## Scope

`smpp_delivery_receipt_message_id_format` is valid in the binding, binding_group, domain and global scopes.

<a name="idp1529632"></a>
## See Also

[smpp_submit_response_message_id_format](mobility.conf.smpp_submit_response_message_id_format.php "smpp_submit_response_message_id_format")

| [Prev](mobility.conf.smpp_default_email_from_domain.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_destination_flag.php) |
| smpp_default_email_from_domain  | [Table of Contents](index.php) |  smpp_destination_flag |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)