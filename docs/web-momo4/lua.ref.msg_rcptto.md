| msg:rcptto |
| [Prev](lua.ref.msg_raw_replace.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_routing_domain.php) |

<a name="lua.ref.msg_rcptto"></a>
## Name

msg:rcptto — Sets the 'RCPT TO' email address if one is provided

<a name="idp16937104"></a>
## Synopsis

`msg:rcptto(...);`

`...: string, optional`<a name="idp16940064"></a>
## Description

Sets the 'RCPT TO' email address if one is provided and returns the current or new value.

Enable this function with the statement `require('msys.extended.message');`.

### Note

The function may be used to return the current `RCPT TO` address in any validation phase from `validate_rcptto` and later. However, if you want to **modify** the `RCPT TO` address, you must do this in `validate_data_spool_each_rcpt` or later.

| [Prev](lua.ref.msg_raw_replace.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_routing_domain.php) |
| msg:raw_replace  | [Table of Contents](index.php) |  msg:routing_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)