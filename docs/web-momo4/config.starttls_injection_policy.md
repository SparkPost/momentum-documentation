<a name="config.starttls_injection_policy"></a>
## Name

starttls_injection_policy — protect against SMTP injections prior to TLS

## Synopsis

`Starttls_Injection_Policy = "allow|ignore|reject"`

<a name="idp26762976"></a>
## Description

This option deals with the security issue described by CVE-2011-0411, namely that SMTP commands can be injected before the MTA switches to TLS. Consequently, a "man in the middle" could inject SMTP commands that are not protected by TLS.

This option can be set to the following:

*   `allow` – The ESMTP listener will process commands after STARTTLS and before successful SSL negotiation.

*   `ignore` – Any commands after STARTTLS are ignored, and commands after the successful TLS negotiation will be interpreted.

*   `reject` – If any commands are present in the buffer immediately after a STARTTLS command, the STARTTLS is rejected and the connection is dropped. This event will be logged in the rejectlog.

The default value is `reject`.

<a name="idp26771264"></a>
## Scope

`starttls_injection_policy` is valid in the ESMTP_Listener, listen, pathway, pathway_group and peer scopes.

| [Prev](config.ssl_lock_method.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.supplemental_groups.php) |
| ssl_lock_method  | [Table of Contents](index.php) |  supplemental_groups |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)