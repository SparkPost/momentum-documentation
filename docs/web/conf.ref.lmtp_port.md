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

| lmtp_port |
| [Prev](conf.ref.license.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.logger.php) |

<a name="conf.ref.lmtp_port"></a>
## Name

lmtp_port — configure the port for LMTP deliveries

## Synopsis

`LMTP_Port = 2003`

<a name="idp5474048"></a>
## Description

If Momentum is set to [perform local delivery via LMTP](conf.ref.delivery_method.php "delivery_method"), this directive allows the remote port for LMTP delivery to be specified. The default value for this option is `2003`.

<a name="idp5476976"></a>
## Scope

lmtp_port is valid in the binding, binding_group, domain and global scopes.

<a name="idp5478656"></a>
## See Also

[delivery_method](conf.ref.delivery_method.php "delivery_method")

| [Prev](conf.ref.license.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.logger.php) |
| license  | [Table of Contents](index.php) |  logger |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)