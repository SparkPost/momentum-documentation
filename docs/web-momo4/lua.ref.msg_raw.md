<a name="lua.ref.msg_raw"></a>
## Name

msg:raw — Set or returns the message content

<a name="idp16900272"></a>
## Synopsis

`msg:raw(value);`

`value: string, optional`<a name="idp16903248"></a>
## Description

If a value is provided, set the content of the message to that value. Otherwise this function returns the full RFC2822 message as a string.

Enable this function with the statement `require('msys.extended.message');`.
