| json.strerror |
| [Prev](lua.ref.json.new.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg.batch_id.php) |

<a name="lua.ref.json.strerror"></a>
## Name

json.strerror — Return the description of a JSON error code

<a name="idp16567696"></a>
## Synopsis

`require("json");`

`json.strerror(code);`

`code: numeric`<a name="idp16571376"></a>
## Description

This function returns a description of the JSON error code returned when [json.decode](lua.ref.json.decode.php "json.decode") fails.

<a name="lua.ref.json.strerror.example"></a>

**Example 70.39. json.strerror example**

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

<a name="idp16594064"></a>
## See Also

[json.new](lua.ref.json.new.php "json.new")

| [Prev](lua.ref.json.new.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg.batch_id.php) |
| json.new  | [Table of Contents](index.php) |  msg.batch_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)