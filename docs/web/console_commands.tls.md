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

| tls |
| [Prev](console_commands.threads.php)  | 12.2. System Console Commands |  [Next](console_commands.trace_smtp.php) |

<a name="console_commands.tls"></a>
## Name

tls show cache, tls flush cache, tls rekey — manage TLS cache used by Momentum

## Synopsis

`tls flush cache`

`tls rekey`

`tls show cache`

<a name="idp10297760"></a>
## Description

**tls show cache**            shows information of the TLS cache used by the server.

```
10:47:35 /tmp/2025> tls show cache
   1) server context
              age: 28404 seconds old
        in use by: 0 sessions
      certificate: /opt/ecelerity/etc/mail.omniti.com.cert
          ca list: /etc/ssl/ca.cert
          ciphers: default
   2) server context
              age: 25681 seconds old
        in use by: 0 sessions
      certificate: /opt/ecelerity/etc/mail.omniti.com.cert
          ca list: /opt/ecelerity/etc/ca-bundle.crt
          ciphers: default
Temp RSA key is uncached.
```

**tls flush cache**             flushes TLS cache.

```
10:47:35 /tmp/2025> tls flush cache
Cache flush request submitted.
```

**tls rekey**       removes the temporary RSA key. Next use will force the generation and caching of a new key.

```
13:34:55 ecelerity(/tmp/2025)> tls rekey
Rekey request submitted.
```

| [Prev](console_commands.threads.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.trace_smtp.php) |
| threads  | [Table of Contents](index.php) |  trace smtp |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)