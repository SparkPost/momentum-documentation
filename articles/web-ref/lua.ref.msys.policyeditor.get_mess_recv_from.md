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

| msys.policyeditor.get_mess_recv_from |
| [Prev](lua.ref.msys.policyeditor.get_mailfrom.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.get_mess_recv_via.php) |

<a name="lua.ref.msys.policyeditor.get_mess_recv_from"></a>
## Name

msys.policyeditor.get_mess_recv_from — Return the IP:port combination from which the message was received

<a name="idp24902896"></a>
## Synopsis

`msys.policyeditor.get_mess_recv_from(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```

**Configuration Change. ** This function is deprecated. Use `local rip = msg:reception_peer('ip')` to get the IP address of the injecting server. For more information see [msg:reception_peer](lua.ref.msg_reception_peer.php "msg:reception_peer").

<a name="idp24908224"></a>
## Description

Return the IP:port combination from which the message was received.

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

There are no defined parameters for `params`.

<a name="idp24912656"></a>
## See Also

[msys.policyeditor.get_mess_recv_via](lua.ref.msys.policyeditor.get_mess_recv_via.php "msys.policyeditor.get_mess_recv_via")

| [Prev](lua.ref.msys.policyeditor.get_mailfrom.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.get_mess_recv_via.php) |
| msys.policyeditor.get_mailfrom  | [Table of Contents](index.php) |  msys.policyeditor.get_mess_recv_via |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)