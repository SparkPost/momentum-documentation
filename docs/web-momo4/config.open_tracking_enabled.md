<a name="config.open_tracking_enabled"></a>
## Name

open_tracking_enabled — enable or disable open tracking for SMTP injections

## Synopsis

`Open_Tracking_Enabled = "true|false"`

<a name="idp25689728"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1-HF4.

When open tracking is enabled, Momentum inserts an open-tracked image into the top text/html part of SMTP-injected messages. When a recipient opens the message, Momentum reports this engagement event as an open.

This option can be set to the following:

*   `true` – Open tracking event data will be available for SMTP-injected messages.

*   `false` – Open tracking event data will not be available for SMTP-injected messages.

The default value is `false`.

The corresponding context variable is `smtpapi_open_tracking`, and the corresponding X-MSYS-API header field is `options.open_tracking`

<a name="idp25699968"></a>
## Scope

`open_tracking_enabled` is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scope.

| [Prev](conf.ref.open_relay.php)  | [Up](config.options.ref.php) |  [Next](config.open_tracking_scheme.php) |
| open_relay  | [Table of Contents](index.php) |  open_tracking_scheme |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)