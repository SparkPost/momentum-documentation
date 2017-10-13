<a name="lua.ref.msg_address_header"></a>
## Name

msg:address_header — Returns address components as an array

<a name="idp16631840"></a>
## Synopsis

`msg:address_header(...);`

`...: mixed`<a name="idp16634816"></a>
## Description

Parses each instance of the named header for RFC2822 addresses and returns the component of those addresses as an array.

The ellipsis (...) in the parameter list indicates that this function has any number of arguments.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16638256"></a>
## See Also

[msys.parseRFC2822Addresses](lua.ref.msys.parseRFC2822Addresses.php "msys.parseRFC2822Addresses")

| [Prev](lua.ref.msg.id.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_binding.php) |
| msg.id  | [Table of Contents](index.php) |  msg:binding |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)