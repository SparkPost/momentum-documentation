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

| 6.1. Connection Context Variables |
| [Prev](policy.context.variables.php)  | Chapter 6. Validation Context Variables |  [Next](policy.context-mess.php) |

## 6.1. Connection Context Variables

<a class="indexterm" name="idp1765344"></a>

Connection context variables are set upon the creation of a successful connection and contain information regarding the remote client. Connection context variables are predefined, either in a global context or within a module. The global variables are discussed in the next section and the module-specific variables follow.

### 6.1.1. Global Predefined Connection Context Variables

The following connection context variables are predefined globally by Momentum:

<dl class="variablelist">

<dt>auth_user</dt>

<dd>

The authenticated username. When an SMTP client performs a successful SMTP AUTH action and authenticates, the auth_user context key will be set to the username used during authorization. For more information about authentication see [Section 2.2, “Authentication, Authorization and Accounting”](conf.aaa.php "2.2. Authentication, Authorization and Accounting").

</dd>

<dt>can_relay</dt>

<dd>

Whether relaying is allowed. When an SMTP client is allowed to relay through Momentum because of an entry in `relay_hosts` or a relaying declaration in an ESMTP_Listener IP access control list, the `can_relay` connection context variable is set to "true." See also [relay_hosts](conf.ref.relay_hosts.php "relay_hosts") and [Section 2.2, “Authentication, Authorization and Accounting”](conf.aaa.php "2.2. Authentication, Authorization and Accounting").

</dd>

<dt>connection_message_count</dt>

<dd>

The number of messages on the connection.

</dd>

<dt>connection_rcpt_count</dt>

<dd>

The number of recipients on the connection. This variable counts the *total* number of RCPT TOs on this open connection while `message_rcpt_count` counts the number of RCPT TOs since the last MAIL FROM.

</dd>

<dt>datasource_error</dt>

<dd>

This context variable is accessible after execution of a Sieve function. If a Sieve data source query cannot be completed due to an error, this variable will be set to `true`. See [ds_fetch](sieve.ref.ds_fetch.php "ds_fetch") and following.

</dd>

<dt>dns_status</dt>

<dd>

If the last Sieve `ec_dns_lookup` function call returned an error, this variable will contain the description of that error. See [ec_dns_lookup](sieve.ref.ec_dns_lookup.php "ec_dns_lookup").

</dd>

<dt>ehlo_domain</dt>

<dd>

The domain from the EHLO phase.

This variable is accessible as of the EHLO phase.

</dd>

<dt>ehlo_string</dt>

<dd>

The complete EHLO string.

</dd>

<dt>message_rcpt_count</dt>

<dd>

The number of recipients for the current message. Since a given message "object" can only have one recipient, multiple recipients are a property of the current session and are tracked at the connection level not the message level. This variable counts the number of RCPT TOs since the last MAIL FROM while `connection_rcpt_count` counts the *total* number of RCPT TOs on this open connection.

</dd>

<dt>tls</dt>

<dd>

Whether TLS is in use.

</dd>

<dt>tls_cipher</dt>

<dd>

Identifies the cipher in use for a TLS enabled session

This variable is accessible from the [outbound_tls_ciphers](https://support.messagesystems.com/docs/web-c-api/hooks.core.outbound_tls_ciphers.php) hook.

</dd>

<dt>tls_cipher_algbits</dt>

<dd>

The number of bits the algorithm is based on, for example 128

</dd>

<dt>tls_cipher_usebits</dt>

<dd>

The number of bits used, for example 40

</dd>

<dt>tls_client_cert_subject</dt>

<dd>

Holds the subject of the peer certificate for a TLS enabled session.

</dd>

<dt>tls_client_cert_subject_cn</dt>

<dd>

The common name of the subject of the peer certificate.

</dd>

<dt>tls_client_cert_issuer</dt>

<dd>

Holds the issuer of the peer certificate for a TLS enabled session.

</dd>

<dt>tls_client_cert_issuer_cn</dt>

<dd>

The common name of the issuer of the peer certificate.

</dd>

<dt>tls_client_verified</dt>

<dd>

Will be set to the string `yes` if the peer certificate was verified against the configured Certificate Authorities.

</dd>

</dl>

### 6.1.2. Predefined Module-Specific Connection Context Variables

The following sections show modules that support predefined module-specific connection context variables.

**6.1.2.1. The conntrol Module**

The variables are as follows:

*   `conntrol_unrecognized_commands` – The number of unrecognized commands.

*   `conntrol_bad_commands` – The number of valid SMTP commands with syntax errors

*   `early_talker` – Whether the peer started issuing commands before Momentum sent the initial SMTP banner.

For more information see [Section 14.17.2, “Conntrol Runtime Usage”](modules.conntrol.php#modules.conntrol.runtime.usage "14.17.2. Conntrol Runtime Usage")

**6.1.2.2. The mail_loop Module**

The variables are as follows:

*   `mail_loop_header_count` – The number of received headers detected.

*   `mail_loop_ip` – Set to 'match', if a self-connect was detected

For more information see [Section 14.36.2, “mail_loop Runtime Usage”](modules.mail_loop.php#modules.mail_loop.runtime.usage "14.36.2. mail_loop Runtime Usage")

| [Prev](policy.context.variables.php)  | [Up](policy.context.variables.php) |  [Next](policy.context-mess.php) |
| Chapter 6. Validation Context Variables  | [Table of Contents](index.php) |  6.2. Message Context Variables |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)