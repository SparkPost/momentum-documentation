<a name="lua.ref.xml.doc_root"></a>
## Name

doc:root — Return the root node of an XML document

<a name="idp19340880"></a>
## Synopsis

`require('xml');`

`doc:root();`

<a name="idp19343840"></a>
## Description

Where `doc` is an XML object created using `xml.parsexml`, return the root node.

<a name="lua.ref.xml.doc_root.example"></a>

**Example 70.73. doc:root example**

```
local doc = xml.parsexml([[<doc></doc>]]);
local node = doc:root();
local child = node:addchild("item");
child:contents("I am a child node.");
print(node:tostring());
```

<a name="idp19348848"></a>
## See Also

[xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml")

| [Prev](lua.ref.vctx_tarpit.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.doc_tostring.php) |
| vctx:tarpit  | [Table of Contents](index.php) |  doc:tostring |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)