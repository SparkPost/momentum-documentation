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
