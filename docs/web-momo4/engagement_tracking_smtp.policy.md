## 41.3. Using Policy for Engagement Tracking

To enable or disable engagement tracking for a specific message, you can use policy to override the X-MSYS-API header and configuration option. In addition, engagement data specified in the policy's context variables will take precedence over the corresponding X-MSYS-API header fields. For details about engagement tracking for SMTP injections, see [Chapter 41, *Tracking Engagement for SMTP*](engagement_tracking_smtp.php "Chapter 41. Tracking Engagement for SMTP") .

The following context variable are used for engagement tracking in SMTP injections. These context variables must be set before or during the `validate_data_spool_each_rcpt` phase.

Note that context variables are always strings.

**Context Variables** 

<dl class="variablelist">

<dt>smtpapi_campaign_id</dt>

<dd>

Name of the campaign to associate with the SMTP message

e.g.: "black friday"

</dd>

<dt>smtpapi_click_tracking</dt>

<dd>

Whether click tracking is enabled or disabled for the SMTP message

e.g.: "1" or "0" or "true" or "false"

</dd>

<dt>smtpapi_click_tracking_scheme</dt>

<dd>

Set the hyperlink scheme to use for click tracking links in the SMTP message

</dd>

<dt>smtpapi_metadata</dt>

<dd>

JSON key value pairs associated with the SMTP message

Metadata is available during engagement events based on a configuration option. See [Section 71.32, “engagement_tracker – HTTP Engagement Tracking”](modules.engage_tracker.php "71.32. engagement_tracker – HTTP Engagement Tracking").

e.g.: "{\"key\" : \"value\"}"

</dd>

<dt>smtpapi_open_tracking</dt>

<dd>

Whether open tracking is enabled or disabled for the SMTP message

e.g.: "1" or "0" or "true" or "false"

</dd>

<dt>smtpapi_open_tracking_scheme</dt>

<dd>

Set the hyperlink scheme to use for open tracking links in the SMTP message

</dd>

<dt>smtpapi_tags</dt>

<dd>

Array of text labels associated with the SMTP message

e.g.: "[\"cat\", \"dog\"]"

</dd>

<dt>smtpapi_tracking_domain</dt>

<dd>

Set the tracking domain to use in the hyperlink for the SMTP message

</dd>

<dt>smtpapi_tracking_link_expiry</dt>

<dd>

Set the expiration time for engagement tracking for the SMTP message

</dd>

</dl>

### Note

The smtp auth module sets the connection context variable `mo_customer_id`. Lua policy may also set this context variable, and it will be honored by the smtpapi module. There is no X-MSYS-API header equivalent for `customer_id`.

| [Prev](x-msys-api_header.php)  | [Up](engagement_tracking_smtp.php) |  [Next](engagement_tracking_smtp.escaping.php) |
| 41.2. Using the X-MSYS-API Header for Engagement Tracking  | [Table of Contents](index.php) |  41.4. Escaping {{ and }} in SMTP Message Body |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)