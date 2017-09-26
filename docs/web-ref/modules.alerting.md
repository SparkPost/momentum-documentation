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

| 14.3. alerting – alerting |
| [Prev](modules.adaptive.php)  | Chapter 14. Modules Reference |  [Next](modules.alias.php) |

## 14.3. alerting – alerting

<a class="indexterm" name="idp17640720"></a>

The alerting module provides the ability to send alerting emails when a script examines data. If you intend to create scripts, either using the web policy editor or manually, you must have the alerting module loaded. Loading this module when you are using [Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery") is especially important. You will not receive adaptive alerts if this module is not loaded.

### Note

To use this module you must also load the [inbound_audit module](modules.inbound_audit.php "14.41. inbound_audit – Inbound traffic analytics") and likewise with the [scriptlet module](modules.scriptlet.php "14.60. scriptlet – Module").

### 14.3.1. Configuration

`alerting { }`

The alerting module is a singleton so does not have an instance name.

The following options are available:

<dl class="variablelist">

<dt>alerting_cache_ttl</dt>

<dd>

**Configuration Change. ** Prior to version 3.4, the default value for this option was `60`.

The time to live for the alerting cache. The default value for this option is `3600` seconds.

</dd>

<dt>alerting_cache_size</dt>

<dd>

**Configuration Change. ** Prior to version 3.4, the default value for this option was `200000`.

The alerting cache size. The default value for this option is `1048576` bytes.

</dd>

</dl>

| [Prev](modules.adaptive.php)  | [Up](modules.php) |  [Next](modules.alias.php) |
| 14.2. adaptive – Adaptive Delivery  | [Table of Contents](index.php) |  14.4. alias – Alias Expansion Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)