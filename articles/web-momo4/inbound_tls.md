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

| 19.7. Inbound TLS |
| [Prev](inbound_ssl.php)  | Chapter 19. Configuring Inbound Mail Service Using SMTP |  [Next](http_listener.php) |

## 19.7. Inbound TLS

Transport Layer Security (TLS) can be easily configured on an SMTP listener using the following configuration snippet:

```
ESMTP_Listener {
  Listen ":25" {
    TLS_Certificate = "/path/to/cert.pem"
    TLS_Key = "/path/to/key.pem"
    TLS_Client_CA = "/path/to/clientca.bundle"
    TLS_Ciphers = "DEFAULT"
    TLS_Verify_Mode = "require"
    SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "STARTTLS" )
  }
}
```

The following are the configuration options related to inbound TLS:

*   [tls_allow_renegotiation](config.tls_allow_renegotiation.php "tls_allow_renegotiation")

*   [tls_certificate](config.tls_certificate.php "tls_certificate")

*   [tls_ciphers](config.tls_ciphers.php "tls_ciphers")

*   [tls_client_ca](config.tls_client_ca.php "tls_client_ca")

*   [tls_dhparams_file](conf.ref.tls_dhparams_file.php "tls_dhparams_file")

*   [tls_enable_dhe_ciphers](conf.ref.tls_enable_dhe_ciphers.php "tls_enable_dhe_ciphers")

*   [tls_key](config.tls_key.php "tls_key")

*   [tls_protocols](config.tls_protocols.php "tls_protocols")

*   tls_verified_peer_can_relay

*   [tls_verify_mode](config.tls_verify_mode.php "tls_verify_mode")

If client certificate verification fails, the SMTP session does not terminate. The TLS status is stored in predefined context validation variables, so it is possible to drive TLS policy from policy scripts. You can use this to reject messages when client verification failed. For more information regarding the TLS-related context variables, see [Section 63.1.1, “Global Predefined Connection Context Variables”](policy.context.variables.php#policy.predefined-context-conn-global "63.1.1. Global Predefined Connection Context Variables").

| [Prev](inbound_ssl.php)  | [Up](esmtp_listener.php) |  [Next](http_listener.php) |
| 19.6. Inbound SSL  | [Table of Contents](index.php) |  Chapter 20. Configuring Inbound Mail Service Using HTTP |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)