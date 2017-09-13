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

| Chapter 6. Automated Updates for the Adaptive Rules |
| [Prev](ad.samples.php)  |   |  [Next](ad.adaptive.automated.proxy.php) |

## Chapter 6. Automated Updates for the Adaptive Rules

**Table of Contents**

<dl class="toc">

<dt>[6.1\. Manually Installing New Rules](ad.adaptive.update.php#ad.adaptive.update.manual)</dt>

<dt>[6.2\. Using a Proxy Server](ad.adaptive.automated.proxy.php)</dt>

</dl>

During installation you can choose to install AD rule updates. (See [Installing Additional Packages](https://support.messagesystems.com/docs/web-ref/install.additional.packages.php#install.additional.packages.adaptive.updates)). If you choose this option, you will automatically receive updates to the adaptive rules.

You also have the option of manually installing these rules. Doing this is described in the following section.

## 6.1. Manually Installing New Rules

### Note

This section applies to adaptive rule updates and live bounce updates.

If you wish to install new live update rules manually, execute the following steps:

1.  If you enabled adaptive updates during installation, disable them. For instructions on doing this see [Adaptive Rule Updates](https://support.messagesystems.com/docs/web-ref/modules.live.bounce.updates.php#modules.live.updates.adaptive).

2.  If you are using a proxy server ensure that your configuration is correct. See [Section 6.2, “Using a Proxy Server”](ad.adaptive.automated.proxy.php "6.2. Using a Proxy Server").

3.  Run the **/opt/msys/ecelerity/bin/lu_pull** command. If you are using the default settings you need not worry about this command's options. For more information about this command see [lu_pull](https://support.messagesystems.com/docs/web-ref/executable.lu_pull.php).

If you do not have access to the Message Systems support site on the machine hosting Momentum, use the following procedure to perform an update:

1.  Navigate to the "Product Downloads" page of the Message Systems support site and download the live updates archived file.

2.  Copy this archived file to a temporary directory on each Momentum node and unpack it. This creates a top-level directory named `momentum`.

3.  Change to the directory appropriate to your product version, for example, `3.2`, and then change to the `adaptive` directory and manually execute **`liveupdate.deploy`**.

| [Prev](ad.samples.php)  |   |  [Next](ad.adaptive.automated.proxy.php) |
| Chapter 5. Sample Custom Configurations  | [Table of Contents](index.php) |  6.2. Using a Proxy Server |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)