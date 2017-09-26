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

| mm7_soap_attachment_simple_mime |
| [Prev](mobility.conf.mm7_service_code.php)  | 8.1. MM7 Configuration Option Details |  [Next](mobility.conf.mm7_soap_env.php) |

<a name="mobility.conf.mm7_soap_attachment_simple_mime"></a>
## Name

mm7_soap_attachment_simple_mime — specify whether the MM7 SOAP attachment can be a simple MIME (Content-Type: text/plain) or not

## Synopsis

`mm7_soap_attachment_simple_mime = true`

<a name="idp2629632"></a>
## Description

Specify whether the MM7 SOAP attachment can be a simple MIME (Content-Type: text/plain) or not. Some service providers require a multipart SOAP attachment, (in which case set this option to "false") so that a simple text message will be wrapped into a multipart MIME as SOAP attachment in a MM7 request.

The default value for this option is `true`.

<a name="idp2632624"></a>
## Scope

This option is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.mm7_service_code.php)  | [Up](mobility.mm7.options.php#mm7.conf) |  [Next](mobility.conf.mm7_soap_env.php) |
| mm7_service_code  | [Table of Contents](index.php) |  mm7_soap_env |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)