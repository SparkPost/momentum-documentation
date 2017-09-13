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

| 14.40. imageanalyzer – Module |
| [Prev](modules.ilf_logger.php)  | Chapter 14. Modules Reference |  [Next](modules.inbound_audit.php) |

## 14.40. imageanalyzer – Module

<a class="indexterm" name="idp20121216"></a>

**Configuration Change. ** This feature is available starting from Momentum 3.0.23.

The imageanalyzer module supports the Image Analyzer engine used to identify pornographic or inappropriate image content within email. For more information see [Image Analyzer](http://www.image-analyzer.com/). You cannot configure this module using the web UI. To manually configure it be sure to consult [Section 2.8, “Best Practices for Manually Changing Configuration Files”](conf.manual.changes.php "2.8. Best Practices for Manually Changing Configuration Files").

### Note

This module is only supported for Red Hat 5 32 bit operating systems.

In order to run this module, your license must be Image Analyzer enabled.

Momentum version 3.3 uses version `4.0.2.0` of the Image Analyzer Engine.

### 14.40.1. Configuration

This module is configured in the following way:

```
imageanalyzer "imageanalyzer1" {
 Threshold_Highly_Suspect = 74
 Threshold_Suspect = 50
 Engine_Sensitivity = 65
}
```

The followng options are available:

<dl class="variablelist">

<dt>Engine_Sensitivity</dt>

<dd>

Use this option to scale the engine sensitivity from 0 to 100\. The higher the value the higher the detection rate and the higher the false positive rate. Vice versa the lower the value the lower the detection rate and the lower the false positive rate. The default value for this option is `65`.

</dd>

<dt>Threshold_Highly_Suspect</dt>

<dd>

If a message's score is greater than or equal to this value an `image_analyzer_result` key is set in the message context with a value of `Highly-Suspect-image`. The default value for this option is `74`.

</dd>

<dt>Threshold_Suspect</dt>

<dd>

If the message's score is greater than or equal to this value, an `image_analyzer_result` key is set in the message context with a value of `Suspect-image`. The default value for this option is `50`.

</dd>

</dl>

To determine the results of a scan you need to look at the `image_analyzer_result` message context variable. Possible values are:

*   `Highly-Suspect-image`

*   `Suspect-image`

If no suspect images are detected, this context variable is not set.

| [Prev](modules.ilf_logger.php)  | [Up](modules.php) |  [Next](modules.inbound_audit.php) |
| 14.39. ilf_logger Module  | [Table of Contents](index.php) |  14.41. inbound_audit – Inbound traffic analytics |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)