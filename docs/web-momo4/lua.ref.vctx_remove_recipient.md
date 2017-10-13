<a name="lua.ref.vctx_remove_recipient"></a>
## Name

vctx:remove_recipient — Remove an address from the recipient list

<a name="idp19292560"></a>
## Synopsis

`vctx:remove_recipient(address);`

`address: string`<a name="idp19295488"></a>
## Description

Removes an address (which may be a table representing multiple addresses) from the recipient list. If used in an invalid phase (after rcptlist final), this function raises an error.

Enable this function with the statement `require('msys.extended.vctx');`.

| [Prev](lua.ref.vctx_recipient_list.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.vctx_set.php) |
| vctx:recipient_list  | [Table of Contents](index.php) |  vctx:set |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)