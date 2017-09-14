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

| tls_verify |
| [Prev](config.tls_verified_peer_is_authorized.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tls_verify_mode.php) |

<a name="config.tls_verify"></a>
## Name

tls_verify — specify how to handle the remote presented certificate

## Synopsis

`TLS_Verify = "no|ca|host|optional"`

<a name="idp27117136"></a>
## Description

**Configuration Change. ** Support for GNUTLS is available as of version 4.1 for SMTP reception and SMTP deliveries only.

If TLS is set to `required` or `ifavailable` and TLS is negotiated with the remote mail exchange, this option specifies how the remote presented certificate should be handled.

This option can be set to the following:

*   `no` – The certificate will not be checked. Given the number of self-signed certificates used on mail hosts, this setting is probably the most useful.

*   `ca` – The connection will only proceed if the certificate presented is signed by a valid certificate authority listed in the CA list specified by TLS_Ca.

*   `host` – In addition to requiring that the certificate be signed by a valid certificate authority, the common name presented in the certificate must either exactly match the domain or mail exchange to which we are connected. If this verification fails, delivery fails.

*   `optional` – Performs the same verification as the `host` setting but allows delivery if the verification fails.

### Note

For custom behavior create a C module that uses the [outbound_smtp_tls_verify_callback](https://support.messagesystems.com/docs/web-c-api/hooks.core.outbound_smtp_tls_verify_callback.php) and [inbound_smtp_tls_verify_callback](https://support.messagesystems.com/docs/web-c-api/hooks.core.inbound_smtp_tls_verify_callback.php) hooks.

The default value is `no`.

<a name="idp27132576"></a>
## Scope

`tls_verify` is valid in the binding, binding_group, domain and global scopes.

| [Prev](config.tls_verified_peer_is_authorized.php)  | [Up](config.options.ref.php) |  [Next](config.tls_verify_mode.php) |
| tls_verified_peer_is_authorized  | [Table of Contents](index.php) |  tls_verify_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)