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

| msys.counter.read |
| [Prev](lua.ref.msys.counter.open.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.counter.reset.php) |

<a name="lua.ref.msys.counter.read"></a>
## Name

msys.counter.read — Read the specified counter

<a name="idp26442256"></a>
## Synopsis

`msys.counter.read(object_or_path);`

`object_or_path: mixed`<a name="idp26444944"></a>
## Description

Returns the current integer value of the given counter object or path. For example, msys.counter.read("/sites/example/errors") and msys.counter.read(c) are valid (where c was a successful return value of msys.counter.open).

<a name="lua.ref.msys.counter.read.example"></a>

**Example 15.55. msys.counter.read example**

```
require("msys.core");
require("msys.counter");

local mod = {};
local ct = msys.counter.open("/lua/test");

function mod:validate_mailfrom(str, accept, vctx)
  str = tostring(str);
  if (string.find(str, "count@test.example.com") != nil) then
    msys.counter.inc(ct);
  elseif (string.find(str, "blargh@test.example.com") != nil) then
    c = msys.counter.open("/lua/blargh", msys.counter.RELAXED);
    msys.counter.add(c, 1024);
  elseif (string.find(str, "blarghstring@test.example.com") != nil) then
    msys.counter.add("/lua/blargh", 3);
  elseif (string.find(str, "blarghinc@test.example.com") != nil) then
    msys.counter.inc("/lua/blargh");
  elseif (string.find(str, "unlink@test.example.com") != nil) then
    msys.counter.unlink("/lua/blargh");
  elseif (string.find(str, "readname@test.example.com") != nil) then
    c = msys.counter.open("/readname");
    msys.counter.add(c, msys.counter.read("/lua/blargh"));
  elseif (string.find(str, "readcounter@test.example.com") != nil) then
    c = msys.counter.open("/readcounter");
    msys.counter.add(c, msys.counter.read(msys.counter.open("/lua/blargh")));
  elseif (string.find(str, "resetname@test.example.com") != nil) then
    msys.counter.reset("/lua/blargh");
  elseif (string.find(str, "resetcounter@test.example.com") != nil) then
    c = msys.counter.open("/lua/test");
    msys.counter.reset(c);
  end

  return msys.core.VALIDATE_CONT;
end

msys.registerModule("counter", mod);
```

Enable this function with the statement `require('msys.counter');`.

<a name="idp26452928"></a>
## See Also

[msys.counter.open](lua.ref.msys.counter.open.php "msys.counter.open"), [msys.counter.add](lua.ref.msys.counter.add.php "msys.counter.add"), [msys.counter.reset](lua.ref.msys.counter.reset.php "msys.counter.reset"), [msys.counter.unlink](lua.ref.msys.counter.unlink.php "msys.counter.unlink"), [msys.counter.inc](lua.ref.msys.counter.inc.php "msys.counter.inc"), [counter](console_commands.counter.php "counter")

| [Prev](lua.ref.msys.counter.open.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.counter.reset.php) |
| msys.counter.open  | [Table of Contents](index.php) |  msys.counter.reset |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)