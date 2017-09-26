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
| [Prev](conf.ref.timestampformat.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tls_allow_renegotiation.php) |

<a name="config.ref.tls"></a>
## Name

tls — determine whether to use TLS connection for outbound mail

## Synopsis

`TLS = "no|ifavailable|required"`

<a name="idp26890704"></a>
## Description

**Configuration Change. ** Support for opportunistic TLS is available as of version 4.1.

This option determines whether or not Transport Layer Security should be used when delivering email. Note that this does not guarantee end-to-end security but only that of the first hop from the MTA.

This option can be set to the following:

*   `no` – Disables the negotiation of TLS for outbound deliveries regardless of whether it is available.

*   `ifavailable` – Enables opportunistic TLS. If the remote mail exchange supports TLS and the TLS negotiation succeeds, the mail will be delivered over TLS.

    *   For version 4.0 – If the negotiation fails, the message is put back into the delayed queue and retried later.

    *   For version 4.1 and later – If the negotiation fails, the value of the TLS_Ifavailable_fallback option determines the behavior, which defaults to Momentum immediately trying to send the message as plain-text.

*   `required` – Disables the sending of mail unless a successful TLS negotiation takes place with the remote mail exchange.

The default value is `no`.

<a name="idp26903056"></a>
## Scope

`tls` is valid in the binding, binding_group, domain, and global scopes.

| [Prev](conf.ref.timestampformat.php)  | [Up](config.options.ref.php) |  [Next](config.tls_allow_renegotiation.php) |
| timestampformat  | [Table of Contents](index.php) |  tls_allow_renegotiation |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)