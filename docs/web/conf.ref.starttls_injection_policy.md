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

| starttls_injection_policy |
| [Prev](conf.ref.ssl_lock_method.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.supplemental_groups.php) |

<a name="conf.ref.starttls_injection_policy"></a>
## Name

starttls_injection_policy — protect against SMTP injections prior to TLS

## Synopsis

`starttls_injection_policy = "reject"`

<a name="idp6801200"></a>
## Description

**Configuration Change. ** This feature is available as of version 2.2.3.48.

This option deals with the security issue described by CVE-2011-0411—namely that SMTP commands can be injected before the MTA switches to TLS. Consequently, a "man in the middle" could inject SMTP commands that are not protected by TLS.

This option has three possible values: `allow`, `reject`, `ignore`. The default value for this option is `reject`. When set to `reject`, if any commands are present in the buffer immediately after a STARTTLS command, then the STARTTLS is rejected and the connection is dropped. This event will be logged in the rejectlog.

If the value is `ignore`, then any commands after STARTTLS are ignored and commands after the successful TLS negotiation will be interpreted. When set to `allow`, the ESMTP listener will process commands after STARTTLS and before successful SSL negotiation. `allow` was the only supported behavior prior to Momentum 2.2.3.48.

<a name="idp6811872"></a>
## Scope

This option is valid in the ESMTP_Listener, listen, pathway, pathway_group and peer scopes.

| [Prev](conf.ref.ssl_lock_method.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.supplemental_groups.php) |
| ssl_lock_method  | [Table of Contents](index.php) |  supplemental_groups |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)