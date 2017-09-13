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

| 14.44. Live Bounce Updates – Module |
| [Prev](modules.jlog.php)  | Chapter 14. Modules Reference |  [Next](modules.mail_loop.php) |

## 14.44. Live Bounce Updates – Module

<a class="indexterm" name="idp20299920"></a>

Momentum ships with a powerful bounce classification engine that canonicalizes bounce messages into a number of categories such as "over-quota" or "invalid user". (See [Section 14.11, “bounce_classifier – Bounce Classifier”](modules.bounce_classifier.php "14.11. bounce_classifier – Bounce Classifier").) Over time, however, sites may change the error messages associated with specific bounces, resulting in some messages not being canonicalized properly.

The Live Bounce Updates service provides a two-way communication mechanism between Message Systems and individual Momentum machines whereby the Momentum machine sends out unclassified bounce reasons to Message Systems via port 443 and also receives updated classification rule sets.

### Warning

If you subscribe to the Live Bounce Updates service, be sure to change the value of the bounce_classifier module option, `enable_system_updates`, to `true`. By default, this option is off. You will **not** receive live updates if you do not update this option. In version 3.1, `enable_system_updates` defaults to `true`.

Also note that as of version 3.1, the Live Bounce Updates service is provided free of charge with your support agreement. You can chose to enable this service during installation. In version 3.1, the `/opt/msys/ecelerity/etc/liveupdate.conf` is not required. For more information see [Section 1.9.1, “Live Bounce Updates”](install.additional.packages.php#install.additional.packages.lbu "1.9.1. Live Bounce Updates").

### 14.44.1. Configuration

When you subscribe to Live Updates, bounce classification updates are automatically applied once every six hours. At the same time, any new unclassified bounce reasons will be sent to Message Systems. The `/opt/msys/ecelerity/etc/liveupdate.conf` file can be used to change this behavior. This file has two options: `BounceLiveUpdates` and `BounceFeedback`, which can be used to enable or disable installation of updates and reporting respectively.

The following would disable both Bounce Live Updates and unclassified bounce reporting.

```
BounceLiveUpdates=disabled
BounceFeedback=disabled
```

Alternately, `liveupdate.conf` can be used to enable unclassified bounce reporting even if the customer is not licensed for Bounce Live Updates:

`BounceFeedback=enabled`

The default configuration search path is used when opening the `liveupdate.conf` file, so you can put this file under revision control if you wish. To determine the best location for this file see [Section 2.7, “The Momentum Configuration Server: ecconfigd”](conf.ecconfigd.php "2.7. The Momentum Configuration Server: ecconfigd"). For information on adding files to revision control see [Section 2.9, “Best Practices for Adding Configuration Files”](conf.adding.configuration.files.php "2.9. Best Practices for Adding Configuration Files").

As of version 3.2, if you do not wish to leave port 443 open, you can process bounce updates manually. For instructions see [Automated Updates for the Adaptive Rules](https://support.messagesystems.com/docs/web-ad/ad.adaptive.update.php).

**14.44.1.1. Disabling Live Bounce Updates**

If you wish to disable Live Bounce Updates, set the configuration "BounceLiveUpdates=disabled" in `liveupdate.conf`. If `liveupdate.conf` does not exist, create `/opt/msys/ecelerity/etc/liveupdate.conf` with the entry, `BounceLiveUpdates=disabled`.

**14.44.1.2. Adaptive Rule Updates**

**Configuration Change. ** This feature is available as of version 3.2.

As of version 3.2, the `liveupdate.conf` file is also used to configure adaptive rule updates.

If you have the adaptive module installed, and you enabled the update service during installation, the following entry is found in the `/opt/msys/ecelerity/etc/liveupdate.conf` file.

`AdaptiveLiveUpdates=enabled`

This setting enables automatic updating of the adaptive rules using port `443`. To disable adaptive updates, set this option to `disabled`. You can also choose to update adaptive rules using a proxy server or manually. For instructions see [Automated Updates for the Adaptive Rules](https://support.messagesystems.com/docs/web-ad/ad.adaptive.update.php).

### 14.44.2. See Also

[Section 14.11, “bounce_classifier – Bounce Classifier”](modules.bounce_classifier.php "14.11. bounce_classifier – Bounce Classifier"), [Section 14.12, “bounce_classifier_override – The Bounce Classifier Override Module”](modules.bounce_classifier_override.php "14.12. bounce_classifier_override – The Bounce Classifier Override Module"), [Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery")

| [Prev](modules.jlog.php)  | [Up](modules.php) |  [Next](modules.mail_loop.php) |
| 14.43. jlog – The jlog Module  | [Table of Contents](index.php) |  14.45. mail_loop – Mail Loop Detection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)