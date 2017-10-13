<a name="lua.ref.msg.id"></a>
## Name

msg.id — Return the human-readable ec_message.id

<a name="idp16619408"></a>
## Synopsis

`msg.id;`

<a name="idp16621648"></a>
## Description

When used in a string context, or explicitly forced into a string via `tostring(msg.id)`, this function returns the human-readable ec_message.id.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16624976"></a>
## See Also

[msg.batch_id](lua.ref.msg.batch_id "msg.batch_id")
