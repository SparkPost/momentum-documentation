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

| msys.counter.inc |
| [Prev](lua.ref.msys.counter.add.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.counter.open.php) |

<a name="lua.ref.msys.counter.inc"></a>
## Name

msys.counter.inc — Increment a counter

<a name="idp26396944"></a>
## Synopsis

`msys.counter.inc(object_or_path);`

`object_or_path: mixed`<a name="idp26399584"></a>
## Description

The first argument is either a path to a counter (for example, `/sites/sit_name/errors`) or a counter object that was returned by `msys.counter.open`. If a string is provided containing the path to a counter that does not exist, the counter is created with STRICT semantics. The counter value is atomically incremented. For performance reasons, use of counter handles is recommended. Find an example below.

<a name="lua.ref.msys.counter.inc.example1"></a>

**Example 15.53. msys.counter.inc example using counter handles**

```
require("msys.core");
require("msys.counter");

local mod = {};
local msys_emails = msys.counter.open("/sites/examples/messagesystems_correspondence");

function mod:validate_mailfrom(str, accept, vctx)
  str = tostring(str);
  if (string.find(str, "@messagesystems.com") != nil) then
    msys.counter.inc(msys_emails);
  end
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("counter", mod);
```

<a name="lua.ref.msys.counter.inc.example2"></a>

**Example 15.54. msys.counter.inc example using counter paths**

```
require("msys.core");
require("msys.counter");

local mod = {};

function mod:validate_mailfrom(str, accept, vctx)
  str = tostring(str);
  if (string.find(str, "@messagesystems.com") != nil) then
    msys.counter.inc("/sites/site_name/messagesystems_correspondence");
  end
return msys.core.VALIDATE_CONT;
end

msys.registerModule("counter", mod);
```

Enable this function with the statement `require('msys.counter');`.

<a name="idp26408832"></a>
## See Also

[msys.counter.open](lua.ref.msys.counter.open.php "msys.counter.open"), [msys.counter.add](lua.ref.msys.counter.add.php "msys.counter.add"), [msys.counter.reset](lua.ref.msys.counter.reset.php "msys.counter.reset"), [msys.counter.unlink](lua.ref.msys.counter.unlink.php "msys.counter.unlink"), [counter](console_commands.counter.php "counter")

| [Prev](lua.ref.msys.counter.add.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.counter.open.php) |
| msys.counter.add  | [Table of Contents](index.php) |  msys.counter.open |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)