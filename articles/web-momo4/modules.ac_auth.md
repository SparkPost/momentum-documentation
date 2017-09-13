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

| 71.2. ac_auth – Authentication Handler |
| [Prev](modules.php)  | Chapter 71. Modules Reference |  [Next](modules.adaptive.php) |

## 71.2. ac_auth – Authentication Handler

<a class="indexterm" name="idp13900864"></a>

**Configuration Change. ** This feature is available in Momentum 4.2 and later.

The `ac_auth` module provides an auth handler that enables a Lua module to hook into the authentication mechanism, but with the advantage of having access to the validation context.

### 71.2.1. Configuration

`ac_auth` registers the authentication URI scheme "ac_auth", so you can reference it for authentication in ecelerity.conf as shown in the following example:

<a name="example.ac_auth.ref"></a>

**Example 71.1. "ac_auth" in ecelerity.conf**

```
ac_auth {}
Esmtp_Listener {
  SMTP_Extensions = ( "AUTH LOGIN" )
  AuthLoginParameters = [
    uri = "ac_auth://"
    log_authentication = "true"
  ]
}
HTTP_Listener {
  enable_authentication = true
  Log_Requests_to_Paniclog = true
  AuthPlainParameters = [
    uri = "ac_auth://"
    log_authentication = "true"
  ]
}
```

### 71.2.2. Custom Auth Handler

To access the hook from Lua, register a module table that includes a function with the following prototype:

`function mod:ac_auth_perform_auth(username, password, ac, response)`

Note that the response is an ec_string and therefore appears in Lua as an `msys.core:_ec_string`.

The following is a short Lua example to provide a custom auth handler:

<a name="example.ac_auth_lua"></a>

**Example 71.2. Custom Auth Handler**

```
local msys = require 'msys'

local mod = {}

function mod:ac_auth_perform_auth(username, password, ac, response)

  print('mod:ac_auth_perform_auth', username, password, ac.remote_addr)

  if username ~= 'Test User' or password ~= 'test2006' then

    if password == 'testx' then
      local res = '531 Get out of town'
      response:write(res, #res)
    end

    return msys.core.EC_AUTH_FAIL
  end

  return msys.core.EC_AUTH_OK
end

function mod:ac_auth_log_auth_failure(username, ac, response)
  print('auth failure', username, response)
end

msys.registerModule("test_ac_auth", mod)
```

To implement any action, you must load the Lua script that hooks `ac_auth_perform_auth` or `ac_auth_log_auth_failure`; e.g., [Example 71.1, “"ac_auth" in ecelerity.conf”](modules.ac_auth.php#example.ac_auth.ref "Example 71.1. "ac_auth" in ecelerity.conf").

In the `ac_auth_perform_auth` hook, you can access the validate context from Lua as in the following example:

<a name="example.ac_auth.hook"></a>

**Example 71.3. Accessing the Validate Context**

```
local mc, vctx
if ac.protocol == msys.core.P_ESMTP then
  mc = msys.core.accept_construct_get_message_construct(ac)
end
if mc then
  vctx = mc.ctx
end
```

| [Prev](modules.php)  | [Up](modules.php) |  [Next](modules.adaptive.php) |
| Chapter 71. Modules Reference  | [Table of Contents](index.php) |  71.3. adaptive – Adaptive Delivery |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)