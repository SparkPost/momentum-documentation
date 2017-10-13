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