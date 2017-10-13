<a name="lua.ref.xml.node_doc"></a>
## Name

node:doc — Return the document object that contains the specified node

<a name="idp19450208"></a>
## Synopsis

`require('xml');`

`node:doc();`

<a name="idp19453168"></a>
## Description

Return the document object that contains the specified node.

<a name="idp19454864"></a>

**Example 70.80. example**

```
local doc = node:doc();
print(doc:tostring());
```

<a name="idp19456512"></a>
### See Also

[doc:tostring](lua.ref.xml.doc_tostring.php "doc:tostring") and [xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml")

| [Prev](lua.ref.xml.node_contents.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.node_name.php) |
| node:contents  | [Table of Contents](index.php) |  node:name |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)