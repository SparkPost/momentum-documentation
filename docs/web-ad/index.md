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

| Adaptive Delivery User Guide |
|   |   |  [Next](ad.scope.php) |

## Adaptive Delivery User Guide

### Message Systems, Inc.

Copyright © 2011-2015 Message Systems, Inc.

<a name="idp27563840"></a>

Confidential & Proprietary.

**Abstract**

This book documents the Adaptive Delivery module used in Momentum 3.x.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[1\. What Does Adaptive Delivery Do?](ad.scope.php)</dt>

<dt>[2\. Implementing Adaptive Delivery](ad.using.php)</dt>

<dd>

<dl>

<dt>[2.1\. Setting up Adaptive Delivery](ad.using.php#ad.adaptive.setup)</dt>

</dl>

</dd>

<dt>[3\. Adaptive Rules](ad.adaptive.rules.php)</dt>

<dd>

<dl>

<dt>[3.1\. Receivers Managed by Adaptive Rules](ad.adaptive.rules.php#ad.adaptive.rules.receivers)</dt>

<dt>[3.2\. Parameters Adjusted by the Rules](ad.adaptive.rules.parameters.php)</dt>

<dt>[3.3\. Rule Actions](ad.adaptive.rules.actions.php)</dt>

</dl>

</dd>

<dt>[4\. Custom Rules](ad.custom.rules.php)</dt>

<dt>[5\. Sample Custom Configurations](ad.samples.php)</dt>

<dt>[6\. Automated Updates for the Adaptive Rules](ad.adaptive.update.php)</dt>

<dd>

<dl>

<dt>[6.1\. Manually Installing New Rules](ad.adaptive.update.php#ad.adaptive.update.manual)</dt>

<dt>[6.2\. Using a Proxy Server](ad.adaptive.automated.proxy.php)</dt>

</dl>

</dd>

<dt>[7\. Sweep Rules – Configuring Bounce and FBL Behavior](ad.rules.sweep.rules.php)</dt>

<dt>[8\. Troubleshooting](ad.troubleshooting.php)</dt>

<dd>

<dl>

<dt>[8.1\. Logs, Alerts and Summaries](ad.troubleshooting.php#ad.troubleshooting.logs)</dt>

<dt>[8.2\. Using the System Console](ad.troubleshooting.console.php)</dt>

</dl>

</dd>

<dt>[A. Adaptive Options](ad.options.php)</dt>

<dt>[B. Adaptive Executables and Console Commands](ad.executables.php)</dt>

<dt>[C. Adaptive Logs](ad.appendix.logs.php)</dt>

<dt>[D. The `adaptive_rules.lua` File](ad.appendix.adaptive_rules.php)</dt>

</dl>

[List of Figures](figure-toc.php)[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](ad.scope.php) |
|   |   |  Chapter 1. What Does Adaptive Delivery Do? |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)