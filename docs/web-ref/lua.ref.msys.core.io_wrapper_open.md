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

| msys.core.io_wrapper_open |
| [Prev](lua.ref.msgpart_unlink.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.cast.php) |

<a name="lua.ref.msys.core.io_wrapper_open"></a>
## Name

msys.core.io_wrapper_open — Open a handle to a resource

<a name="idp24388608"></a>
## Synopsis

`msys.core.io_wrapper_open(filename, options, mode);`

```
filename: string
options: numeric
mode: numeric
```
<a name="idp24390944"></a>
## Description

This function opens a resource and returns a handle to it. For the methods that can be used with this file handle see [The Simple I/O Model](http://www.lua.org/pil/21.1.html).

Valid `options` are the options used with the Linux `open(3)` function such as: `O_RDONLY, O_RDRW, O_BINARY, O_CREAT, O_APPEND, O_WRONLY`. Any combination of these flags is valid.

Mode is an octal number indicating the file mode.

### Warning

Writing to a file is a blocking call; If you are creating text logs or jlog files be sure to execute write calls to files opened using `msys.core.io_wrapper_open` in a separate thread. An example follows.

<a name="lua.ref.msys.core.io_wrapper_open.example"></a>

**Example 15.29. msys.core.io_wrapper_open**

```
...
local FLAGS = msys.core.O_CREAT | msys.core.O_APPEND | msys.core.O_WRONLY;
local text_log_data = "This,Is,A,Test,Line\n";
-- Write to text log file in async thread
msys.runInPool('LUA_TXT_LOGS', function()
  local text_log = msys.core.io_wrapper_open(mod["text_log_file.csv"], FLAGS, 0644);
  if not text_log then
    print("ERROR: could not open text log file");
    return;
  end
  text_log:write(text_log_data, #text_log_data);
  text_log = nil;
  end, true);
```

The code shown in [Example 15.29, “msys.core.io_wrapper_open”](lua.ref.msys.core.io_wrapper_open.php#lua.ref.msys.core.io_wrapper_open.example "Example 15.29. msys.core.io_wrapper_open") assumes that a separate threadpool has been configured in `ecelerity.conf` in the following way:

```
# Thread pool for Lua custom logs
threadpool "LUA_TXT_LOGS" { concurrency = 10 }
```

For more information about threadpools see [threadpool](conf.ref.threadpool.php "threadpool").

**Bitwise Operators**

To make it easier to work with libraries that use bitmasks as part of their API, bitwise logical operators are enabled as detailed below. The bitwise operators first convert their numeric operands to an integer, apply the operator and then generate a standard Lua number result.

*   `a & b` – bitwise AND, uses the __and metatable event (if defined)

*   `a | b` – bitwise OR (__or)

*   `a ^^ b` – bitwise XOR (__xor)

*   `a << 1` – bitwise shift left (__shl)

*   `a >> 1` – bitwise shift right (__shr)

*   `~a` – bitwise negation (__not)

*   `a \ 2` – integer division (__intdiv)

<a name="idp24413264"></a>
## See Also

[msys.runInPool](lua.ref.msys.runinpool.php "msys.runInPool")

| [Prev](lua.ref.msgpart_unlink.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.cast.php) |
| msgpart:unlink  | [Table of Contents](index.php) |  msys.cast |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)