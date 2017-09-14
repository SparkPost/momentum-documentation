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

| Chapter 1. What Does Adaptive Delivery Do? |
| [Prev](index.php)  |   |  [Next](ad.using.php) |

## Chapter 1. What Does Adaptive Delivery Do?

The Momentum Adaptive Delivery (AD) feature dynamically tunes parameters to help manage outbound traffic in accordance with the best practices of receivers. The following diagram gives an overview of AD, showing how the adaptive module responds to input and adjusts outbound traffic:

<a name="figure_overview"></a>

**Figure 1.1. Adaptive Delivery**

![Adaptive Delivery](images/overview.png)

This module can automatically suspend or throttle down traffic based on real-time feedback. From the perspective of Momentum configuration options, the core traffic shaping options that can be modified by AD are:

*   `max_outbound_connections`

*   `max_deliveries_per_connection`

*   `max_recipients_per_connection`

*   `max_recipients_per_batch`

*   `max_resident_active_queue`

*   `outbound_throttle_messages`

*   `retry_interval`

*   `max_retry_interval`

These traffic shaping options are automatically adjusted in real time by setting the equivalent adaptive option in the desired scope. For example, you can set limits on the maximum number of deliveries per connection for the `example.com` domain in the following way:

```
domain "example.com" {
  adaptive_max_deliveries_per_connection = ( 20 80 )
}
```

### Note

A complete listing of the parameters that are handled by AD is given at [Section 3.3, “Rule Actions”](ad.adaptive.rules.actions.php "3.3. Rule Actions").

For more fine-grained control of the behavior of the adaptive module, use Adaptive Rules. These rules are written in Lua and codify the practices of major email receivers such as Gmail™ and Yahoo!™. Rules can incorporate bounce and feedback loop information, take immediate action when specific SMTP responses are encountered and send email alerts detailing issues. The combination of the adaptive module with the Lua scripting language makes for a more powerful and more finely tuned Adaptive Delivery.

AD can be configured in the same way as other Momentum modules but in order to use it effectively you need to be familiar with the following concepts:

*   Scope – there are numerous Adaptive Delivery options that can be configured in a single scope or in a number of different scopes. When an option is configured in more than one scope, it can be difficult to determine which value applies. For a discussion of this topic see [Configuration Scopes and Fallback](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.fallback.php).

*   [Traffic Shaping Options](https://support.messagesystems.com/docs/web-ref/options-summary.php#shaping-options) – the main function of Adaptive Delivery is to manage traffic.

*   Lua Scripts – adaptive response rules are applied using the Lua scripting language. See [Implementing Policy Using Scriptlets](https://support.messagesystems.com/docs/web-ref/implementing.policy.scriptlets.php).

*   [DuraVIP™ bindings](https://support.messagesystems.com/docs/web-ref/cluster.config.duravip.php) – use this technology in a cluster configuration in order to improve the efficiency of Adaptive Delivery.

*   Bounces – AD can react to bounces in real time. For more information see [Live Bounce Updates – Module](https://support.messagesystems.com/docs/web-ref/modules.live.bounce.updates.php) and [The bounce_classifier_override Module](https://support.messagesystems.com/docs/web-ref/modules.bounce_classifier_override.php).

*   Feedback Loops – AD can be set up to react to feedback statistics using sweep rules. See [fbl – Feedback Loop Module](https://support.messagesystems.com/docs/web-ref/modules.fbl.php).

| [Prev](index.php)  |   |  [Next](ad.using.php) |
| Adaptive Delivery User Guide  | [Table of Contents](index.php) |  Chapter 2. Implementing Adaptive Delivery |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)