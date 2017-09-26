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

| msg:context_exists_and_get |
| [Prev](lua.ref.msg_context_exists.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_context_get.php) |

<a name="lua.ref.msg_context_exists_and_get"></a>
## Name

msg:context_exists_and_get — Check if a context variable exists and get it

<a name="idp24319984"></a>
## Synopsis

`msg:context_exists_and_get(type, key);`

```
type: numeric
key: string
```
<a name="idp24322688"></a>
## Description

Check if a context variable exists and get it. Legal values for `type` are:

*   `msys.core.ECMESS_CTX_MESS`

*   `msys.core.ECMESS_CTX_CONN`

`local e, str = msg:context_exists_and_get(msys.core.ECMESS_CTX_MESS, 'key')`

If the context variable `key` was found, `e` will be `1` and `str` will be a string value. If the context variable `key` was not found, `e` will be `0` and `str` will be nil.

This function is similar to msg:context_get(); however, msg:context_get() returns an empty string if the key does not exist. msg:context_exists_and_get() is more useful in the general case because policy scripts generally take a different path when the key does not exist and in those cases a default of empty string is not helpful.

The return value of this function should always be compared explicitly. For example:

```
local e, str = msg:context_exists_and_get(msys.core.ECMESS_CTX_MESS, 'key')
if e == 1 then
  -- do something here that depends on the key existing
end
```

Note that Lua treats the numeric value `0` as true, which can be confusing.

Because this function is in the `msys.core` namespace, an explicit `require('msys.core')` is not necessary.

<a name="idp24336464"></a>
## See Also

[msg:context_get](lua.ref.msg_context_get.php "msg:context_get")

| [Prev](lua.ref.msg_context_exists.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_context_get.php) |
| msg:context_exists  | [Table of Contents](index.php) |  msg:context_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)