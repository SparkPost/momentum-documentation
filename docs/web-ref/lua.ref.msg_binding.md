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

| msg:binding |
| [Prev](lua.ref.msg_address_header.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_binding_group.php) |

<a name="lua.ref.msg_binding"></a>
## Name

msg:binding — Set or get the message binding

<a name="idp25337872"></a>
## Synopsis

`msg:binding(...);`

`...: mixed, optional`<a name="idp25340544"></a>
## Description

Set the binding to the specified parameter. When you set a binding, the binding name is also the return value of this function. This function returns `nil` if the binding parameter is invalid. The binding you set must exist in your `ecelerity.conf` file. When no parameter is passed, this function returns the binding name or `nil` if the message is not associated with a binding. *This will only take a single string binding name* .

You can use this function to set the binding to the `default` binding. For more information see [the section called “The "default" Binding”](conf.ref.binding.php#conf.ref.binding.default "The "default" Binding").

### Warning

Only use this function in the `validate_set_binding` callout. Its behavior in other callouts is undefined.

<a name="lua.ref.msg_binding.example"></a>

**Example 15.42. msg:binding example**

```
require('msys.core');
require('msys.extended.message');

local mod = {};

function mod:validate_set_binding(msg)
  local localpart_str = msys.core.string_new();
  local domain_str = msys.core.string_new();
  msg:get_envelope2(msys.core.EC_MSG_ENV_FROM, localpart_str, domain_str);
  local domain = tostring(domain_str);
  localpart_str = nil;
  if msys.pcre.match(domain, "mydomain.com") then
    msg:binding("mydomain");
  end
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("validate_set_binding", mod);
```

Enable this function with the statement `require('msys.extended.message');`.

<a name="idp25350496"></a>
## See Also

[msg:binding_group](lua.ref.msg_binding_group.php "msg:binding_group")

| [Prev](lua.ref.msg_address_header.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_binding_group.php) |
| msg:address_header  | [Table of Contents](index.php) |  msg:binding_group |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)