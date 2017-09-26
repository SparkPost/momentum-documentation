Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| node:addchild |
| [Prev](lua.ref.xml.doc_xpath.php)  | 15.2. Lua Functions |  [Next](lua.ref.xml.node_attribute.php) |

<a name="lua.ref.xml.node_addchild"></a>
## Name

node:addchild — Add a child node

<a name="idp28007824"></a>
## Synopsis

`require('xml');`

`node:addchild(value);`

`value: mixed`<a name="idp28011184"></a>
## Description

When the parameter passed to this function is a string, this function creates a node and adds it as a child of the existing node, returning the new node. The parameter passed to this method is the name of the XML tag.

<a name="lua.ref.xml.node_addchild.example"></a>

**Example 15.78. node:addchild example**

```
local doc = xml.parsexml([[<doc></doc>]]);
local node = doc:root();
local child = node:addchild("item");
child:contents("I am a child node.");
print(node:tostring());
```

You can also pass a node object to this function, the return value of [node:children](lua.ref.xml.node_children.php "node:children"), for example. When the parameter is an existing node object, it is added as a child node and the "new" node is the return value of the function.

<a name="idp28016352"></a>
### See Also

[doc:root](lua.ref.xml.doc_root.php "doc:root")

| [Prev](lua.ref.xml.doc_xpath.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.node_attribute.php) |
| doc:xpath  | [Table of Contents](index.php) |  node:attribute |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)