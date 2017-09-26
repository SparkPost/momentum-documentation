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

| msg:get_envelope2 |
| [Prev](lua.ref.msg_code.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.header.php) |

<a name="lua.ref.msg_get_envelope2"></a>
## Name

msg:get_envelope2 — Get envelope values

<a name="idp15772864"></a>
## Synopsis

`require('msys.extended.message')`

`msg:get_envelope2(flags, localpart_str, domain_str);`

```
number: flags
localpart_str: userdata, ec_string type
domain_str: userdata, ec_string type
```
<a name="idp15776688"></a>
## Description

Return information from the envelope of the message. The value of `flags` determines the source of the information. `flags` may be an OR'ed combination of the following constants:

*   If `flags` includes `msys.core.EC_MSG_ENV_FROM` then the envelope sender will be the source of the information.

*   If `flags` includes `msys.core.EC_MSG_ENV_TO`, then the envelope recipient will be the source of the information.

*   If `msys.core.EC_MSG_ENV_COMPLETE` is contained in `flags`, then the address will be copied into the localpart buffer only, without any protocol decoration (for example, no MAIL FROM:<>CRLF).

### Warning

It is not valid to pass `msys.core.EC_MSG_ENV_FROM | msys.core.EC_MSG_ENV_TO` as a parameter to `flags`.

**Bitwise Operators**

To make it easier to work with libraries that use bitmasks as part of their API, bitwise logical operators are enabled as detailed below. The bitwise operators first convert their numeric operands to an integer, apply the operator and then generate a standard Lua number result.

*   `a & b` – bitwise AND, uses the __and metatable event (if defined)

*   `a | b` – bitwise OR (__or)

*   `a ^^ b` – bitwise XOR (__xor)

*   `a << 1` – bitwise shift left (__shl)

*   `a >> 1` – bitwise shift right (__shr)

*   `~a` – bitwise negation (__not)

*   `a \ 2` – integer division (__intdiv)

You must use the [msys.core.string_new](lua.ref.msys.core.string_new.php "msys.core.string_new") function to create the userdata variables used as the second and third parameters. Upon execution of this function, these variables will contain, respectively, the local part and the domain of the specific message as explained above.

<a name="lua.ref.msg_get_envelope2.example.get"></a>

**Example 70.22. msg:get_envelope2 example**

```
require('msys.core');
require('msys.extended.message');

local mod = {};

function mod:validate_set_binding(msg)
  local from = msg:mailfrom();
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

<a name="idp15804560"></a>
## See Also

[ec_message_get_envelope2](https://support.messagesystems.com/docs/web-c-api/apis.ec_message_get_envelope2.php)

| [Prev](lua.ref.msg_code.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.header.php) |
| msg:code  | [Table of Contents](index.php) |  msg:header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)