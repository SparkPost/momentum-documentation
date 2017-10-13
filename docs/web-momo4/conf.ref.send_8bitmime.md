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