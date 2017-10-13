| tracking_domain |
| [Prev](conf.ref.trace_smtp_mode.php)  | Chapter 72. Configuration Options Reference |  [Next](config.tracking_link_expiry.php) |

<a name="config.tracking_domain"></a>
## Name

tracking_domain — set the tracking domain to use for engagement tracking in SMTP injections

## Synopsis

`tracking_domain = "localhost:8080"`

<a name="idp27179808"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1-HF4.

If open or click tracking is enabled, this option sets the tracking domain to use in the hyperlink for engagement tracking in SMTP-injected messages.

The default value is `localhost:8080`.

The corresponding context variable is `smtpapi_tracking_domain`. There is no corresponding X-MSYS-API header field.

<a name="idp27185312"></a>
## Scope

`tracking_domain` is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scope.

| [Prev](conf.ref.trace_smtp_mode.php)  | [Up](config.options.ref.php) |  [Next](config.tracking_link_expiry.php) |
| trace_smtp_mode  | [Table of Contents](index.php) |  tracking_link_expiry |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)