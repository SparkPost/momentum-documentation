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

| 71.4. alerting – Send Alerting Emails |
| [Prev](modules.adaptive.php)  | Chapter 71. Modules Reference |  [Next](modules.alias.php) |

## 71.4. alerting – Send Alerting Emails

<a class="indexterm" name="idp19664624"></a>

The alerting module provides the ability to send alerting emails when a script examines data. If you intend to create scripts using the [`scriptlet`](modules.scriptlet.php "71.60. scriptlet - Lua Policy Scripts") module, you must have the alerting module loaded.

It is especially important to load this module when you are using [Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery"). You will not receive adaptive alerts if this module is not loaded.

### 71.4.1. Configuration

The alerting module is a singleton, so it does not have an instance name. To use this module, you must also load the [inbound_audit](modules.inbound_audit.php "71.41. inbound_audit – Inbound traffic analytics") module. The following is an example configuration:

<a name="example.alerting"></a>

**Example 71.7. alerting configuration**

```
alerting {}

inbound_audit {
  monitors = ("300,6")
}
```

The following configuration options are available:

<dl class="variablelist">

<dt>alerting_cache_ttl</dt>

<dd>

Time to live for the alerting cache. Default value is `3600` seconds.

</dd>

<dt>alerting_cache_size</dt>

<dd>

Alerting cache size. Default value is `1048576` bytes.

</dd>

</dl>

| [Prev](modules.adaptive.php)  | [Up](modules.php) |  [Next](modules.alias.php) |
| 71.3. adaptive – Adaptive Delivery  | [Table of Contents](index.php) |  71.5. alias – Alias Expansion |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)