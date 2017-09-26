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

| open_relay |
| [Prev](conf.ref.only_use_best_mx_for_relay_domains.php)  | Chapter 72. Configuration Options Reference |  [Next](config.open_tracking_enabled.php) |

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