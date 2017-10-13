<a name="lua.ref.xml.node_children"></a>
## Name

node:children — Return an iterator of all child nodes

<a name="idp19420768"></a>
## Synopsis

`require('xml');`

`node:children();`

<a name="idp19423728"></a>
## Description

Return an iterator of all child nodes of the specified node. Any text nodes are also included.

<a name="lua.ref.xml.node_children.example"></a>

**Example 70.78. example**

```
for child in node:children() do
  print(child:name());
end
```

<a name="idp19427632"></a>
### See Also

[xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml")

| [Prev](lua.ref.xml.node_attribute.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.node_contents.php) |
| node:attribute  | [Table of Contents](index.php) |  node:contents |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)