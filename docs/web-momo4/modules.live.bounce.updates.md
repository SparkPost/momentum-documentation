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

| 71.44. Live Bounce Updates – Live Bounce Updates Service |
| [Prev](modules.jlog.php)  | Chapter 71. Modules Reference |  [Next](modules.mail_loop.php) |

## 71.44. Live Bounce Updates – Live Bounce Updates Service

<a class="indexterm" name="idp22090272"></a>

Momentum ships with a powerful bounce classification engine that canonicalizes bounce messages into a number of categories such as "over-quota" or "invalid user". Over time, however, sites may change the error messages associated with specific bounces, resulting in some messages not being canonicalized properly.

The Live Bounce Updates service is provided free of charge with your support agreement and is enabled by default. It provides a two-way communication mechanism between Message Systems and individual Momentum machines whereby the Momentum machine sends out unclassified bounce reasons to Message Systems via port 443 and also receives updated classification rule sets.

For information about bounce classifier override, see [Section 71.12, “bounce_classifier_override – Override/Augment Bounce Classifications”](modules.bounce_classifier_override.php "71.12. bounce_classifier_override – Override/Augment Bounce Classifications").

### 71.44.1. Configuration

If you do not wish to leave port 443 open, you can process bounce updates manually. For instructions, see [Automated Updates for the Adaptive Rules](https://support.messagesystems.com/docs/web-ad/ad.adaptive.update.php).

Bounce classification updates are automatically applied every six hours. At the same time, any new unclassified bounce reasons will be sent to Message Systems. Use the `/opt/msys/ecelerity/etc/liveupdate.conf` file to change this behavior. If `liveupdate.conf` does not exist, create the file and put it under revision control. The default configuration search path is used when opening the `liveupdate.conf` file. For information on adding files to revision control, see [Section 15.1.5, “Adding Configuration Files”](conf.overview.php#conf.adding.configuration.files "15.1.5. Adding Configuration Files").

The `liveupdate.conf` file has two options: `BounceLiveUpdates` and `BounceFeedback`, which are used to enable or disable installation of updates and reporting respectively.

To disable both Bounce Live Updates and unclassified bounce reporting, set the configuration as shown below:

```
BounceLiveUpdates=disabled
BounceFeedback=disabled
```

You can also use `liveupdate.conf` to enable unclassified bounce reporting even if the customer is not licensed for Bounce Live Updates:

`BounceFeedback=enabled`**71.44.1.1. Adaptive Rule Updates**

The `liveupdate.conf` file is also used to configure adaptive rule updates.

If you installed the adaptive module and you enabled the update service during installation, the following entry is in the `/opt/msys/ecelerity/etc/liveupdate.conf` file:

`AdaptiveLiveUpdates=enabled`

This setting enables automatic updating of the adaptive rules using port `443`. To disable adaptive updates, set this option to `disabled`. You can also choose to update adaptive rules using a proxy server or manually. For instructions, see [Automated Updates for the Adaptive Rules](https://support.messagesystems.com/docs/web-ad/ad.adaptive.update.php).

For information about the adaptive module, see [Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery").

| [Prev](modules.jlog.php)  | [Up](modules.php) |  [Next](modules.mail_loop.php) |
| 71.43. jlog – jlog-Formatted Logging  | [Table of Contents](index.php) |  71.45. mail_loop – Mail Loop Detection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)