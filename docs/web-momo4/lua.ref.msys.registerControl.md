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

| msys.registerControl |
| [Prev](lua.ref.msys.registerAuth.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.registerModule.php) |

<a name="lua.ref.msys.registerControl"></a>
## Name

msys.registerControl — Register a command with the control channel subsystem

<a name="idp16270944"></a>
## Synopsis

`msys.registerControl(prefix, closure);`

```
prefix: string
closure: string
```
<a name="idp16273936"></a>
## Description

This function registers a command with the control channel subsystem (see [ec_console](executable.ec_console.php "ec_console")). A command prefixed with `prefix` will be dispatched to `closure`. Because this function registers a control. it is not associated with a particular phase or callout.

Enable this function with the statement `require('msys.core');`.

Find below an example of a command that forces email messages into the delayed queue.

<a name="lua.ref.msys.registerControl.example"></a>

**Example 70.33. registerControl example**

```
require("msys.core");

local function delay_domain(cc)
  -- Check the number of parameters
  if cc.argc < 2 then
    print("You must pass a parameter to this command");
    return;
  end
  local domain = cc.argv[1];
  local dr = msys.core.dns_get_domain(domain);
  if dr ~= nil then
    msys.core.mail_queue_delay_domain(dr, "451 4.4.1 [internal] manually delayed domain]");
    print(domain, "added to the delayed queue.");
  end
end

msys.registerControl("delay_domain", delay_domain);
```

### Warning

Be sure to check the number of parameters passed to the registered command. Referencing a non-existent element of the cc.argv array causes a segmentation fault.

This code creates the ec_console command: **delay_domain "*`domain`*"**             . Be sure to use quotation marks around the domain that you wish to delay. Registered control functions can return string responses back to ec_console by using Lua's print() function as shown in [Example 70.33, “registerControl example”](lua.ref.msys.registerControl.php#lua.ref.msys.registerControl.example "Example 70.33. registerControl example").

Because this function is in the `msys` namespace, an explicit `require` is not necessary.

<a name="lua.ref.msys.registerControl.control_construct"></a>

**Command Construct Userdata**

The function that performs the registered action, in [Example 70.33, “registerControl example”](lua.ref.msys.registerControl.php#lua.ref.msys.registerControl.example "Example 70.33. registerControl example"), delay_domain, accepts as a parameter command_construct userdata. `cc.argc` returns the number of arguments supplied by the console command, with the first argument being the command name, so this example will have two arguments. `cc.argv[0]` is the command name and `cc.argv[1]` is the name of the domain that you wish to add to the delayed queue. For more sophisticated argument parsing use `require("msys.getopt");`. For more information examine the `getopt.lua` file found in the `/opt/msys/ecelerity/libexec/scriptlets/msys` directory.

<a name="idp16291632"></a>
## See Also

[msys.core.dns_get_domain](lua.ref.msys.core.dns_get_domain.php "msys.core.dns_get_domain") and [command_construct](https://support.messagesystems.com/docs/web-c-api/structs.command_construct.php)

| [Prev](lua.ref.msys.registerAuth.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.registerModule.php) |
| msys.registerAuth  | [Table of Contents](index.php) |  msys.registerModule |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)