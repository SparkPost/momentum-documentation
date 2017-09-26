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

| 3.6. Lua Usage |
| [Prev](modules.msc_logger.sieve.php)  | Chapter 3. The msc_logger Module |  [Next](msc.postgresql.php) |

## 3.6. Lua Usage

When this module is loaded the `msys.message_scope.gen_thread_id` Lua function is available. This function retrieves the current message id and takes an optional single argument—the message. If the message is not passed in, the current message will be used. If the message is not available, an error is returned.

`msys.message_scope.gen_thread_id` can be used in the `validate_mailfrom` phase and later.

<a name="modules.msc_logger.msys.message_scope.gen_thread_id.example"></a>

**Example 3.4. msys.message_scope.gen_thread_id example**

```
require("msys.core")
require("msys.message_scope")
require("msys.extended.message")

local mod = {}

function mod:validate_mailfrom(str, accept, vctx)
  local rc, err = pcall(function() return msys.message_scope.gen_thread_id() end)
  print("validate_mailfrom:gen_thread_id() returns: ", err)
  if rc == true then
    vctx:set_code(550, "gen_thread_id() should error out")
    return msys.core.VALIDATE_DONE
  end
  return msys.core.VALIDATE_CONT
end
msys.registerModule("test_gen_thread_id", mod)
```

| [Prev](modules.msc_logger.sieve.php)  | [Up](modules.msc_logger.php) |  [Next](msc.postgresql.php) |
| 3.5. Sieve Usage  | [Table of Contents](index.php) |  Chapter 4. Message Scope and PostgreSQL |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)