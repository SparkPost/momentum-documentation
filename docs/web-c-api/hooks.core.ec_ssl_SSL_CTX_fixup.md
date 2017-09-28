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

| ec_ssl_SSL_CTX_fixup |
| [Prev](hooks.core.ec_mime_component_extract_content_type.php)  | Chapter 60. Hooks in the core scope |  [Next](hooks.core.esmtp_message_sp_async_samfunc.php) |

<a name="hooks.core.ec_ssl_SSL_CTX_fixup"></a>
## Name

ec_ssl_SSL_CTX_fixup — This hook provides an opportunity for modules to alter the context and add passphrase callbacks via OpenSSL functions

## Synopsis

`#include "hooks/core/ec_ssl_SSL_CTX_fixup.h"`

| `void **core_ec_ssl_SSL_CTX_fixup** (` | <var class="pdparam">closure</var>, |   |
|   | <var class="pdparam">sslctx</var>, |   |
|   | <var class="pdparam">type</var>, |   |
|   | <var class="pdparam">domain</var>, |   |
|   | <var class="pdparam">certfile</var>, |   |
|   | <var class="pdparam">keyfile</var>, |   |
|   | <var class="pdparam">clientca</var>, |   |
|   | <var class="pdparam">cipher_list</var>`)`; |   |

`void * <var class="pdparam">closure</var>`;
`struct ssl_ctx_st * <var class="pdparam">sslctx</var>`;
`int <var class="pdparam">type</var>`;
`const char * <var class="pdparam">domain</var>`;
`const char * <var class="pdparam">certfile</var>`;
`const char * <var class="pdparam">keyfile</var>`;
`const char * <var class="pdparam">clientca</var>`;
`const char * <var class="pdparam">cipher_list</var>`;<a name="idp14918752"></a>
## Description

This hook is called after the SSL_CTX (struct ssl_ctx_st) context has been allocated, but before the private key has been loaded.

This hook provides an opportunity for modules to alter the context and add passphrase callbacks via these OpenSSL functions:

*   *`SSL_CTX_set_default_passwd_cb()`*
*   *`SSL_CTX_set_default_passwd_cb_userdata()`*

**Parameters**

<dl class="variablelist">

<dt>closure</dt>

<dd>

A pointer to the closure.

</dd>

<dt>sslctx</dt>

<dd>

An `ec_ssl_ctx` struct. For documentation of this data structure see [Section 68.43, “ec_ssl_ctx”](structs.ec_ssl_ctx.php "68.43. ec_ssl_ctx").

</dd>

<dt>type</dt>

<dd>

One of `EC_SSL_CLIENT` or `EC_SSL_SERVER`.

</dd>

<dt>domain</dt>

<dd>

The delivery domain.

</dd>

<dt>certfile</dt>

<dd>

SSL certificate.

</dd>

<dt>keyfile</dt>

<dd>

The private key.

</dd>

<dt>clientca</dt>

<dd>

List of client CAs.

</dd>

<dt>cipher_list</dt>

<dd>

The list of supported ciphers.

</dd>

</dl>

**Return Values**

This hook returns `void`.

**Threading**

This hook will be called in the `Scheduler` thread.

| [Prev](hooks.core.ec_mime_component_extract_content_type.php)  | [Up](hooks.core.php) |  [Next](hooks.core.esmtp_message_sp_async_samfunc.php) |
| ec_mime_component_extract_content_type  | [Table of Contents](index.php) |  esmtp_message_sp_async_samfunc |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)