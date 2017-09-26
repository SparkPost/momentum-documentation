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
| [Prev](conf.ref.adaptive_enabled.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.address_metrics_cleanse_interval.php) |

<a name="conf.ref.adaptive_scope"></a>
## Name

adaptive_scope — define the scope applicable to adaptive delivery (AD)

## Synopsis

`adaptive_scope = "auto"`

<a name="idp23393072"></a>
## Description

### Note

This directive is only valid if the Momentum adaptive module is loaded. See [Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery").

This option controls the scope of adaptive delivery, making it local to the node or cluster-wide (i.e., global). It can be be set to `local`, `global`, or `auto`. When it is set to `auto`, the scope will be global if the binding is DuraVIP™ enabled and local for all other cases.

When it is set to `global` for a binding::domain:

*   AD is cluster-wide for that binding::domain.

*   The stats will be aggregated across all MTA nodes. Although stats are replicated across the cluster, rules are only evaluated for the binding::domain pair on the node where messages have been sent. This may cause a small latency for a recently transferred virtual IP that has activity in its previous host (but only if the transfer occurs while rules are being evaluated).

*   Any action triggered for a binding::domain, where `adaptive_scope` is global, will affect the same binding::domain across all MTA nodes.

*Note*: If `adaptive_scope` evaluates to "global" for a binding::domain combination, it does not imply that it will also evaluate to the same value for that binding alone.

If `adaptive_scope` evaluates to "global" for a [binding](conf.ref.binding.php "binding") scope, the age set for that binding through the warmup action will be applied to the binding across the whole cluster.

The following use cases apply to the `adaptive_scope` option:

*   In a standalone MTA, `adaptive_scope` is local no matter what value the option is set to.

*   In a cluster where more than one MTA is doing the sending and all traffic goes through a network router, you will want to set `adaptive_scope` to `global` for the relevant bindings/domains. This is because the outside world sees only one source IP.

*   When a binding is DuraVIP™ enabled, it may be relocated to another host. For this reason, set the scope to `global` or `auto` (which is effectively `global` for a DuraVIP™ binding).

*   In all other circumstances, set the scope to `local` to save CPU and network bandwidth. For example, where different IPs are used for different bindings (and the binding is not DuraVIP™), `adaptive_scope` should be local.

The default value for this option is `auto`.

<a name="idp23417728"></a>
## Scope

adaptive_scope is valid in the binding, binding_group, domain, and global scopes.

<a name="idp23419600"></a>
## See Also

[Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery"), [adaptive_enabled](conf.ref.adaptive_enabled.php "adaptive_enabled")

| [Prev](conf.ref.adaptive_enabled.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.address_metrics_cleanse_interval.php) |
| adaptive_enabled  | [Table of Contents](index.php) |  address_metrics_cleanse_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)