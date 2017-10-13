<a name="lua.ref.xml.node_name"></a>
## Name

node:name — Return the name of a node

<a name="idp19463648"></a>
## Synopsis

`require('xml');`

`node:name();`

<a name="idp19466608"></a>
## Description

This function returns the element name of a node and returns the string "text" for text nodes.

<a name="lua.ref.xml.node_name.example"></a>

**Example 70.81. node:name example**

```
doc = xml.parsexml([[<doc></doc>]]);
local node = doc:root();
local child = node:addchild("item");
child:attr("name", "Junior");
child:contents("I am a child node.");
node:children();
for kid in child:children() do
  print(kid:name());
end
```

The code shown in [Example 70.81, “node:name example”](lua.ref.xml.node_name.php#lua.ref.xml.node_name.example "Example 70.81. node:name example") results in the following output:

```
item
text
```

If you remove the line, `child:contents("I am a child node.");`, from [Example 70.81, “node:name example”](lua.ref.xml.node_name.php#lua.ref.xml.node_name.example "Example 70.81. node:name example"), `item` is all that will be output.

<a name="idp19474144"></a>
### See Also

[xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml") and [node:contents](lua.ref.xml.node_contents.php "node:contents")

| [Prev](lua.ref.xml.node_doc.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.node_tostring.php) |
| node:doc  | [Table of Contents](index.php) |  node:tostring |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)