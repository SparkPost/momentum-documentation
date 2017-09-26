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

| bind_address |
| [Prev](conf.ref.authorization.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.binding.php) |

<a name="conf.ref.bind_address"></a>
## Name

bind_address — source address for outbound connections

## Synopsis

`Bind_Address = "10.0.0.1"`

`Bind_Address = "fe80::a00:1"`

`Bind_Address = "my.local.host.name"`

<a name="idp7551072"></a>
## Description

Configures the source address that Momentum uses for outbound connections. When specified at the global scope, Bind_Address configures the source IP for the `default` binding. When specified in a `Binding` stanza, the source IP for that binding will be configured.

This option must be present in a Binding stanza to dictate which IP address that named binding represents. In version 2.1.1, if omitted from the Binding stanza, the default value of `*` will be used; in version 2.1.1 `Bind_Address` *does not*     fall back to the global value.

However, in versions 2.2 and 3.0, if bind_address is defined in the global scope it *is* the fallback value; the kernel chooses the value only if bind_address is not set in either the binding stanza or the global scope.

The default for this option is `*`, which corresponds to `INADDR_ANY` (or its IPv6 equivalent); the actual address used in that case is determined by the operating system kernel based on the destination address.

### Note

You must restart ecelerity whenever you make a change to a bind_address.

### Warning

If the delivery of a message requires contacting a machine on a private network (on a multi-homed machine) and the bind address specified is a public IP address, the internal address may be considered "unroutable" and all messages destined for that IP address will subsequently be undeliverable.

<a name="idp7561344"></a>
## Scope

bind_address is valid in the global, binding_group and binding scopes.

<a name="idp7563024"></a>
## See Also

[Section 4.6, “MultiVIP© Interfaces”](operations.multivip.php "4.6. MultiVIP© Interfaces")

| [Prev](conf.ref.authorization.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.binding.php) |
| authorization  | [Table of Contents](index.php) |  binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)