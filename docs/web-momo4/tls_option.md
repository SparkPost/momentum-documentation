| 25.5. Outbound TLS |
| [Prev](outbound_mail.traffic.shaping.php)  | Chapter 25. Configuring Outbound Mail Delivery |  [Next](outbound_mail.outbound.xclient.php) |

## 25.5. Outbound TLS

A recent initiative among the large ISPs and receiving domains is to use Transport Layer Security protocol (TLS) by default for mail traffic. TLS is a standard for providing cryptographic protection of communication sessions between two systems. It is derived from the earlier standard, Secure Sockets Layer (SSL) and is the replacement for SSL. – They are not the same.

Momentum supports enforced TLS and opportunistic TLS. When TLS is enforced, Momentum will deliver messages only if TLS is successfully negotiated. Opportunistic TLS enables Momentum to deliver messages over TLS if the remote host advertises TLS support and the TLS negotiation succeeds but also provides an option to send the message as plain-text if the TLS negotiation fails.

### 25.5.1. Configuration

Outbound TLS is configured using options in the `ecelerity.conf` file. You may configure Momentum to use TLS in the global, domain, binding, or binding_group scope when delivering mail. Momentum 4 supports the OpenSSL and GNUTLS libraries.

**Configuration Change. ** Support for GNUTLS is available as of version 4.1 for SMTP reception and SMTP deliveries only. Support for opportunistic TLS is available as of version 4.1.

By default, TLS is disabled. To use TLS, you must change the `TLS` option in the `ecelerity.conf` file and configure the following TLS-related options:

*   [crypto_lock_method](config.crypto_lock_method.php "crypto_lock_method")

*   [ssl_lock_method](config.ssl_lock_method.php "ssl_lock_method")

*   [starttls_injection_policy](config.starttls_injection_policy.php "starttls_injection_policy")

*   [tls](config.ref.tls.php "tls")

*   [tls_allow_renegotiation](config.tls_allow_renegotiation.php "tls_allow_renegotiation")

*   [tls_ca](config.tls_ca.php "tls_ca")

*   [tls_certificate](config.tls_certificate.php "tls_certificate")

*   [tls_ciphers](config.tls_ciphers.php "tls_ciphers")

*   [tls_dhparams_file](conf.ref.tls_dhparams_file.php "tls_dhparams_file")

*   [tls_enable_dhe_ciphers](conf.ref.tls_enable_dhe_ciphers.php "tls_enable_dhe_ciphers")

*   [tls_engine](config.tls_engine.php "tls_engine")

*   [tls_ifavailable_fallback](config.tls_ifavailable_fallback.php "tls_ifavailable_fallback")

*   [tls_key](config.tls_key.php "tls_key")

*   [tls_protocols](config.tls_protocols.php "tls_protocols")

*   [tls_verified_peer_is_authorized](config.tls_verified_peer_is_authorized.php "tls_verified_peer_is_authorized")

*   [tls_verify](config.tls_verify.php "tls_verify")

### Note

If you enable TLS, see [Section 12.6, “Security Considerations”](install.security_considerations.php "12.6. Security Considerations") for information on how to fix the POODLE vulnerability using either the [tls_protocols](config.tls_protocols.php "tls_protocols") option (for OpenSSL) or the [tls_ciphers](config.tls_ciphers.php "tls_ciphers") option (for GNUTLS).

The following is an example configuration in the `ecelerity.conf` file:

```
# TLS settings for customer-1
binding "customer-1" {
  tls_key = "/path/to/customer1.key"
  tls_certificate = "/path/to/customer2.cert"

  domain "trusted.partner.example.com" {
    tls = "required"
    tls_ca = "/path/to/customer1/partners.cabundle"
  }
}
```

### 25.5.2. Logging Macros

A number of macros are available to enable logging of details about the TLS session used for a delivery attempt. To use these macros, you must load the tls_macros module. See [Section 71.72, “tls_macros – TLS-related Logging”](tls_macros.php "71.72. tls_macros – TLS-related Logging").

| [Prev](outbound_mail.traffic.shaping.php)  | [Up](outbound_mail.php) |  [Next](outbound_mail.outbound.xclient.php) |
| 25.4. Throttling and Traffic Shaping  | [Table of Contents](index.php) |  25.6. Outbound XCLIENT support |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)