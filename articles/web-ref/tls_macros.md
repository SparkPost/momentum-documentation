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

| 14.74. tls_macros Module |
| [Prev](modules.syslog_io.php)  | Chapter 14. Modules Reference |  [Next](modules.url_ripper.php) |

## 14.74. tls_macros Module

The tls_macros module provides several macros supporting custom logging of TLS-related data.

**Configuration Change. ** This module is available as of version 3.6.5\. Support for GNUTLS is available as beta for SMTP reception and SMTP deliveries only.

### 14.74.1. Configuration

The tls_macros module must be loaded, as follows:

`tls_macros {}`
### 14.74.2. TLS Logging Macros

[Table 14.5, “TLS Logging Macros”](tls_macros.php#tls-macros-table "Table 14.5. TLS Logging Macros") lists the TLS logging macros.

<a name="tls-macros-table"></a>

**Table 14.5. TLS Logging Macros**

| Macro | Description | Examples |
| --- | --- | --- |
| outbound_tls:outbound_tls | Whether TLS was used or not | 

*   SMTP ("SMTP" = no TLS)

*   TLS

*   unknown

 |
| outbound_tls:outbound_tls_type | TLS type of connection | 

When TLS is being used, this matches the value of the TLS configuration variable.

*   no ("no" = no TLS)

*   ifavailable

*   required

 |
| outbound_tls:local_ip | IP address to which the message was sent | 1.2.3.4 |
| outbound_tls:outbound_tls_cipher | Cipher suite for TLS session | 

Currently, the cipher suite names are specific to the TLS library used and are different between OpenSSL and GNUTLS.

*   For OpenSSL: ECDHE_RSA_AES_128_GCM_SHA256

*   For GNUTLS: AES256-GCM-SHA384

 |
| outbound_tls:outbound_tls_cipher_algbits | 

*   For OpenSSL: outbound_tls_cipher_algbits returns the bits processed by chosen algorithm.

*   For GNUTLS: outbound_tls_cipher_algbits returns the key size.

 |   |
| outbound_tls:outbound_tls_cipher_usebits | 

*   For OpenSSL: outbound_tls_cipher_usebits returns the secret bits used by chosen cipher.

*   For GNUTLS: outbound_tls_cipher_usebits returns the key size.

 |   |
| outbound_tls:outbound_tls_protocol | TLS/SSL protocol version string | 

*   For OpenSSL: TLSv1.2

*   For GNUTLS: TLS1.2

 |
| outbound_tls:outbound_tls_verified | Whether the certificate passed verification (including subject verification) | 

*   verified

*   unverified

 |
| outbound_tls:outbound_tls_issuer | Issuer from TLS certificate | ca.test.messagesystems.com |
| outbound_tls:outbound_tls_subject | Subject from TLS certificate | server.ectest.examplecompany.com |

The following is an example custom_logger module configuration using the TLS logging macros.

<a name="example.custom_logger.tls"></a>

**Example 14.105. Example custom_logger Configuration**

```
custom_logger custom_logger1 {
   log_receptions = "on"
   log_deliveries = "on"
   log_transient_failures = "on"
   log_permanent_failures = "on"

   # Use of namespace is critical for the macros to work!
   namespace = "custom_logger,sieve,outbound_tls"

   mainlog = "/tmp/ecelerity.5764/perl-tests_tls_tls_macros.t/customlog.cl"

   reception_format = "%t{%m:%d:%H:%M:%S}@%i@%BI@%CI@R@%r@%R@%m@%M@%H@%B@%p@%g@%b »
   @%r@%R%local_ip@%outbound_tls@%outbound_tls_type@%outbound_tls_cipher »
   @%outbound_tls_cipher_algbits@%outbound_tls_cipher_usebits@%outbound_tls_protocol »
   @%outbound_tls_verified@%outbound_tls_issuer@%outbound_tls_subject"

   delivery_format = "%t{%m:%d:%H:%M:%S}@%i@%BI@%CI@D@%d@%B@%g@%b@%N@%T@%H% »
   @%r@%R%local_ip@%outbound_tls@%outbound_tls_type@%outbound_tls_cipher »
   @%outbound_tls_cipher_algbits@%outbound_tls_cipher_usebits@%outbound_tls_protocol »
   @%outbound_tls_verified@%outbound_tls_issuer@%outbound_tls_subject"

   transient_failure_format = "%t{%m:%d:%H:%M:%S}@%i@%BI@%CI@T@%d@0@%g@%b@%S@%N@%T@%H@%n »
   @%r@%R%local_ip@%outbound_tls@%outbound_tls_type@%outbound_tls_cipher »
   @%outbound_tls_cipher_algbits@%outbound_tls_cipher_usebits@%outbound_tls_protocol »
   @%outbound_tls_verified@%outbound_tls_issuer@%outbound_tls_subject"

   permanent_failure_format = "%t{%m:%d:%H:%M:%S}@%i@%BI@%CI@P@%d@0@%g@%b@%S@%N@%T@%H@%n »
   @r@%R%local_ip@%outbound_tls@%outbound_tls_type@%outbound_tls_cipher »
   @%outbound_tls_cipher_algbits@%outbound_tls_cipher_usebits@%outbound_tls_protocol »
   @%outbound_tls_verified@%outbound_tls_issuer@%outbound_tls_subject"
}
```

For more information on the custom_logger, see [Section 14.24, “custom_logger – Customizable Logging”](modules.custom_logger.php "14.24. custom_logger – Customizable Logging").

| [Prev](modules.syslog_io.php)  | [Up](modules.php) |  [Next](modules.url_ripper.php) |
| 14.73. syslog_io – The syslog_io Module  | [Table of Contents](index.php) |  14.75. url_ripper – URL Extraction |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)