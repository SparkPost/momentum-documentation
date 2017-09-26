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

| 2.3. Lua Usage |
| [Prev](modules.messagescope.sieve.php)  | Chapter 2. The messagescope Module |  [Next](messagescope.console.php) |

## 2.3. Lua Usage

Lua wrapper functions provide the same query functionality as the Sieve functions. These functions are:

*   `msys.message_scope.query(list_name, msg, accept, vctx)` – Query the reputation data for current message by name. `list_name` is the name of the list to be queried; `msg` is current message; `accept` is the accept_construct and `vctx` is the validation context.

*   `msys.message_scope.query_static` – This functions returns the same values as `msys.message_scope.query` but the user must provide a list name and an IP address. It will only use arguments that make sense for the particular list type.

These functions return the tuple `status`, `version`, `expiry` and `detail`. `status` is always filled in, and can be either `hit`, `miss`, or `error`. `error` will only be returned when there is an error in querying the information from the system. This can happen, for example, if the list information is taking too long to populate, or if the remote server is unresponsive. `version` is static and references the version of the information. This is currently always `1`. `expiry` is a Unix timestamp in seconds from the epoch signifying when the entry expires. The `detail` entry contains user-defined data that can be set by an advanced user in the UI.

There is also a `msys.message_scope.load` function that loads remediation data in the sys_init phase. This function takes one argument, the file that you wish to load.

<a name="modules.messagescope.lua.examples"></a>

**Example 2.4. msys.message_scope.query and msys.message_scope.query_static examples**

```
require("msys.core")
require("msys.message_scope")

local mod = {}

function mod:validate_data_spool_each_rcpt(msg, accept, vctx)
  local status, version, expiry, detail
  status, version, expiry, detail = msys.message_scope.query("Blacklist", msg, accept, vctx)
  if status == "hit" then
    print ("Blacklist matched")
  else
    print (status)
  end
  status, version, expiry, detail = msys.message_scope.query("Whitelist", msg, accept)
  if status == "hit" then
    print ("Whitelist matched")
  else
    print (status)
  end
  status, version, expiry, detail = msys.message_scope.query("Envelope", msg, accept, vctx)
  if status == "hit" then
    print ("Envelope matched")
  else
    print (status)
  end
  status, version, expiry, detail = msys.message_scope.query("Expiration", msg, accept)
  if status == "miss" then
    print ("Expired didn't return anything as planned for")
  else
    print (status)
  end

  status, version, expiry, detail = msys.message_scope.query_static("Expiration", "127.0.0.2")
  if status == "hit" then
    print ("Second expire is hit")
  else
    print (status)
  end

  status, version, expiry, detail = msys.message_scope.query_static("Blacklist", "127.0.0.1")
  if status == "hit" then
    print ("Blacklist matched static")
  else
    print (status)
  end

  status, version, expiry, detail = msys.message_scope.query_static("Whitelist",
    "127.0.0.1", nil, "test\@test.messagesystems.com")
  if status == "hit" then
    print ("Whitelist matched static")
  else
    print (status)
  end

  status, version, expiry, detail = msys.message_scope.query_static("Envelope", nil,
    "me\@me.com", "test\@test.messagesystems.com")
  if status == "hit" then
    print ("Envelope matched static")
  else
    print (status)
  end

  return msys.core.VALIDATE_CONT
end
msys.registerModule("test_messagescope", mod)
```

| [Prev](modules.messagescope.sieve.php)  | [Up](modules.messagescope.php) |  [Next](messagescope.console.php) |
| 2.2. Sieve Usage  | [Table of Contents](index.php) |  2.4. messagescope Management Using Console Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)