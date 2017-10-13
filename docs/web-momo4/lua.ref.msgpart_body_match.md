<a name="lua.ref.msgpart_body_match"></a>
## Name

msgpart:body_match — Streaming interface to a PCRE search of a message body part (minus headers)

<a name="idp17062912"></a>
## Synopsis

`msgpart:body_match(pattern);`

`pattern: string`<a name="idp17065840"></a>
## Description

Streaming interface to a PCRE search of a message body part (minus headers). If no match is found, `false` is returned.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_address_header.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_body_replace.php) |
| msgpart:address_header  | [Table of Contents](index.php) |  msgpart:body_replace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)