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

| transform_8bitmime_content |
| [Prev](conf.ref.transfail_drain_rate.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.umem_reap_interval.php) |

<a name="conf.ref.transform_8bitmime_content"></a>
## Name

transform_8bitmime_content — Enable 8BITMIME downconversion when sending mail

## Synopsis

`transform_8bitmime_content = "no"`

`transform_8bitmime_content = "ifneeded"`

`transform_8bitmime_content = "strict"`

`transform_8bitmime_content = "strip"`

<a name="idp7040048"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.26.

When set to `ifneeded`, if a message to be sent to a remote MTA contains 8-bit data and the remote MTA did not advertise support for 8BITMIME, then Momentum will strip the 8th bit from the data, as per RFC 1652.

When set to `no` (the 2.2 default), then Momentum will send the data as is.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.41.

Set to `strict` for strict compliance with RFC1652\. Do proper Quoted-Printable (QP) encoding of eight bit data, subsequently scanning the re-encoded message for leftover 8 bit characters. If any are found, the message is permanently failed. Setting this option to `strip` strips the high bit from all characters in the body, guaranteeing that the data is transferred as 7-bit content. This mode of operation is contrary to that permitted by RFC1652, and its use is discouraged.

### Note

This option has no effect on whether Momentum informs the remote MTA that 8BITMIME data is going to be sent, it simply downgrades to 7-bits. Use the `Send_8BitMime` to control 8BITMIME notification.

As of version 3.1.6, the default value for this option is `ifneeded`. Prior to this, the default value was `no`.

For RFC 1652 compliance you should set `Send_8BitMime` to `ifavailable` and `Transform_8BitMime_Content` to `ifneeded`.

<a name="idp7055584"></a>
## Scope

Transform_8BitMime_Content is valid in the global, binding_group, binding and domain scopes.

<a name="idp7057280"></a>
## See Also

[send_8bitmime](conf.ref.send_8bitmime.php "send_8bitmime")

| [Prev](conf.ref.transfail_drain_rate.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.umem_reap_interval.php) |
| transfail_drain_rate  | [Table of Contents](index.php) |  umem_reap_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)