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

| tls_dhparams_file |
| [Prev](config.tls_client_ca.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.tls_enable_dhe_ciphers.php) |

<a name="conf.ref.tls_dhparams_file"></a>
## Name

tls_dhparams_file — specifies the file of Diffie Hellman (DHE) parameters that add per-session randomness to the encryption. Default parameters are built in the product if none are specified.

## Synopsis

`tls_dhparams_file = /path/to/dh.pem`

<a name="idp27008112"></a>
## Description

The tls_dhparams_file option can be generated with the file `openssl dhparam -out /path/to/dh512.pem 512`. It is recommended that you regularly (e.g., weekly) regenerate this file.

This option has no default value; instead, it uses internally-specified DHE parameters.

<a name="idp27011072"></a>
## Scope

tls_dhparams_file is valid in the global scope.

| [Prev](config.tls_client_ca.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.tls_enable_dhe_ciphers.php) |
| tls_client_ca  | [Table of Contents](index.php) |  tls_enable_dhe_ciphers |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)