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

| json.decode |
| [Prev](lua.ref.session_response_status_set_std.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.json.encode.php) |

<a name="lua.ref.json.decode"></a>
## Name

json.decode — Create a JSON object from a JSON string

<a name="idp16495424"></a>
## Synopsis

require('json');

`json.decode(str);`

`str: string`<a name="idp16498832"></a>
## Description

Create a JSON object from a JSON string. On success this function returns a JSON object. On failure the JSON object is nil and an error code and an error message are returned. Use [json.strerror](lua.ref.json.strerror.php "json.strerror") to return a description of JSON error codes. You can also use [json.new](lua.ref.json.new.php "json.new") to create an empty JSON object.

<a name="lua.ref.json.decode.example"></a>

**Example 70.36. json.decode example**

```
obj, code, err = json.decode([[{ "hello": "world" }]]);
if not obj then
 error(err);
end
print(obj.hello); -- { "hello": "world" }
obj.int = 4;
obj.num = 3.5;
print(obj); -- { "hello": "world", "int": 4, "num": 3.500000 }
```

Enable this function with the statement `require("json");`.

You can directly assign a primitive to the field of a JSON object. Lua tables, whether they are objects or arrays, are a different matter; See [json.encode](lua.ref.json.encode.php "json.encode") for more information.

<a name="idp16506848"></a>
## See Also

[json.encode](lua.ref.json.encode.php "json.encode")

| [Prev](lua.ref.session_response_status_set_std.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.json.encode.php) |
| session:response_status_set_std  | [Table of Contents](index.php) |  json.encode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)