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

| msys.policyeditor.set_binding |
| [Prev](lua.ref.msys.policyeditor.send_trap.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.set_binding_group.php) |

<a name="lua.ref.msys.policyeditor.set_binding"></a>
## Name

msys.policyeditor.set_binding — Assign the message to a named binding

<a name="idp25044496"></a>
## Synopsis

`msys.policyeditor.set_binding(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```

**Configuration Change. ** This function is deprecated. Use `msg:binding(bnd)` to set a binding. For more information see [msg:binding](lua.ref.msg_binding.php "msg:binding").

<a name="idp25049776"></a>
## Description

Assign the message to a named binding. If commas appear, it's a list of bindings, and we pick one at random.

### Note

If you assign messages to bindings, it is important to ensure that *all* messages are assigned to bindings, or to make sure that the fallback binding (otherwise known as "default") does what you want. Good scripting practice would be to ensure that there is always an `else` clause or some other way of ensuring that all messages are always dealt with in some way. For example, you could create a variable at the top of your script with the most general binding, then `if` blocks to assign a message to a more specific binding if it matches. At the end of the script, assuming no `if` condition applies, the `else` clause would assign the message to the most general binding.

You can use this function to set the binding to the `default` binding. For more information see [the section called “The "default" Binding”](conf.ref.binding.php#conf.ref.binding.default "The "default" Binding").

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

The defined parameter for `params` is:

*   `binding` the name of the binding to assign to. If commas appear, it's a list of bindings, and we pick one at random.

<a name="idp25061104"></a>
## See Also

[msys.policyeditor.set_binding_group](lua.ref.msys.policyeditor.set_binding_group.php "msys.policyeditor.set_binding_group")

| [Prev](lua.ref.msys.policyeditor.send_trap.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.set_binding_group.php) |
| msys.policyeditor.send_trap  | [Table of Contents](index.php) |  msys.policyeditor.set_binding_group |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)