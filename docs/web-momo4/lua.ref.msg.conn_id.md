<a name="lua.ref.msg.conn_id"></a>
## Name

msg.conn_id — Return the human-readable ec_message.conn_id

<a name="idp16610752"></a>
## Synopsis

`msg.conn_id;`

<a name="idp16612992"></a>
## Description

When used in a string context, or explicitly forced into a string via `tostring(msg.conn_id)`, this function returns the human-readable ec_message.conn_id.

Enable this function with the statement `require('msys.extended.message');`.
