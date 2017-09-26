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

| tls_verify_mode |
| [Prev](conf.ref.tls_verify.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.trace_smtp_mode.php) |

<a name="conf.ref.tls_verify_mode"></a>
## Name

tls_verify_mode — determine whether a TLS certificate is required

## Synopsis

`TLS_Verify_Mode = "none|require"`

<a name="idp12256496"></a>
## Description

This option determines whether a TLS certificate is required for inbound mail, *if* TLS is started. *It is not a means for requiring TLS* .

Momentum does have an authentication hook (core_validate_auth_hook) for Lua and Sieve scripts to handle authentication results. Additionally, if the connection has been upgraded to TLS, the vctx will contain the key `tls` with a value of `on`. Using these two methods, you should be able to require successful authentication and a TLS connection.

This option can be set to the following:

*   `none` – No client certificate is required, and any certificate presented is ignored. If an invalid certificate is presented, no action is taken.

*   `require` – A client certificate is required, and it will be verified. If an invalid certificate is presented, the policy scripts determine the action taken.

*   *not specified*           – A client certificate is optional, and any certificate presented will be verifed. However, there is no built-in action based on whether the certificate passes or fails verification. The policy scripts determine the action taken.

By default, this option is not specified.

<a name="idp12266608"></a>
## Scope

`tls_verify_mode` is valid in the listener, listen, peer and pathway scopes.

| [Prev](conf.ref.tls_verify.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.trace_smtp_mode.php) |
| tls_verify  | [Table of Contents](index.php) |  trace_smtp_mode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)