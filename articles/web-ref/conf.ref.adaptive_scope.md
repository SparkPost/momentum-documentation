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

| adaptive_scope |
| [Prev](conf.ref.adaptive_enabled.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.address_metrics_cleanse_interval.php) |

<a name="conf.ref.adaptive_scope"></a>
## Name

adaptive_scope — define the scope applicable to adaptive delivery

## Synopsis

`adaptive_scope = "auto"`

<a name="idp7395360"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.3.

### Note

This directive is only valid if the Momentum adaptive module is loaded. See [Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery").

Use this option to set the scope of adaptive delivery to either local to the node or cluster-wide (i.e. global). Legal values for this option are: `local`, `global` and `auto`. When this option is set to `auto`, then the scope will be global if the binding is DuraVIP enabled and `local` for all other cases.

The default value for this option is `auto`.

<a name="idp7404544"></a>
## Scope

adaptive_scope is valid in the binding, binding_group, domain and global scopes.

<a name="idp7406224"></a>
## See Also

[Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery"), [adaptive_enabled](conf.ref.adaptive_enabled.php "adaptive_enabled"), [Section 14.2.6.2, “The `adaptive_scope` Option”](modules.adaptive.php#modules.adaptive.options.changes.3.3.adaptive_scope "14.2.6.2. The adaptive_scope Option")

| [Prev](conf.ref.adaptive_enabled.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.address_metrics_cleanse_interval.php) |
| adaptive_enabled  | [Table of Contents](index.php) |  address_metrics_cleanse_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)