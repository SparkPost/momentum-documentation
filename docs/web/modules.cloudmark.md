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

| 14.14. cloudmark – Cloudmark Authority Module |
| [Prev](modules.clamav.php)  | Chapter 14. Modules Reference |  [Next](modules.commtouch.php) |

## 14.14. cloudmark – Cloudmark Authority Module

<a class="indexterm" name="idp10969840"></a>

The Cloudmark Authority module provides message diagnosis via industry-leading spam and phishing protection technology. If you intend to use this module be sure to choose it during installation.

### Note

As of version 3.2, if you are separately updating the Cloudmark cartridge outside of Momentum maintenance releases, the cartridge will need to be manually reinstalled after your Momentum upgrade. Otherwise, no additional update is required.

As of version 3.3, the installer no longer replaces any version of the Cloudmark cartridge manually installed by the customer. If you have manually installed a version of the Cloudmark module, the installer will no longer replace it during an upgrade, even if the version in the Momentum installer is newer than the version currently installed.

When you choose this module during installation the msys-cloudmark-*`version`*.*`os`*.*`arch`*.*`package_type`* package is installed. After installation, perform the following steps before starting the ecelerity daemon:

*   Get a license file from Cloudmark

*   Copy this file to `/opt/3rdParty/cloudmark/etc/license.cfg`

*   Configure the cloudmark module as described below

The first time that ecelerity is loaded after cloudmark is enabled, it may take a significant amount of time for the signatures to be downloaded (on the order of 10 minutes). This download process is initiated by the line `download micro-updates before init = yes` in the `license.cfg` file. It is not recommended that this option be disabled.

### 14.14.1. Configuration

<a name="example.cloudmark"></a>

**Example 14.17. cloudmark module**

```
Validate validate/cloudmark cloudmark {
  MinimumScore = 80
}

# alternative configuration for sieve-driven operation
Validate validate/cloudmark cloudmark passive {
  Enabled = false
  MinimumScore = 80
}
```

<dl class="variablelist">

<dt>MinimumScore</dt>

<dd>

A threshold past which a message will be tagged as spam.

</dd>

<dt>Max_Body_Length</dt>

<dd>

The maximum amount of the body to read for processing (in bytes)

</dd>

</dl>

### 14.14.2. Cartridge Configuration and Momentum

If the following variables are not set in Cloudmark's `cartridge.cfg` file, then virus results are not properly returned to Momentum. Use the following settings:

*   `favor analysis over speed = yes`

*   `micro-update signature type = comprehensive_sender_rep.4`

You can also use the value `comprehensive.4` for `micro-update signature type`.

### 14.14.3. Cloudmark Runtime Usage

The Cloudmark engine sets the following validation context parameters:

<dl class="variablelist">

<dt>cmae-score</dt>

<dd>

The Cloudmark authority score for the message, a number between 0 and 100\. The higher the number, the more certain the engine is that the mail is spam.

</dd>

<dt>cmae-isspam</dt>

<dd>

If `MinimumScore` is set, the `cmae-isspam` is set to `true` indicating that the engine has determined the message is spam. No action is directly taken on the message; that is left to the user to do using a policy script.

</dd>

<dt>cmae-category</dt>

<dd>

The category assigned to the message by the Cloudmark Authority

</dd>

<dt>cmae-subcategory</dt>

<dd>

The sub-category assigned to the message by the Cloudmark Authority

</dd>

<dt>cmae-rescan</dt>

<dd>

The rescan flag. If this flag is set to `‘1’`, the email would benefit from a rescan.

</dd>

<dt>cmae-analysis</dt>

<dd>

The Cloudmark Authority analysis header

</dd>

<dt>cmae-category-desc</dt>

<dd>

The Cloudmark category name

</dd>

<dt>cmae-subcategory-desc</dt>

<dd>

The Cloudmark subcategory name

</dd>

</dl>

Use the `cloudmark_score` Sieve function to return a string containing the numeric score assigned to the active message. For more information see [cloudmark_score](sieve.ref.cloudmark_score.php "cloudmark_score").

### 14.14.4. cloudmark Management Using Console Commands

The cloudmark module can be controlled through the `ec_console`; the following command is available:

**14.14.4.1. cloudmark version**

This command outputs version information for the Cloudmark engine, for example:

```
10:47:35 /tmp/2025> cloudmark version
CmaeVersion = "2.0.3.29"
CmaeCartridgeVersion = "3046.2.0.23"
```

| [Prev](modules.clamav.php)  | [Up](modules.php) |  [Next](modules.commtouch.php) |
| 14.13. clamav – ClamAV  | [Table of Contents](index.php) |  14.15. commtouch_ctasd – Commtouch_ctasd Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)