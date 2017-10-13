<a name="lua.ref.msgpart_text_match"></a>
## Name

msgpart:text_match — Streaming a PCRE search across the transfer decoded UTF-8 text version of the message body part

<a name="idp17200688"></a>
## Synopsis

`msgpart:text_match(pattern);`

`pattern: string`<a name="idp17203616"></a>
## Description

Streaming a PCRE search across the transfer decoded UTF-8 text version of the message body part. If no match is found, `false` is returned.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_text.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_text_replace.php) |
| msgpart:text  | [Table of Contents](index.php) |  msgpart:text_replace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)