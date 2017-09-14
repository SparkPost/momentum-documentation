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

| outbound_smtp_tls_verify_callback |
| [Prev](hooks.core.message_body_in_core.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.outbound_tls_ca.php) |

<a name="hooks.core.outbound_smtp_tls_verify_callback"></a>
## Name

outbound_smtp_tls_verify_callback — This hook allows you to augment the built-in TLS verification process for outbound SMTP sessions.

## Synopsis

`#include "hooks/core/outbound_smtp_tls_verify_callback.h"`

| `int **core_outbound_smtp_tls_verify_callback** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">dc</var>, |   |
|   | <var class="pdparam">sslctx</var>, |   |
|   | <var class="pdparam">preverify_ok</var>, |   |
|   | <var class="pdparam">subject</var>, |   |
|   | <var class="pdparam">issuer</var>, |   |
|   | <var class="pdparam">x509ctx</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`delivery_construct * <var class="pdparam">dc</var>`;
`ec_ssl_ctx * <var class="pdparam">sslctx</var>`;
`int <var class="pdparam">preverify_ok</var>`;
`const char * <var class="pdparam">subject</var>`;
`const char * <var class="pdparam">issuer</var>`;
`struct ssl_x509_store_ctx_st * <var class="pdparam">x509ctx</var>`;<a name="idp1373776"></a>
## Description

This hook allows you to augment the built-in TLS verification process for outbound SMTP sessions. The parameters are the same as the `ec_ssl_verify_callback_func` defined in `ec_ssl.h`, with the addition of the `delivery_construct` for the current session.

This hook is not called when server certificate verification is disabled, that is, when `TLS_verify` is set to `no`.

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure.

</dd>

<dt>dc</dt>

<dd>

The delivery_construct struct. See [Section 68.11, “delivery_construct”](structs.delivery_construct.php "68.11. delivery_construct").

</dd>

<dt>sslctx</dt>

<dd>

An `ec_ssl_ctx` struct passed through from the OpenSSL verify callback. For documentation of this data structure see [Section 68.43, “ec_ssl_ctx”](structs.ec_ssl_ctx.php "68.43. ec_ssl_ctx")

</dd>

<dt>preverify_ok</dt>

<dd>

Passed through from the OpenSSL verify callback. Indicates whether the verification of the certificate in question passed (`preverify_ok=1`) or not (`preverify_ok=0`).

</dd>

<dt>subject</dt>

<dd>

Subject of the peer in the X509 certificate.

</dd>

<dt>issuer</dt>

<dd>

The issuer of the peer in the X509 certificate.

</dd>

<dt>x509ctx</dt>

<dd>

An `ssl_x509_store_ctx_st` structure.

</dd>

</dl>

**Return Values**

Returns `1` for "verification successful" and `0` for "verification UNsuccessful".

**Threading**

This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.message_body_in_core.php)  | [Up](hooks.core.php) |  [Next](hooks.core.outbound_tls_ca.php) |
| message_body_in_core  | [Table of Contents](index.php) |  outbound_tls_ca |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)