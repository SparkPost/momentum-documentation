<a name="lua.ref.msys.getClassMetaTable"></a>
## Name

msys.getClassMetaTable — Return the metatable for the named class

<a name="idp16128672"></a>
## Synopsis

`msys.getClassMetaTable(classnamestring);`

`classnamestring: string`<a name="idp16131680"></a>
## Description

Returns the metatable for the named class. See [http://www.lua.org/pil/13.html](http://www.lua.org/pil/13.html) for more information about Lua metatables.

Because this function is in the `msys` namespace, an explicit `require('msys')` is not necessary.
