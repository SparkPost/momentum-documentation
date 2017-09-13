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

| send_8bitmime |
| [Prev](conf.ref.security.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.server_max_file_descriptors.php) |

<a name="conf.ref.send_8bitmime"></a>
## Name

send_8bitmime — Enable advertising of 8BITMIME when sending mail

## Synopsis

`send_8bitmime = "no"`

`send_8bitmime = "ifavailable"`

<a name="idp26493968"></a>
## Description

When set to `ifavailable`, if a message to be sent to a remote MTA contains 8-bit data and the remote MTA advertises support for 8BITMIME, then Momentum will add `BODY=8BITMIME` to the MAIL FROM portion of the SMTP conversation. This has the effect of informing the remote MTA that 8-bit data will be forthcoming.

When set to `no`, then Momentum will not add the parameter to the MAIL FROM.

### Note

This option has no effect on whether 7-bit or 8-bit data is actually sent, it only affects whether the remote MTA is informed about 8-bit data. Use the `Transform_8BitMime_Content` to control 7-bit downconversion.

The default value is `no`.

For RFC 1652 compliance you should set `Send_8BitMime` to `ifavailable` and `Transform_8BitMime_Content` to `ifneeded`.

<a name="idp26502656"></a>
## Scope

`send_8bitmime` is valid in the global, binding_group, binding, and domain scopes.

<a name="idp26504960"></a>
## See Also

[transform_8bitmime_content](conf.ref.transform_8bitmime_content.php "transform_8bitmime_content")

| [Prev](conf.ref.security.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.server_max_file_descriptors.php) |
| security  | [Table of Contents](index.php) |  server_max_file_descriptors |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)