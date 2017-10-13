| msg:text |
| [Prev](lua.ref.msg_routing_domain.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_text1.php) |

<a name="lua.ref.msg_text"></a>
## Name

msg:text — Return the transfer decoded text for the body

<a name="idp16968864"></a>
## Synopsis

`msg:text(...);`

`...: mixed`<a name="idp16971824"></a>
## Description

This function returns the transfer decoded text for the body, in UTF-8\. Only parts that have a 'text' mime type will be included. If there are multiple text parts, they are returned as a table.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msg_routing_domain.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_text1.php) |
| msg:routing_domain  | [Table of Contents](index.php) |  msg:text |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)