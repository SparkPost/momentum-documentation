| msgpart:raw_match |
| [Prev](lua.ref.msgpart_insertBefore.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msgpart_raw_replace.php) |

<a name="lua.ref.msgpart_raw_match"></a>
## Name

msgpart:raw_match — Streaming interface to a PCRE search of the current message part

<a name="idp17154736"></a>
## Synopsis

`msgpart:raw_match(pattern);`

`pattern: string`<a name="idp17157664"></a>
## Description

Streaming interface to a PCRE search of the current message part. If no match is found, `false` is returned.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_insertBefore.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_raw_replace.php) |
| msgpart:insertBefore  | [Table of Contents](index.php) |  msgpart:raw_replace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)