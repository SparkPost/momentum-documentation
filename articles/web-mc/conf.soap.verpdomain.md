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

| soap.verpdomain |
| [Prev](conf.soap.relay_url.php)  | Chapter 7. Message Central Configuration Reference |  [Next](conf.webui.cookiekey.php) |

<a name="conf.soap.verpdomain"></a>
## Name

soap.verpdomain — the domain to be used in VERP generation

## Synopsis

soap.verpdomain = "*`example.com`*"

<a name="idp2228384"></a>
## Description

If the `sendingDomain` field of an Org has not been set, then this option specifies the domain to be used as the variable envelope return path (VERP) domain. It **must** match up to a domain you control; there should be an MX record that causes mail addressed to the VERP domain to be delivered to one of your MTAs. During installation you are asked to supply a value for this option. When not specified, the default value for this option is `localhost`.

### Note

If you break the VERP signature in the message envelope, by using the Sieve function `ec_rewrite_mailfrom` for example, you will break all the reporting in the product.

| [Prev](conf.soap.relay_url.php)  | [Up](mc.conf.php) |  [Next](conf.webui.cookiekey.php) |
| soap.relay_url  | [Table of Contents](index.php) |  webui.cookiekey |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)