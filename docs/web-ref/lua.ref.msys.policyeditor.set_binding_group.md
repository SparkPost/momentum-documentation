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

| msys.policyeditor.set_binding_group |
| [Prev](lua.ref.msys.policyeditor.set_binding.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.set_variable.php) |

<a name="lua.ref.msys.policyeditor.set_binding_group"></a>
## Name

msys.policyeditor.set_binding_group — Assign the message to a named binding group

<a name="idp25067856"></a>
## Synopsis

`msys.policyeditor.set_binding_group(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```

**Configuration Change. ** This function is deprecated. Use `msg:binding_group(bndgp)` to set a binding group. For more information see [msg:binding_group](lua.ref.msg_binding_group.php "msg:binding_group").

<a name="idp25073200"></a>
## Description

Assigns the message to a named binding group. Randomly picks a binding from the named binding group and assigns the message to it. This function will not pick bindings that are unplumbed or that belong to a different node in the cluster; it will always pick a valid binding that belongs to the node.

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

The defined parameter for `params` is:

*   `binding_group` the name of the binding group to assign to. If commas appear, it's a list of bindings, and we pick one at random.

<a name="idp25079600"></a>
## See Also

[msys.policyeditor.set_binding](lua.ref.msys.policyeditor.set_binding.php "msys.policyeditor.set_binding")

| [Prev](lua.ref.msys.policyeditor.set_binding.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.set_variable.php) |
| msys.policyeditor.set_binding  | [Table of Contents](index.php) |  msys.policyeditor.set_variable |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)