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

| xml.parsexml |
| [Prev](lua.ref.xml.node_unlink.php)  | Chapter 70. Lua Functions Reference |  [Next](modules.php) |

<a name="lua.ref.xml.parsexml"></a>
## Name

xml.parsexml — Create an XML document object

<a name="idp19512736"></a>
## Synopsis

`require('xml');`

`xml.parsexml(strxml, keep_blanks);`

```
strxml: string
keep_blanks: numeric (optional)
```
<a name="idp19516464"></a>
## Description

This function parses an XML string and returns an XML document object. The second argument, `keep_blanks` is an optional integer value. When not set or set to `0`, ignorable white spaces will be ignored, otherwise, text nodes containing those blanks will be generated in the Document Object Model (DOM) output.

<a name="lua.ref.xml.parsexml.example"></a>

**Example 70.84. xml.parsexml example**

```
local doc = xml.parsexml([[<doc></doc>]]);
local node = doc:root();
local child = node:addchild("item")
```

<a name="idp19521504"></a>
### See Also

[doc:root](lua.ref.xml.doc_root.php "doc:root")

| [Prev](lua.ref.xml.node_unlink.php)  | [Up](lua.function.details.php) |  [Next](modules.php) |
| node:unlink  | [Table of Contents](index.php) |  Chapter 71. Modules Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)