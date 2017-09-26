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

| tls_ifavailable_fallback |
| [Prev](config.tls_engine.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tls_key.php) |

<a name="config.tls_ifavailable_fallback"></a>
## Name

tls_ifavailable_fallback — determine the behavior if TLS negotiation fails

## Synopsis

`TLS_Ifavailable_fallback = "true|false"`

<a name="idp27055504"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1.

When opportunistic TLS is enabled, this option determines the behavior if the TLS negotiation fails.

This option can be set to the following:

*   `true` – Momentum will immediately try to send the message as plain-text if the remote mail exchange supports TLS but the negotiation fails.

*   `false` – The message is put back into the delayed queue and retried later. The retries will also be attempted with TLS. This behavior is the same as in prior Momentum versions.

The default value is `true`.

<a name="idp27064000"></a>
## Scope

`tls_ifavailable_fallback` is valid in the binding, binding_group, domain, and global scopes.

| [Prev](config.tls_engine.php)  | [Up](config.options.ref.php) |  [Next](config.tls_key.php) |
| tls_engine  | [Table of Contents](index.php) |  tls_key |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)