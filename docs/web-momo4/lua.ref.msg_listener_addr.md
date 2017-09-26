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

| msg:listener_addr |
| [Prev](lua.ref.header.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msg_reception_peer.php) |

<a name="lua.ref.msg_listener_addr"></a>
## Name

msg:listener_addr — Get the `recv_via` IP and/or PORT.

<a name="idp15849312"></a>
## Synopsis

`require('msys.extended.message')`

`msg:listener_addr(flag);`

`flag: string (optional)`<a name="idp15853040"></a>
## Description

This function returns the IP and/or PORT of the local listener that the message was received on. In particular, it returns the component of the sockaddr, in human-readable form, as indicated by the flag. The value of the flag parameter can be `ip`, `port` or `all`. The default input parameter is `all`. That is, if `flag` is `nil`, then this returns the same string as if `all` was passed as the parameter.

<a name="lua.ref.msg_listener_addr.example"></a>

**Example 70.27. msg:listener_addr example**

```
require("msys.extended.message");

local mod = {};

function mod:validate_data(msg, ac, vctx)
  print(msg:listener_addr('ip'));
    -- "10.1.2.3"
  print(msg:listener_addr('port'));
      -- "25"
  print(msg:listener_addr('all'));
      -- "10.1.2.3:25"
  print(msg:listener_addr()); -- defaults to 'all'
      -- "10.1.2.3:25"
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("myMod", mod);
```

<a name="idp15861216"></a>
## See Also

[msg:reception_peer](lua.ref.msg_reception_peer.php "msg:reception_peer")

| [Prev](lua.ref.header.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_reception_peer.php) |
| msg:header  | [Table of Contents](index.php) |  msg:reception_peer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)