<a name="conf.ref.open_relay"></a>
## Name

open_relay — whether the MTA is an open relay or not

## Synopsis

`open_relay = true`

<a name="idp25674064"></a>
## Description

The `relay_hosts` option is valid in the Peer scope but using `open_relay` is more succinct.

```
ESMTP_Listener {
  Peer "10.0.0.0/24" {
    # general options for this netblock here
    # use Open_Relay here instead of Relay_Hosts
    Open_Relay = true
  }
  Listen ":25" {
    Peer "10.0.0.1" {
        # options for 10.0.0.1 here
        SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "AUTH LOGIN" )
    }
  }
}
```
<a name="idp25677536"></a>
## Scope

`open_relay` is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scopes.

<a name="idp25679856"></a>
## See Also

[relay_hosts](conf.ref.relay_hosts.php "relay_hosts")

| [Prev](conf.ref.only_use_best_mx_for_relay_domains.php)  | [Up](config.options.ref.php) |  [Next](config.open_tracking_enabled.php) |
| only_use_best_mx_for_relay_domains  | [Table of Contents](index.php) |  open_tracking_enabled |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)