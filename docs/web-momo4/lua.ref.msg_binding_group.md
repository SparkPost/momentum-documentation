<a name="lua.ref.msg_binding_group"></a>
## Name

msg:binding_group — Sets the binding_group to the named binding, if one is provided.

<a name="idp16665488"></a>
## Synopsis

`msg:binding_group(value);`

`value: string, optional`<a name="idp16668432"></a>
## Description

Sets the binding to one in the named binding_group, if one is provided. Returns the current or new value for the binding_group.

If the [adaptive module](modules.adaptive.php "71.3. adaptive – Adaptive Delivery") is enabled the logic for choosing a binding is as follows:

1.  An unsuspended binding local to the MTA

2.  A non-local unsuspended binding

3.  If all bindings are suspended, a local binding is randomly chosen

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16675856"></a>
## See Also

[msg:binding](lua.ref.msg_binding.php "msg:binding")

| [Prev](lua.ref.msg_binding.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_body.php) |
| msg:binding  | [Table of Contents](index.php) |  msg:body |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)