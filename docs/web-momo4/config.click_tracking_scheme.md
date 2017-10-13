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
