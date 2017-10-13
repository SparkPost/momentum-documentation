<a name="lua.ref.msgpart_body_replace"></a>
## Name

msgpart:body_replace — Streaming interface to a PCRE replacement of a message body part (minus headers)

<a name="idp17072432"></a>
## Synopsis

`msgpart:body_replace(pattern, replacement);`

```
pattern: string
replacement: string
```
<a name="idp17075392"></a>
## Description

Streaming interface to a PCRE replacement of a message body part (minus headers).

Enable this function with the statement `require('msys.extended.message');`.
