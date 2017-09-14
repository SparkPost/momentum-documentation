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

| config |
| [Prev](console_commands.cache_stats.php)  | 12.2. System Console Commands |  [Next](console_commands.count.php) |

<a name="console_commands.config"></a>
## Name

config — online configuration tuning for Momentum

## Synopsis

`config` { get | eval | unset } [ *`scope_name`* ...] { *`optname`* }

`config` set [ *`scope_name`* ...] { *`optname`* } { *`value`* }

<a name="console_commands.config.original"></a>
## Description

The first form of the **config** command takes a `get`, `eval` or `unset` mode, zero or more scope specifiers and an option name as arguments. It gets, evaluates or clears the value of the specified option in the specified scope, depending on the command given.

When getting or setting or evalling an option, the scope may be a named scope or an anonymous scope. The following examples illustrate this:

```
10:47:35 /tmp/2025> config set ESMTP_Listener Pathway foo
10:47:35 /tmp/2025> config set ESMTP_Listener Peer 127.0.0.1 Pathway foo
```

In these examples `ESMTP_Listener` is an anonymous scope name, `Peer` is a named scope where `127.0.0.1` is its instance name. Note that you're allowed to have named scopes inside anonymous scopes (as in the second example) or anonymous scopes inside named scopes. It is also legal to have an optional equals sign between the option name and the assigned value; this facilitates copying and pasting from the `ecelerity.conf` file onto the console. When setting options to values that contain characters such as ‘`#`’ you must use quotation marks. For more information see [Section 2.1, “The `ecelerity.conf` File”](conf.ecelerity.conf.php "2.1. The ecelerity.conf File").

Both `get` and `eval` display the current value of an option, the difference being that `eval` will fall back to more generic scopes (and eventually to the option's default value). On the other hand, `get` only looks in the scope specified so if an option is not specified within that scope, no value is returned. For example, if `blackhole` is not set in your configuration file, the following output shows how the result of using `get` or `eval` differs:

```
10:47:35 /tmp/2025> config get blackhole
Option 'Blackhole' is not set in scope ''.
10:47:35 /tmp/2025> config eval blackhole
Blackhole = 0
```

### Note

In ecelerity 2.1, `get` behaved like `eval` and there was no `eval`.

Using `unset`, the value of the specified option in the specified scope is cleared; when evaluating the value, an unset option will cause the evaluation to fall back to a more generic scope, or the option's default value. Thus, unsetting an option is not the same as setting it to 0, an empty string, or that option's default value.

The second form of the **config** command takes `set` as the mode, zero or more scope specifiers, an option name and an option value as arguments. It sets a new value for the specified option in the specified scope. The format of values is the same as in [ecelerity.conf](ecelerity.conf.php "ecelerity.conf").

The third form of the **config** command takes `unset` as the mode and one or more scope specifiers and an option name as arguments. When this command is used without specifying an option, *it unsets all the options in the scope and that scope's subscopes, so use it carefully* . To prevent completely deconfiguring a running server by accident, unsetting the global scope is not supported.

<a name="idp9456000"></a>
### Using The config Command

Suppose you have the following part in your `ecelerity.conf` file:

```
Message_Expiration = 86400

Domain earthlink.net {
  Message_Expiration = 900
}

Binding smtp-01 {
  EHLO_Hostname = "smtp-01.com"
  Domain relay.com {
    EHLO_Hostname = "relay.com"
  }
}
```

Here are some examples using the commands with outputs:

```
10:47:35 /tmp/2025> config get message_expiration
Message_Expiration = 86400

10:47:35 /tmp/2025> config get domain earthlink.net message_expiration
        Message_Expiration = 900

10:47:35 /tmp/2025> config unset domain earthlink.net message_expiration
"Message_Expiration" has been unset. Effective value is now:
        Message_Expiration = 86400

10:47:35 /tmp/2025> config get binding smtp-01 ehlo_hostname
        EHLO_Hostname = "smtp-01.com"

10:47:35 /tmp/2025> config get binding smtp-01 domain relay.com ehlo_hostname
        EHLO_Hostname = "relay.com"

10:47:35 /tmp/2025> config unset binding smtp-01 domain relay.com ehlo_hostname
"EHLO_Hostname" has been unset. Effective value is now:
        EHLO_Hostname = "smtp-01.com"

10:47:35 /tmp/2025> config set Relay_Hosts ( 10.0.0.1 10.0.0.2 )
Relay_Hosts = (
  10.0.0.1
  10.0.0.2
  )
```
<a name="console_commands.config.options"></a>
### Options Supported with config

The following are some specific options supported in the global scope. Other supported options can be found in the list of common options.

*   [allow_ip_literal](conf.ref.allow_ip_literal.php "allow_ip_literal")

*   [allow_null_envelope_sender](conf.ref.allow_null_envelope_sender.php "allow_null_envelope_sender")

*   [async_close_concurrency](conf.ref.async_close_concurrency.php "async_close_concurrency")

*   [async_swap_in](conf.ref.async_swap_in.php "async_swap_in")

*   [async_swap_out](conf.ref.async_swap_out.php "async_swap_out")

*   [async_unlink_concurrency](conf.ref.async_unlink_concurrency.php "async_unlink_concurrency")

*   [bind_address](conf.ref.bind_address.php "bind_address")

*   [bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior")

*   [bounce_pattern](conf.ref.bounce_pattern.php "bounce_pattern")

*   [bounce_suppress_list](conf.ref.bounce_suppress_list.php "bounce_suppress_list")

*   [crypto_lock_method](conf.ref.crypto_lock_method.php "crypto_lock_method")

*   [disk_queue_drain_rate](conf.ref.disk_queue_drain_rate.php "disk_queue_drain_rate")

*   [default_binding](conf.ref.default_binding.php "default_binding")

*   [dns_expire_interval](conf.ref.dns_expire_interval.php "dns_expire_interval")

*   [force_fsync](conf.ref.force_fsync.php "force_fsync")

*   [generate_bounces_for_multi_recipient_policy_rejections](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php "generate_bounces_for_multi_recipient_policy_rejections")

*   [host_failure_retry](conf.ref.host_failure_retry.php "host_failure_retry")

*   [hostname](conf.ref.hostname.php "hostname")

*   [inbound_throttle_messages](conf.ref.inbound_throttle_messages.php "inbound_throttle_messages")

*   [license](conf.ref.license.php "license")

*   [malloc2mmap_threshold](conf.ref.malloc2mmap_threshold.php "malloc2mmap_threshold")

*   [masterdb_file](conf.ref.masterdb_file.php "masterdb_file")

*   [min_dns_ttl](conf.ref.min_dns_ttl.php "min_dns_ttl")

*   [pidfile](conf.ref.pidfile.php "pidfile")

*   [require_ehlo](conf.ref.require_ehlo.php "require_ehlo")

*   [resolv_conf](conf.ref.resolv_conf.php "resolv_conf")

*   [scheduler](conf.ref.scheduler.php "scheduler")

*   [server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections")

*   [server_reserve_outbound_connections](conf.ref.server_reserve_outbound_connections.php "server_reserve_outbound_connections")

*   [spool_mode](conf.ref.spool_mode.php "spool_mode")

*   [spoolbase](conf.ref.spoolbase.php "spoolbase")

*   [tcp_buffer_size](conf.ref.tcp_buffer_size.php "tcp_buffer_size")

*   [_unsafe_spool](conf.ref.unsafe_spool.php "_unsafe_spool")

*   [Use_MMAP](conf.ref.use_mmap.php "Use_MMAP")

The following are some specific options supported in a binding scope. Other supported options can be found in the list of common options.

*   [bind_address](conf.ref.bind_address.php "bind_address")

*   [match_domain](conf.ref.match_domain.php "match_domain")

*   [server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections")

The following are some specific options supported in a domain scope. Other supported options can be found in the list of common options.

*   [bounce_behavior](conf.ref.bounce_behavior.php "bounce_behavior")

*   [bounce_pattern](conf.ref.bounce_pattern.php "bounce_pattern")

*   [host_failure_retry](conf.ref.host_failure_retry.php "host_failure_retry")

The list of common options:

*   [blackhole](conf.ref.blackhole.php "blackhole")

*   [body_timeout](conf.ref.body_timeout.php "body_timeout")

*   [bounces_inline_original](conf.ref.bounces_inline_original.php "bounces_inline_original")

*   [connect_timeout](conf.ref.connect_timeout.php "connect_timeout")

*   [connect_timeout_to_delay](conf.ref.connect_timeout_to_delay.php "connect_timeout_to_delay")

*   [connection_allocation_aggressiveness](conf.ref.connection_allocation_aggressiveness.php "connection_allocation_aggressiveness")

*   [delivery_method](conf.ref.delivery_method.php "delivery_method")

*   [drop_body_after_trans_fail](conf.ref.drop_body_after_trans_fail.php "drop_body_after_trans_fail")

*   [ehlo_hostname](conf.ref.ehlo_hostname.php "ehlo_hostname")

*   [ehlo_timeout](conf.ref.ehlo_timeout.php "ehlo_timeout")

*   [fully_resolve_before_smtp](conf.ref.fully_resolve_before_smtp.php "fully_resolve_before_smtp")

*   [gateway](conf.ref.gateway.php "gateway")

*   [generate_bounces](conf.ref.generate_bounces.php "generate_bounces")

*   [idle_timeout](conf.ref.idle_timeout.php "idle_timeout")

*   [lmtp_port](conf.ref.lmtp_port.php "lmtp_port")

*   [mailerdaemon](conf.ref.mailerdaemon.php "mailerdaemon")

*   [mailfrom_timeout](conf.ref.mailfrom_timeout.php "mailfrom_timeout")

*   [max_deliveries_per_connection](conf.ref.max_deliveries_per_connection.php "max_deliveries_per_connection")

*   [max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections")

*   [max_resident_active_queue](conf.ref.max_resident_active_queue.php "max_resident_active_queue")

*   [max_retries](conf.ref.max_retries.php "max_retries")

*   [mdn_failures_notify](conf.ref.mdn_failures_notify.php "mdn_failures_notify")

*   [message_expiration](conf.ref.message_expiration.php "message_expiration")

*   [mx_failures_to_delay](conf.ref.mx_failures_to_delay.php "mx_failures_to_delay")

*   [outbound_throttle_connections](conf.ref.outbound_throttle_connections.php "outbound_throttle_connections")

*   [outbound_throttle_messages](conf.ref.outbound_throttle_messages.php "outbound_throttle_messages")

*   [rcptto_timeout](conf.ref.rcptto_timeout.php "rcptto_timeout")

*   [remote_smtp_port](conf.ref.remote_smtp_port.php "remote_smtp_port")

*   [retry_interval](conf.ref.retry_interval.php "retry_interval")

*   [rset_timeout](conf.ref.rset_timeout.php "rset_timeout")

*   [suspend_delivery](conf.ref.suspend_delivery.php "suspend_delivery")

*   [tls](conf.ref.tls.php "tls")

*   [tls_ca](conf.ref.tls_ca.php "tls_ca")

*   [tls_certificate](conf.ref.tls_certificate.php "tls_certificate")

*   [tls_ciphers](conf.ref.tls_ciphers.php "tls_ciphers")

*   [tls_key](conf.ref.tls_key.php "tls_key")

*   [xclient](conf.ref.xclient.php "xclient")

| [Prev](console_commands.cache_stats.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.count.php) |
| cache stats  | [Table of Contents](index.php) |  count |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)