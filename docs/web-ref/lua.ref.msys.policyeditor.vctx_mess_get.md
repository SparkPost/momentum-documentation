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

| msys.policyeditor.vctx_mess_get |
| [Prev](lua.ref.msys.policyeditor.vctx_mess_set.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.vctx_conn_set.php) |

<a name="lua.ref.msys.policyeditor.vctx_mess_get"></a>
## Name

msys.policyeditor.vctx_mess_get — Return a message validation context value

<a name="idp25124560"></a>
## Synopsis

`msys.policyeditor.vctx_mess_get(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```

**Configuration Change. ** This function is deprecated. Use `local value = msg:context_get(msys.core.ECMESS_CTX_MESS, "key")` to get a message context value. For more information see [msg:context_get](lua.ref.msg_context_get.php "msg:context_get").

<a name="idp25129936"></a>
## Description

Return a message validation context value.

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

The defined parameter for `params` is `key` the name of the context variable to be returned.

<a name="idp25134784"></a>
## See Also

[msys.policyeditor.vctx_mess_set](lua.ref.msys.policyeditor.vctx_mess_set.php "msys.policyeditor.vctx_mess_set")

| [Prev](lua.ref.msys.policyeditor.vctx_mess_set.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.vctx_conn_set.php) |
| msys.policyeditor.vctx_mess_set  | [Table of Contents](index.php) |  msys.policyeditor.vctx_conn_set |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)