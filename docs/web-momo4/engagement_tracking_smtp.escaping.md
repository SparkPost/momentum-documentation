## 41.4. Escaping {{ and }} in SMTP Message Body

Since Momentum inserts open-tracked and click-tracked URLs using its substitution engine, any existing `{{` or `}}` that exist in the SMTP message must be escaped. Before injection, `{{` must be replaced with `{{opening_double_curly()}}` and `}}` must be replaced with `{{closing_double_curly()}}`.

| [Prev](engagement_tracking_smtp.policy.php)  | [Up](engagement_tracking_smtp.php) |  [Next](smtp_reporting_options.php) |
| 41.3. Using Policy for Engagement Tracking  | [Table of Contents](index.php) |  Chapter 42. Reporting Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)