| node:contents |
| [Prev](lua.ref.xml.node_children.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.xml.node_doc.php) |

<a name="lua.ref.xml.node_contents"></a>
## Name

node:contents — Get or set a text node

<a name="idp19434240"></a>
## Synopsis

`require('xml');`

`node:contents(text_str);`

`text_str: string (optional)`<a name="idp19437904"></a>
## Description

When a parameter is passed, a text node with the specified value is created. If no string is passed, the value of the text node is returned. To remove text, pass an empty string.

<a name="idp19439728"></a>

**Example 70.79. node:contents example**

```
local node = doc:root();
local child = node:addchild("item");
child:contents("I am a child node.");
```

### Note

In the preceding example, the element node <item>, holds a child text node with the value "I am a child node". `node:contents()` will return the value of the text node of <item>. "I am a child node" is not the value of the <item> element. This is evident if you look at [Example 70.81, “node:name example”](lua.ref.xml.node_name.php#lua.ref.xml.node_name.example "Example 70.81. node:name example")".

<a name="idp19443616"></a>
### See Also

[xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml")

| [Prev](lua.ref.xml.node_children.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.node_doc.php) |
| node:children  | [Table of Contents](index.php) |  node:doc |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)