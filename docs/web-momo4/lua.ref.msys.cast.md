<a name="lua.ref.msys.cast"></a>
## Name

msys.cast — Cast an object to the specified class

<a name="idp16043696"></a>
## Synopsis

`msys.cast(object, classnamestring);`

```
object: mixed
classnamestring: string
```
<a name="idp16046688"></a>
## Description

Forces object to be re-interpreted as the specified class. This is provided primarily to map `void` object proxies to the correct underlying class type. This will result in crashes if the cast is used incorrectly; use with caution.

Because this function is in the `msys` namespace, an explicit `require` is not necessary.
