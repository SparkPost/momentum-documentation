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

| json.strerror |
| [Prev](lua.ref.json.new.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg.batch_id.php) |

<a name="lua.ref.json.strerror"></a>
## Name

json.strerror — Return the description of a JSON error code

<a name="idp25268096"></a>
## Synopsis

`require("json");`

`json.strerror(code);`

`code: numeric`<a name="idp25271456"></a>
## Description

This function returns a description of the JSON error code returned when [json.decode](lua.ref.json.decode.php "json.decode") fails.

<a name="lua.ref.json.strerror.example"></a>

**Example 15.40. json.strerror example**

`str = json.strerror(code);`

The follow constants are defined and can be used to determine the cause of failure in certain JSON operations; you may pass any of these to `json.strerror` to obtain a description:

*   `json.ERROR_DEPTH`

*   `json.ERROR_PARSE_EOF`

*   `json.ERROR_PARSE_UNEXPECTED`

*   `json.ERROR_PARSE_NULL`

*   `json.ERROR_PARSE_BOOLEAN`

*   `json.ERROR_PARSE_NUMBER`

*   `json.ERROR_PARSE_ARRAY`

*   `json.ERROR_PARSE_OBJECT_KEY_NAME`

*   `json.ERROR_PARSE_OBJECT_KEY_SEP`

*   `json.ERROR_PARSE_OBJECT_VALUE_SEP`

*   `json.ERROR_PARSE_STRING`

*   `json.ERROR_PARSE_COMMENT`

<a name="idp25291760"></a>
## See Also

[json.new](lua.ref.json.new.php "json.new")

| [Prev](lua.ref.json.new.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg.batch_id.php) |
| json.new  | [Table of Contents](index.php) |  msg.batch_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)