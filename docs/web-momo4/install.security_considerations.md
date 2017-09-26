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

| 12.6. Security Considerations |
| [Prev](install.vertica.license.php)  | Chapter 12. Post-Installation |  [Next](add_remove_platform_nodes.php) |

## 12.6. Security Considerations

This section will document security issues and fixes for those issues.

### 12.6.1. A Note About umask

A umask setting of `0027` in the shell startup file, typically `~/.bashrc` when using the bash shell, will cause installation to fail because directories created by root will be inaccessible to the user `ecuser`.

With a umask setting of `0027`, when the initial configuration is being created, ecconfigd is started, but the Apache instance will not start. You will see output such as the following:

```
shell> CFG-07961 failed to stat
'/opt/msys/etc/installer/ecelerity.d/': Permission denied
Reconfigure failed.
Global configuration error.
```

This is also true of any files that are created as the root user under the `/opt/msys/ecelerity/etc/conf` directory.

To resolve this use a more permissive mask, for example `umask 0022`.

Another option is to `chown ecuser:ecuser` all new configuration files, or make them world readable. Likewise for directories.

If you get the permissions wrong, then you will also not be able to log in to the web UI or use the **ecconfigd** command.

### 12.6.2. POODLE Vulnerability Fix

The POODLE (Padding Oracle On Downgraded Legacy Encryption) vulnerability attacks the TLS protocol and forces clients to downgrade to the SSLv3, which has no known secure cipher suites available. This allows an attacker to read information encrypted with this version of the protocol in plain text. Another part of the POODLE attack is exploiting weaknesses in the CBC mode of operation.

**Disable SSLv3 (GNUTLS)**

If you access the REST APIs via NGINX, enable GNUTLS in the TLS_Engine and disable SSLv3 to protect SMTP traffic. To do this, set the [tls_ciphers](config.tls_ciphers.php "tls_ciphers") configuration option to disable SSLv3 in your `ecelerity.conf` file:

`TLS_Ciphers = "NORMAL:-VERS-SSL3.0"`

For more information, see the [GNUTLS website](http://www.gnutls.org/security.html#GNUTLS-SA-2014-4).

**Disable SSLv3 (OpenSSL)**

To fix this vulnerability in OpenSSL, make sure you are running Momentum 4.1.0.2 or later and set the [tls_protocols](config.tls_protocols.php "tls_protocols") configuration option to disable SSLv3 in your `ecelerity.conf` file:

`TLS_Protocols = "+ALL:-SSLv3"`

| [Prev](install.vertica.license.php)  | [Up](post_installation.php) |  [Next](add_remove_platform_nodes.php) |
| 12.5. Upgrading the Vertica License  | [Table of Contents](index.php) |  Chapter 13. Adding and Removing Platform Nodes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)