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

| node:tostring |
| [Prev](lua.ref.xml.node_name.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.xml.node_unlink.php) |

<a name="lua.ref.xml.node_tostring"></a>
## Name

node:tostring — Output a node as a string

<a name="idp19481344"></a>
## Synopsis

`require('xml');`

`node:tostring();`

<a name="idp19484304"></a>
## Description

Where `node` is an XML element, this method returns a string representation of the XML source of the node and its children. This same method is also available as a __tostring metamethod, so `node:tostring()` and `tostring(node)` are equivalent.

<a name="lua.ref.xml.node_tostring.example"></a>

**Example 70.82. node:tostring example**

```
local doc = xml.parsexml([[<doc></doc>]]);
local node = doc:root();
local child = node:addchild("item");
child:contents("I am a child node.");
print(child:tostring());
```

In this case the output is as follows:

```
<doc>
 <item>I am a child node.</item>
</doc>
```

### Note

The `print` function will automatically convert a node to string so the use of `child:tostring` in [Example 70.82, “node:tostring example”](lua.ref.xml.node_tostring.php#lua.ref.xml.node_tostring.example "Example 70.82. node:tostring example") is not strictly necessary.

<a name="idp19493120"></a>
### See Also

[xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml")

| [Prev](lua.ref.xml.node_name.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.node_unlink.php) |
| node:name  | [Table of Contents](index.php) |  node:unlink |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)