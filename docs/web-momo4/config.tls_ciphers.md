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

| tls_ciphers |
| [Prev](config.tls_certificate.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tls_client_ca.php) |

<a name="config.tls_ciphers"></a>
## Name

tls_ciphers — specify allowable ciphers for TLS inbound and outbound sessions

## Synopsis

`TLS_Ciphers = "DEFAULT"|"NORMAL"`

<a name="idp26967120"></a>
## Description

**Configuration Change. ** Support for GNUTLS is available as of version 4.1 for SMTP reception and SMTP deliveries only.

This option specifies the allowable ciphers for a TLS session. The allowable ciphers must be a subset of the available ciphers on the host system.

**OpenSSL**

When TLS_Engine is set to `openssl`, TLS_Ciphers specifies a "cipher list", which is a list of the supported algorithms, plus some special keywords that specify ciphers of a certain strength of type (e.g.: "MEDIUM"). A full list of ciphers can be obtained by running `openssl ciphers` from a command shell on the host machine. For more information about the available ciphers, see [http://www.openssl.org/docs/apps/ciphers.html](http://www.openssl.org/docs/apps/ciphers.html).

This option can be set to the following:

*   `DEFAULT` – This setting is exactly the same as leaving it unset. If you do not explicitly set the ciphers, OpenSSL will use "DEFAULT". You can be more specific and disable "low" and "export" encryption cipher suites, using a string such as: `tls_ciphers = "DEFAULT:!LOW:!EXP"`.

    The meaning of "DEFAULT" depends upon how OpenSSL was built. On Red Hat Enterprise Linux and Red Hat clones, OpenSSL has certain ciphers disabled for patent reasons and other ciphers disabled because they are insecure. So the "DEFAULT" cipher list varies from one platform to another. To view documentation of ciphers on your system, run **`man ciphers`**         .

*   *`Number of different ciphers`*                       – To specify a number of different ciphers, use the following syntax: `TLS_Ciphers = "DHE-RSA-AES256-SHA:DHE-DSS-AES256-SHA:DHE-RSA-CAMELLIA256-SHA"`.

**GNUTLS**

When TLS_Engine is set to `gnutls`, TLS_Ciphers specifies a "priority string", which is quite different from OpenSSL's cipher list. Priority strings do not allow configuration of specific cipher suites. The priority string can indirectly set the cipher suite, by setting the allowed ciphers, key-exchange, MAC, compression, and signature algorithms; TLS versions; and elliptic curves. Priority strings also allow the enabling or disabling of specific TLS extensions. Note that GNUTLS uses a scheme to describe cryptographic algorithms that is different than OpenSSL. An ecelerity.conf with a specific TLS_Ciphers configuration for OpenSSL will most likely not work with GNUTLS.

For a detailed description of GNUTLS priority strings, see [http://www.gnutls.org/manual/gnutls.html#Priority-Strings](http://www.gnutls.org/manual/gnutls.html#Priority-Strings).

### Note

Momentum 4.1 is using GNUTLS 3.1.x. The GNUTLS manual is for the latest version of GNUTLS, and there may be some priority string keywords that are not supported by GNUTLS in Momentum 4.1.

This option can be set to `NORMAL`.

<a name="idp26985552"></a>
## Scope

`tls_ciphers` is valid in the binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group and peer scopes.

| [Prev](config.tls_certificate.php)  | [Up](config.options.ref.php) |  [Next](config.tls_client_ca.php) |
| tls_certificate  | [Table of Contents](index.php) |  tls_client_ca |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)