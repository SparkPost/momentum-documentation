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

| msys.os.statvfs_read |
| [Prev](lua.ref.msys.pcre.split.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.os.statvfs_subscribe.php) |

<a name="lua.ref.msys.os.statvfs_read"></a>
## Name

msys.os.statvfs_read — Request a snapshot of the stream

<a name="idp18289040"></a>
## Synopsis

`require('msys.os');`

`msys.os.statvfs_read(path);`

`path: string`<a name="idp18292736"></a>
## Description

This function provides a "stream" for statvfs updates. This guarantees minimal blocking and it is safe to call this functions from the context of any thread. The developer first requests an ec_statvfs_record_t object by calling `msys.os.statvfs_subscribe`.

Find below an example of requesting a statvfs snapshot stream on `/tmp` updated at least every 10 seconds:

`r = msys.os.statvfs_subscribe("/tmp", 10);`

`msys.os.statvfs_subscribe` is guaranteed to fail only due to failed memory allocation. If interval is `0`, then an implementation-default value is used for the interval length. After a user has subscribed to a snapshot stream associated with a path, they may use `msys.os.statvfs_read` to read the latest available snapshot. If several subscriptions exist for a given path, the smallest requested interval will be used. If a user requests a smaller interval than the default, then the interval update occurs on the previous interval edge.

Find below an example of requesting latest snapshot for `/tmp` and then printing total available kilobytes:

```
st, e = msys.os.statvfs_read(cache[path]);
  if (st == nil) then
    print (e);
  else
    print (st["kilobytes_total"]);
  end
```

If `st` is `nil` then `e` will contain the error message associated with the failure. `st` is userdata of type `ec_statvfs_t` and contains values for the following keys:

*   version

*   kilobytes_available

*   kilobytes_total

*   objects_available

*   objects_total

The following script example provides "subscribe" and "read" commands to ec_console.

<a name="lua.ref.msys.os.statvfs_read.example"></a>

**Example 70.60. msys.os.statvfs_subscribe and msys.os.statvfs_read example**

```
require("msys.core");
  require("msys.os");

  local cache = {};

  local function subscribe(cc)
     -- Check the number of parameters
     if cc.argc < 2 then
       print ("You must pass a parameter to this command");
       return;
     end
     local path = cc.argv[1];

     if cache[path] == nil then
      cache[path] = msys.os.statvfs_subscribe(path, 5);
      if (cache[path] == nil) then
        print ("Memory exhausted.");
      else
        print ("Created subscription for " .. path);
      end
     end
  end

  local function read(cc)
     -- Check the number of parameters
     if cc.argc < 2 then
       print("You must pass a parameter to this command");
       return;
     end
     local path = cc.argv[1];
     local st = nil;

     if cache[path] == nil then
       print ("ERROR: No subscription found.");
     end

     st, e = msys.os.statvfs_read(cache[path]);
     if (st == nil) then
       print (e);
     else
       print ("Version          : " .. st["version"]);
       print ("Available kB     : " .. st["kilobytes_available"]);
       print ("Total kB         : " .. st["kilobytes_total"]);
       print ("Available objects: " .. st["objects_available"]);
       print ("Total objects    : " .. st["objects_total"]);
     end

     return st;
  end

  msys.registerControl("subscribe", subscribe)
  msys.registerControl("read", read)
```

Enable this function with the statement `require('msys.os');`.

<a name="lua.ref.msys.os.statvfs_read.control_construct"></a>

**Command Construct Userdata**

The function that performs the registered action, in the examples above, accepts as a parameter command_construct userdata. `cc.argc` returns the number of arguments supplied by the console command, with the first argument being the command name. `cc.argv[0]` is the command name and `cc.argv[1]` is the command option. For more sophisticated argument parsing use `require("msys.getopt");`. For more information examine the `getopt.lua` file found in the `/opt/msys/ecelerity/libexec/scriptlets/msys` directory.

<a name="idp18319392"></a>
## See Also

[msys.os.statvfs_subscribe](lua.ref.msys.os.statvfs_subscribe.php "msys.os.statvfs_subscribe"), [ec_statvfs](https://support.messagesystems.com/docs/web-c-api/structs.ec_statvfs.php), [command_construct](https://support.messagesystems.com/docs/web-c-api/structs.command_construct.php) and [msys.registerControl](lua.ref.msys.registerControl.php "msys.registerControl")

| [Prev](lua.ref.msys.pcre.split.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.os.statvfs_subscribe.php) |
| msys.pcre.split  | [Table of Contents](index.php) |  msys.os.statvfs_subscribe |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)