<a name="config.tracking_link_expiry"></a>
## Name

tracking_link_expiry — set the expiration time for engagement tracking for SMTP injections

## Synopsis

`Tracking_Link_Expiry = 31536000`

<a name="idp27195200"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1-HF4.

If open or click tracking is enabled, this option determines the amount of time, in seconds, that Momentum will wait for an engagement event in SMTP-injected messages.

This option can be set to any integer value.

The default value is `31536000` seconds (365 days).

The corresponding context variable is `smtpapi_tracking_link_expiry`. There is no corresponding X-MSYS-API header field.

<a name="idp27201248"></a>
## Scope

`tracking_link_expiry` is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scope.

| [Prev](config.tracking_domain.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.transfail_drain_rate.php) |
| tracking_domain  | [Table of Contents](index.php) |  transfail_drain_rate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)