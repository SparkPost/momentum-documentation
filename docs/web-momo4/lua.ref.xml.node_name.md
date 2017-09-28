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

| node:name |
| [Prev](lua.ref.xml.node_doc.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.xml.node_tostring.php) |

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