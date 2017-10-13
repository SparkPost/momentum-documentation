<a name="lua.ref.vctx_recipient_list"></a>
## Name

vctx:recipient_list — Return or set the current recipient list

<a name="idp19278912"></a>
## Synopsis

`vctx:recipient_list(addresses);`

`addresses: string, optional`<a name="idp19281856"></a>
## Description

If called with no arguments, this function returns the current recipient list. If passed an `addresses` parameter, this replaces the current recipient list. The parameter may be a single address or a table of addresses.

### Warning

This function should **not** be called in the validate_rcptto phase.

Enable this function with the statement `require('msys.extended.vctx');`.

<a name="idp19286960"></a>
## See Also

[Example 70.69, “vctx_add_recipient example”](lua.ref.vctx_add_recipient.php#lua.ref.vctx_add_recipient.example "Example 70.69. vctx_add_recipient example")

| [Prev](lua.ref.vctx_get.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_remove_recipient.php) |
| vctx:get  | [Table of Contents](index.php) |  vctx:remove_recipient |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)