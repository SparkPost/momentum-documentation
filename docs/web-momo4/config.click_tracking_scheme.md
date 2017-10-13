| click_tracking_scheme |
| [Prev](config.click_tracking_enabled.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.cluster_max_outbound_connections.php) |

<a name="config.click_tracking_scheme"></a>
## Name

click_tracking_scheme — set the hyperlink scheme to use for click tracking links in SMTP injections

## Synopsis

`click_tracking_scheme = "http"`

<a name="idp23895136"></a>
## Description

**Configuration Change. ** This option is available as of version 4.1-HF4.

If open or click tracking is enabled, this option sets the hyperlink scheme to use for click tracking links in SMTP-injected messages.

The default value is `http`.

The corresponding context variable is `smtpapi_click_tracking_scheme`. There is no corresponding X-MSYS-API header field.

<a name="idp23900640"></a>
## Scope

`click_tracking_scheme` is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scope.

| [Prev](config.click_tracking_enabled.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.cluster_max_outbound_connections.php) |
| click_tracking_enabled  | [Table of Contents](index.php) |  cluster_max_outbound_connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)