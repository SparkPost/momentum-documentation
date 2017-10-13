<a name="lua.ref.msg_inject"></a>
## Name

msg:inject — Use this function to send mail

<a name="idp16806384"></a>
## Synopsis

`msg:inject(mailfrom, rcptto);`

```
mailfrom: string
rcptto: string
```
<a name="idp16809376"></a>
## Description

Use this function to send mail. `mailfrom` is the address of the sender in the form of "`localpart@domain`". `rcptto` is the address of the recipient in the form of `localpart@domain`. If you want to send this mail to multiple addresses, separate the addresses using a ‘`,`’.

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp16814592"></a>
## See Also

[msg:build](lua.ref.msg_build "msg:build")
