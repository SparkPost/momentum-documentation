<a name="lua.ref.xml.node_attribute"></a>
## Name

node:attribute — Set or get the attribute of a node

<a name="idp19404656"></a>
## Synopsis

`require('xml');`

`node:attribute(name, value);`

```
name: string
value: mixed (optional)
```
<a name="idp19408368"></a>
## Description

The attribute function can be used to get or set the attribute of a node. Use `nil` to unset `value`. `node:attr` is a synonym for `node:attribute`.

<a name="lua.ref.xml.node_attribute.example"></a>

**Example 70.77. example**

```
node:attr("name", "newval") -- sets the "name" attribute to "newval"
node:attr("name", nil) -- clears the "name" attribute
print(node:attr("name")) -- prints the value of the "name" attribute
```

<a name="idp19414192"></a>
### See Also

[xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml")
