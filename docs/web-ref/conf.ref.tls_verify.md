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
| [Prev](conf.ref.tls_protocols.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.tls_verify_mode.php) |

<a name="conf.ref.tls_verify"></a>
## Name

tls_verify — specify how to handle the remote presented certificate

## Synopsis

`tls_verify = "no"`

<a name="idp12175616"></a>
## Description

If TLS is set to `required` or `ifavailable` and TLS is negotiated with the remote mail exchange, this option will specify how the remote presented certificate should be handled. If this option is set to `no`, then no checking of the certificate will be performed. Given the number of self-signed certificates used on mail hosts, this setting is probably the most useful. If this setting is `ca`, then the connection will only proceed if the certificate presented is signed by a valid certificate authority listed in the CA list specified by TLS_CA. If this setting is `host`, then in addition to requiring that the certificate be signed by a valid certificate authority, the common name presented in the certificate must either exactly match the domain or mail exchange to which we are connected.

### Note

For custom behavior create a C module that uses the outbound_smtp_tls_verify_callback and inbound_smtp_tls_verify_callback hooks. For more information see [outbound_smtp_tls_verify_callback](https://support.messagesystems.com/docs/web-c-api/hooks.core.outbound_smtp_tls_verify_callback.php) and [inbound_smtp_tls_verify_callback](https://support.messagesystems.com/docs/web-c-api/hooks.core.inbound_smtp_tls_verify_callback.php).

The default value is `no`.

<a name="idp12183904"></a>
## Scope

`tls_verify` is valid in the binding, binding_group, domain and global scopes.

| [Prev](conf.ref.tls_protocols.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.tls_verify_mode.php) |
| tls_protocols  | [Table of Contents](index.php) |  tls_verify_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)