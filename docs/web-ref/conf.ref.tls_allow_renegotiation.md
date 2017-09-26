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

| tls_allow_renegotiation |
| [Prev](conf.ref.tls.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.tls_ca.php) |

<a name="conf.ref.tls_allow_renegotiation"></a>
## Name

tls_allow_renegotiation — whether to enable OpenSSL TLS renegotiation

## Synopsis

`tls_allow_renegotiation = true`

<a name="idp12038640"></a>
## Description

This option determines whether OpenSSL TLS renegotiation is enabled or not. The default value for this option is `true`.

**Configuration Change. ** This option is available as of version 3.5.4.

### Note

SSL/TLS renegotiation has a known, inherent, vulnerability to DoS attacks that openSSL views as the responsibility of the higher level application to mitigate. `tls_allow_renegotiation` addresses this issue by making it possible to deny renegotiation requests.

If you have C policy scripts that incorporate calls to `ec_ssl_renegotiate` please note this new behavior. In some circumstances, setting this option to `false` may shut down valid attempts at renegotiation and needlessly drop connections.

In Centos/RHEL 5, Solaris AMD and SPARC distributions when renegotiation is disabled and a renegotiation is attempted from the peer, the openSSL session doesn't close immediately and waits for the SSL connection to timeout.

<a name="idp12045552"></a>
## Scope

`tls_allow_renegotiation` is valid in the ecstream_listener, esmtp_listener, http_listener, pathway, pathway_group and xmpp_listener scopes and the listen and peer scopes within those listeners.

<a name="idp12047360"></a>
## See Also

[tls](conf.ref.tls.php "tls")

| [Prev](conf.ref.tls.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.tls_ca.php) |
| tls  | [Table of Contents](index.php) |  tls_ca |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)