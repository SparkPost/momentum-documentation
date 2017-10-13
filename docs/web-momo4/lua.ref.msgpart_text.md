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
