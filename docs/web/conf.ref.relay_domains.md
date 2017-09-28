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

| relay_domains |
| [Prev](conf.ref.rcptto_timeout.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.relay_hosts.php) |

<a name="conf.ref.relay_domains"></a>
## Name

relay_domains — configure the list of domains for which Momentum relays mail

## Synopsis

`Relay_Domains = ( "*.example.com" "example.net" )`

<a name="idp6256368"></a>
## Description

When Momentum is configured as an inbound mail relay or gateway, it is necessary to specify for which domains you are willing to accept mail. Accepting mail from anyone for any destination would make you an open relay and vulnerable to abuse.

With the `Relay_Domains` option, you may specify a list of domains and left-globbed domains for which the instance will relay mail (accept for delivery). Left-globbed domains are of the form `*fixed.ending`. `*.example.com` would **not** match example.com (as the dot is required), but would match test.example.com, mail.example.com, foo.example.com, etc. `*example.com` would match example.com. However, it would also match badexample.com, which is usually undesirable, so in most cases the asterisk should be followed by a period.

If a domain is specified as a relay domain any incoming message that has its `envelope to` set to that domain, will be relayed. This setting works independently of the `relay_hosts` setting.

To accept mail for the domain example.com and all subdomains under it, one would specify:

`Relay_Domains = ( example.com *.example.com )`<a name="idp6264288"></a>
## Scope

`Relay_Domains` is valid in the global scope.

<a name="idp6266752"></a>
## See Also

[relay_hosts](conf.ref.relay_hosts.php "relay_hosts"), [only_use_best_mx_for_relay_domains](conf.ref.only_use_best_mx_for_relay_domains.php "only_use_best_mx_for_relay_domains")

| [Prev](conf.ref.rcptto_timeout.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.relay_hosts.php) |
| rcptto_timeout  | [Table of Contents](index.php) |  relay_hosts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)