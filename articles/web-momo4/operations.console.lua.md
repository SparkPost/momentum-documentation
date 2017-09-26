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

| 37.5. Creating Custom Console Commands |
| [Prev](modules.options.console.php)  | Chapter 37. Using the System Console (**ec_console**) |  [Next](cluster.config.operations.php) |

## 37.5. Creating Custom Console Commands

In addition to the built-in console commands, you can create your own commands using the Lua function [msys.registerControl](lua.ref.msys.registerControl.php "msys.registerControl"). If, for example, you have domains that are heavily throttled and discard messages that are over the limit, you can create a console command to push emails for these domains into the delayed queue:

<a name="operations.console.lua.registerControl"></a>

**Example 37.1. Create console command**

```
require("msys.core");

local function delay_domain(cc)
  local domain = cc.argv[1];
  local dr = msys.core.dns_get_domain(domain);

  if dr ~= nil then
    print ("Domain delayed as requested");
    msys.core.mail_queue_delay_domain(dr, "451 4.4.1 [internal] manually delayed domain");
  end
end

msys.registerControl("delay_domain", delay_domain);
```

This code creates the ec_console command: **delay_domain *`domain`***           .

| [Prev](modules.options.console.php)  | [Up](operations.php) |  [Next](cluster.config.operations.php) |
| 37.4. Setting and Getting Module Options from the Console  | [Table of Contents](index.php) |  Chapter 38. Using the Cluster Manager (**eccmgr**) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)