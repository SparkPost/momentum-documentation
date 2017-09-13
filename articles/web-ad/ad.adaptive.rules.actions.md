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

| 3.3. Rule Actions |
| [Prev](ad.adaptive.rules.parameters.php)  | Chapter 3. Adaptive Rules |  [Next](ad.custom.rules.php) |

## 3.3. Rule Actions

Actions are taken in response to temporary or permanent failure codes issued by receivers. The actions implemented by the `adaptive_rules.lua` script are as follows:

*   `suspend` – Suspend sending for a specified period. This action results in an email alert to the address defined by `adaptive_alert_email_destination`.

    The parameter associated with this action defines the applicable length of time. Use a time unit indicator and a numeral separated by a space, for example `15 minutes`. The unit can be one of seconds, minutes, hours or days.

*   `blackhole` – "Blackhole" email for a specified period. This action results in an email alert to the address defined by `adaptive_alert_email_destination`.

    The parameter associated with this action defines the applicable length of time. Use a time unit indicator separated from a numeral by a space, for example `4 hours`. The unit can be one of seconds, minutes, hours or days.

*   `throttle` – Limit the rate at which Momentum will attempt to deliver mail. (Adjust the `outbound_throttle_messages` option.) This action results in an email alert to the address defined by `adaptive_alert_email_destination`.

    The `outbound_throttle_messages` option is described in [outbound_throttle_messages](https://support.messagesystems.com/docs/web-ref/conf.ref.outbound_throttle_messages.php). If this option is not set or if is set to `0`, there is no limit on the number of messages sent.

    The parameter associated with this action defines the throttle indicator. This can only be `down`.

*   `greylisted` – Create a greylist period that must expire before retrying mail.

    The parameter associated with this action defines the applicable length of time. Use a time unit indicator separated from a numeral by a space, for example `15 minutes`. The unit can be one of seconds, minutes, hours or days. The affected AD parameters are: `retry_interval` and `max_retry_interval`.

*   `warmup` – Set a warmup period for a new IP. The parameter associated with this action sets the age of the binding in seconds.

*   `reduce_connections` – Reduce the number of outbound connections to a specific receiver. The affected AD parameter is: `adaptive_max_outbound_connections`.

*   `reduce_deliveries` – Reduce the number of deliveries to a specific receiver. The affected AD parameters: `adaptive_max_deliveries_per_connection`.

*   `transcode` — This action implements the response_transcode module options and rewrites permanent errors as temporary errors. Use this action carefully. For more information see [response_transcode](https://support.messagesystems.com/docs/web-ref/modules.response_transcode.php). For an example of how this action is used see [Appendix D, *The `adaptive_rules.lua` File*](ad.appendix.adaptive_rules.php "Appendix D. The adaptive_rules.lua File") .

The throttle, blackhole or suspend actions will generate an email to the address associated with the `adaptive_alert_email_destination` option.

You can augment or replace the rules found in the `adaptive_rules.lua` file. To do this see [Chapter 4, *Custom Rules*](ad.custom.rules.php "Chapter 4. Custom Rules") .

You can confirm that actions have been taken by using the system console. To do this see [Section 8.2, “Using the System Console”](ad.troubleshooting.console.php "8.2. Using the System Console").

| [Prev](ad.adaptive.rules.parameters.php)  | [Up](ad.adaptive.rules.php) |  [Next](ad.custom.rules.php) |
| 3.2. Parameters Adjusted by the Rules  | [Table of Contents](index.php) |  Chapter 4. Custom Rules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)