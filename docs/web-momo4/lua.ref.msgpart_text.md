| msgpart:text |
| [Prev](lua.ref.msgpart_text2.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msgpart_text_match.php) |

<a name="lua.ref.msgpart_text"></a>
## Name

msgpart:text — Returns the transfer decoded text for the message part, in UTF-8

<a name="idp17188736"></a>
## Synopsis

`msgpart:text(...);`

`...: mixed`<a name="idp17191696"></a>
## Description

Returns the transfer decoded text for the message part, in UTF-8\. The ellipsis (...) indicates that this function accepts any number of arguments.

### Note

This function does not always return a string. It can return `nil` on message parts where there is no body content.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_text2.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_text_match.php) |
| msgpart:text  | [Table of Contents](index.php) |  msgpart:text_match |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)