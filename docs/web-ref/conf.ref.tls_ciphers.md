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
| [Prev](conf.ref.tls_certificate.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.tls_dhparams_file.php) |

<a name="conf.ref.tls_ciphers"></a>
## Name

tls_ciphers — allowable ciphers for TLS inbound and outbound sessions

## Synopsis

`tls_ciphers = "DEFAULT"`

<a name="idp12079168"></a>
## Description

`tls_ciphers` specifies the allowable ciphers for a TLS session. This must be a subset of the available ciphers on the host system. A full list of ciphers can be obtained by running `openssl ciphers` from a command shell on the host machine. For more information about the available ciphers see [http://www.openssl.org/docs/apps/ciphers.html](http://www.openssl.org/docs/apps/ciphers.html).

Setting tls_ciphers to `"DEFAULT"` is exactly the same as leaving it unset. There is no default value for this option in Momentum. If you don't explicitly set the ciphers, OpenSSL will use "DEFAULT". You can be more specific and disable "low" and "export" encryption cipher suites, using a string such as: `tls_ciphers = "DEFAULT:!LOW:!EXP"`.

The meaning of "DEFAULT" depends upon how OpenSSL was built. On Red Hat Enterprise Linux and Red Hat clones, OpenSSL has certain ciphers disabled for patent reasons, and other ciphers disabled because they are insecure. So the "DEFAULT" cipher list varies from one platform to another. To view documentation of ciphers on your system run **`man ciphers`**         .

### Note

Elliptic Curve DH ciphers are not supported in OpenSSL version 0.98\. This version of OpenSSL is commonly shipped by RedHat Enterprise Linux 5.

To specify a number of different ciphers, use the following syntax: `TLS_Ciphers = "DHE-RSA-AES256-SHA:DHE-DSS-AES256-SHA:DHE-RSA-CAMELLIA256-SHA"`.

<a name="idp12087392"></a>
## Scope

`tls_ciphers` is valid in the binding, binding_group, domain, ecstream_listener, esmtp_listener, global, http_listener, listen, pathway, pathway_group and peer scopes.

| [Prev](conf.ref.tls_certificate.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.tls_dhparams_file.php) |
| tls_certificate  | [Table of Contents](index.php) |  tls_dhparams_file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)