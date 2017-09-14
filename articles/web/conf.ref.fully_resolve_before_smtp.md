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

| fully_resolve_before_smtp |
| [Prev](conf.ref.force_fsync.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.gateway.php) |

<a name="conf.ref.fully_resolve_before_smtp"></a>
## Name

fully_resolve_before_smtp — resolve all MX and A records before attempting delivery

## Synopsis

`fully_resolve_before_smtp = true`

`fully_resolve_before_smtp = false`

<a name="idp5152224"></a>
## Description

Momentum uses an asynchronous DNS architecture that allows delivery to commence as soon as there is a valid A record for any of a given domain's MX records. This can occasionally lead to an initial delivery attempt to an MX that is not the lowest numbered.

If you need to ensure that the highest-priority MX is selected, you can enable this option; it is configurable globally as well as at the `Domain` and `Binding` level, so that you can choose where it is applied; setting this option to `true` will marginally slow down the DNS resolution process, and on aggregate, may affect performance, depending on the quantity of mail and the number of domains to which it is being delivered.

The default value for this option is `true`.

**Configuration Change. ** Prior to Momentum 2.2, the default value was `false`.

When a domain is listed in `relay_domains`, we wait for all MXs to be resolved when opening new connections. `fully_resolve_before_smtp` controls this behavior for domains not listed in `relay_domains`.

<a name="idp5161696"></a>
## Scope

fully_resolve_before_smtp is valid in the binding, binding_group, domain and global scopes.

<a name="idp5163392"></a>
## See Also

[relay_domains](conf.ref.relay_domains.php "relay_domains")

| [Prev](conf.ref.force_fsync.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.gateway.php) |
| force_fsync  | [Table of Contents](index.php) |  gateway |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)