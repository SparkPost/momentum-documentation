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

| pe2g.template_class |
| [Prev](conf.mcg.relay_urls.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.mcg.template_driver_name.php) |

<a name="conf.mcg.pe2g.template_class"></a>
## Name

pe2g.template_class — specify the templatization module to be used

## Synopsis

`pe2g.template_class = PostalEngine2::MessageTemplate`

<a name="idp1963616"></a>
## Description

Using this option the system administrator can specify a templatization module to be used instead of PostalEngine2::MessageTemplate. Templatization modules add new macros or shortcuts by overloading functions from PostalEngine2::MessageTemplate, which is the Perl module that turns templates into runnable Perl code.

If you change the value of this option be sure to change its value in `pe2.conf` on each node that performs template expansion. It is simplest to deploy this file on all of your Message Central nodes.

The default value for this option is `PostalEngine2::MessageTemplate`.

### Note

The value assigned to this option **cannot** have quotation marks.

<a name="idp1969408"></a>
## See Also

[Chapter 12, *Extending the Base Templating Facilities*](extending.message.template.php "Chapter 12. Extending the Base Templating Facilities") 

| [Prev](conf.mcg.relay_urls.php)  | [Up](mc.conf.php) |  [Next](conf.mcg.template_driver_name.php) |
| pe2g.relay_urls  | [Table of Contents](index.php) |  pe2g.template_driver_name |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)