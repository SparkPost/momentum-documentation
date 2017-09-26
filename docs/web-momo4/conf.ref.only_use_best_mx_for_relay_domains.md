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

| only_use_best_mx_for_relay_domains |
| [Prev](conf.ref.never_retry.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.open_relay.php) |

<a name="conf.ref.only_use_best_mx_for_relay_domains"></a>
## Name

only_use_best_mx_for_relay_domains — If this is set to `true`, only the lowest numerical priority MXs are used when sending to domains listed in `bounce_domains` or `relay_domains`.

## Synopsis

`only_use_best_mx_for_relay_domains = false`

<a name="idp25651696"></a>
## Description

When `only_use_best_mx_for_relay_domains` is set to `true`, only the lowest numerical priority MXs are used when sending to domains listed in `bounce_domains` or `relay_domains`; others are ignored. If this value is set to `false`, all MXs will be used. The default value is `true` (however, this option is typically set to `false` in the default `ecelerity.conf` file). We suggest setting this to `false` if you use the `routes` option.

### Note

The `relay_domains` value that interacts with `only_use_best_mx_for_relay_domains` is the one set in the global scope; any `relay_domains` set in pathway scopes will **not** be affected.

<a name="idp25661248"></a>
## Scope

only_use_best_mx_for_relay_domains is valid in the global scope.

<a name="idp25663104"></a>
## See Also

[routes](conf.ref.routes.php "routes"), [bounce_domains](conf.ref.bounce_domains.php "bounce_domains"), [relay_domains](conf.ref.relay_domains.php "relay_domains")

| [Prev](conf.ref.never_retry.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.open_relay.php) |
| never_retry  | [Table of Contents](index.php) |  open_relay |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)