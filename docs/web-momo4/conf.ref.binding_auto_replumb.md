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

| binding_auto_replumb |
| [Prev](conf.ref.binding.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.binding_auto_replumb_interval.php) |

<a name="conf.ref.binding_auto_replumb"></a>
## Name

binding_auto_replumb — enable or disable the auto replumber

## Synopsis

`binding_auto_replumb = "enabled"`
`binding_auto_replumb = "disabled"`

<a name="idp23614192"></a>
## Description

This directive instructs Momentum to enable (or disable) the auto replumber. The replumber periodically checks the plumbed state for bindings with static addresses and replumbs any that are unplumbed. Bindings can become unplumbed if there are network issues or if the NIC goes down temporarily.

The default value is `disabled`.

<a name="idp23617200"></a>
## Scope

`binding_auto_replumb` is valid in the global scope.

<a name="idp23619456"></a>
## See Also

[binding_auto_replumb_interval](conf.ref.binding_auto_replumb_interval.php "binding_auto_replumb_interval")

| [Prev](conf.ref.binding.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.binding_auto_replumb_interval.php) |
| binding  | [Table of Contents](index.php) |  binding_auto_replumb_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)