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

| routes |
| [Prev](conf.ref.rfc2822.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.rset_timeout.php) |

<a name="conf.ref.routes"></a>
## Name

routes — configure message routing

## Synopsis

`Routes = ( "smtp://1.2.3.4?pref=10&ttl=300&type=mx" )`

`Routes = ( "my.local.smart.host" )`

`Routes = ( "__mx__" )`

`Routes = ( "smtp://my.local.smart.host?pref=1" "__mx__" )`

<a name="idp6446304"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The routes option allows you to specify how you would like mail for a given domain to be routed. If this option is specified at the global scope, all outbound connections will be made according to the route you specified, unless explicitly overridden by another routes option for a given domain.

### Note

When delivering mail via ecstream, do not use the `routes` option. Use the [gateway](conf.ref.gateway.php "gateway") option instead.

At the simplest level, you can implement what other MTAs call "smarthosting" by setting the route to the hostname or IP address of the local mail routing hub. You can specify more than just a single smart host using this configuration option, which allows for a much more flexible routing arrangement.

Each item listed in the routes option is added to the routing table for the domain (or globally, if the routes option is not in a domain). By default, the routes are listed in preferential order, with the first listed item being attempted before any others, unless there is an explicit preference applied to the item. If the query string doesn't specify a preference or type and there is more than one domain or IP address listed, then the first item is used exclusively unless it's unavailable, in which case the second item is used and so on.

Each item can be either a hostname or an IP address to indicate that a given host be added to the routing options. It may also be the literal string `__mx__` which expands to the default set of mail exchanges found in DNS for the domain.

A fourth option is a protocol string of the form "smtp://ip?pref=P&ttl=T&port=O&type=Y" where:

*   `P` is a number indicating the MX preference (lower values having higher priority).

*   `T` is the effective time-to-live for the entry in seconds.

*   `O` is the port number to use for that host. The default port is configured with the `Remote_SMTP_Port` configuration option. See [remote_smtp_port](conf.ref.remote_smtp_port.php "remote_smtp_port").

*   `Y` is the type of lookup. The value may be `mx` or `a`.

When a new connection is opened several factors are considered when deciding which MX to connect to. Momentum never uses a higher preference MX if a lower preference MX is below its connection limit and is considered reachable. If there are several MXs of the same (lowest available) preference, Momentum attempts to open connections to all of them evenly, but when it hits a limit with a specific MX, it will stop opening connections to that MX. Momentum does not try to balance connections proportional to an MX's limit. Also, this does not guarantee that traffic will be equal through all equal preference MXs, since individual MX performance and network performance to each MX will affect how fast messages are able to go out to it. Given these caveats, load balancing can be achieved using a configuration such as the following:

```
Routes = ( 
           "smtp://10.0.11.7?pref=10" "smtp://10.0.11.8?pref=10"
           "smtp://10.0.11.10?pref=10" "smtp://10.0.11.13?pref=10"
           "smtp://10.0.11.56?pref=10"
         )
```
<a name="idp6465712"></a>
## Scope

`routes` is valid in the domain and global scopes.

<a name="idp6467760"></a>
## See Also

[gateway](conf.ref.gateway.php "gateway")

| [Prev](conf.ref.rfc2822.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.rset_timeout.php) |
| RFC2822  | [Table of Contents](index.php) |  rset_timeout |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)