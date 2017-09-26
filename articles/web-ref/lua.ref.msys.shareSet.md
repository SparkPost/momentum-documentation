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

| msys.shareSet |
| [Prev](lua.ref.msys.shareGet.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.shareUnset.php) |

<a name="lua.ref.msys.shareSet"></a>
## Name

msys.shareSet — Associate a value with a keystring in the global share space

<a name="idp24744992"></a>
## Synopsis

`msys.shareSet(keystring, value);`

```
keystring: string
value: string
```
<a name="idp24747696"></a>
## Description

This function associates a value with `keystring` in the global share space. This association is thread-safe and consistent across all Lua interpreters and co-routines. The act of setting the value is thread safe and does not require an explicit mutex, but it is recommended that you use a mutex to coordinate modification of the value. `value` may be a number, string, boolean or nil value.

### Note

This function has been made obsolete by the data sharing features introduced in version 3.2\. For more information see [msys.runInPool](lua.ref.msys.runinpool.php "msys.runInPool").

<a name="lua.ref.msys.shareSet.example"></a>

**Example 15.34. shareSet example**

```
...
 incrementing a counter in a thread safe manner
msys.lock("counter-example");
local c= msys.shareGet("my-counter");
if c == nil then
  c = 0;
end
msys.shareSet("my-counter", c + 1);
msys.unlock("counter-example");
```

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

<a name="idp24755904"></a>
## See Also

[msys.shareGet](lua.ref.msys.shareGet.php "msys.shareGet"), [msys.shareUnset](lua.ref.msys.shareUnset.php "msys.shareUnset")

| [Prev](lua.ref.msys.shareGet.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.shareUnset.php) |
| msys.shareGet  | [Table of Contents](index.php) |  msys.shareUnset |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)