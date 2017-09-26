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

| msg:reception_peer |
| [Prev](lua.ref.msg_listener_addr.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_context_delete.php) |

<a name="lua.ref.msg_reception_peer"></a>
## Name

msg:reception_peer — Get the `recv_from` IP and/or PORT.

<a name="idp24264912"></a>
## Synopsis

`require('msys.extended.message')`

`msg:reception_peer(flag);`

`flag: string (optional)`<a name="idp24268320"></a>
## Description

This function returns the IP and/or PORT of the remote injection source. In particular, it returns the component of the sockaddr, in human-readable form, as indicated by the flag. The value of the flag parameter can be `ip`, `port` or `all`. The default input parameter is `all`. That is, if `flag` is `nil`, then this returns the same string as if `all` was passed as the parameter.

<a name="lua.ref.msg_reception_peer.example"></a>

**Example 15.28. msg:reception_peer example**

```
require("msys.extended.message");

local mod = {};

function mod:validate_data(msg, ac, vctx)
  print(msg:reception_peer('ip'));
    -- "10.1.2.3"
  print(msg:reception_peer('port'));
      -- "25"
  print(msg:reception_peer('all'));
      -- "10.1.2.3:25"
  print(msg:reception_peer()); -- defaults to 'all'
      -- "10.1.2.3:25"
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("myMod", mod);
```

<a name="idp24275888"></a>
## See Also

[msg:listener_addr](lua.ref.msg_listener_addr.php "msg:listener_addr")

| [Prev](lua.ref.msg_listener_addr.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_context_delete.php) |
| msg:listener_addr  | [Table of Contents](index.php) |  msg:context_delete |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)