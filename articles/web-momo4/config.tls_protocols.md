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

| tls_protocols |
| [Prev](config.tls_key.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tls_verified_peer_is_authorized.php) |

<a name="config.tls_protocols"></a>
## Name

tls_protocols — allowable ciphers for TLS inbound and outbound sessions

## Synopsis

`tls_protocols = "+<baseprotocol>[:[+|-]<additional protocols]"`

<a name="idp27085488"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1.0.2\.

`tls_protocols` specifies the allowable protocols for an OpenSSL TLS session. The available protocols are `ALL`, `SSLv2`, `SSLv3`, `TLSv1.0`, `TLSv1.1`, and `TLSv1.2`. Each set can be enabled or disabled by prefixing its name with a “+” or “-“ respectively. The following example shows the SSLv2 and SSLv3 protocols being disabled:

`TLS_Protocols = "+ALL:-SSLv2:-SSLv3"`

This option has no meaning for GNUTLS.

The default value is “+ALL”.

### Note

In Centos/RHEL 5, which are typically shipped with OpenSSL 0.98, TLSv1.1 and TLSv1.2 are not available.

<a name="idp27094784"></a>
## Scope

`tls_ciphers` is valid in the binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group and peer scopes.

| [Prev](config.tls_key.php)  | [Up](config.options.ref.php) |  [Next](config.tls_verified_peer_is_authorized.php) |
| tls_key  | [Table of Contents](index.php) |  tls_verified_peer_is_authorized |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)