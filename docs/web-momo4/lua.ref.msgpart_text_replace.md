<a name="lua.ref.msgpart_text_replace"></a>
## Name

msgpart:text_replace — Streaming interface to a PCRE replacement of textual content from the message body parts

<a name="idp17211568"></a>
## Synopsis

`msgpart:text_replace(pattern, replacement);`

```
pattern: string
replacement: string
```
<a name="idp17214528"></a>
## Description

Streaming interface to PCRE replacement of textual content from the message body parts. Only parts that have a 'text' mime type will be included in the search.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_text_match.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.asyncOk.php) |
| msgpart:text_match  | [Table of Contents](index.php) |  msys.asyncOk |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)