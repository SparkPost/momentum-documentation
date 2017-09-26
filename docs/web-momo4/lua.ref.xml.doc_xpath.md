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

| doc:xpath |
| [Prev](lua.ref.xml.doc_tostring.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.xml.node_addchild.php) |

<a name="lua.ref.xml.doc_xpath"></a>
## Name

doc:xpath — Perform an XPath query

<a name="idp19374208"></a>
## Synopsis

`require('xml');`

`doc:xpath(query, [contextnode]);`

```
query: string
contextnode: string (optional)
```
<a name="idp19377936"></a>
## Description

This function performs an XPath query and returns an iterator over the resultant set of nodes. You may specify an optional node from the same document to use as context for the XPath query. *Note*: If you include a context node you must enclose it in square brackets.

<a name="lua.ref.xml.doc_xpath.example"></a>

**Example 70.75. doc:xpath example**

```
...
for node in doc:xpath("//item") do
  print(node:name())
end
```

<a name="idp19382416"></a>
### See Also

[xml.parsexml](lua.ref.xml.parsexml.php "xml.parsexml")

| [Prev](lua.ref.xml.doc_tostring.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.xml.node_addchild.php) |
| doc:tostring  | [Table of Contents](index.php) |  node:addchild |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)