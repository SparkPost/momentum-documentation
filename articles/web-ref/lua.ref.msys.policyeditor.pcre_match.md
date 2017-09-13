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

| msys.policyeditor.pcre_match |
| [Prev](lua.ref.msys.policyeditor.get_variable.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.send_email.php) |

<a name="lua.ref.msys.policyeditor.pcre_match"></a>
## Name

msys.policyeditor.pcre_match — Perform a PCRE regex match operation

<a name="idp24970640"></a>
## Synopsis

`msys.policyeditor.pcre_match(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```

**Configuration Change. ** This function is deprecated. Use `local str = msys.pcre.match("string", "pattern")` to perform a PCRE match. For more information see [msys.pcre.match](lua.ref.msys.pcre.match.php "msys.pcre.match").

<a name="idp24975984"></a>
## Description

Perform a PCRE regex match operation.

A side effect of operation is that the variable `$0` is set to the subject string, `$1` is set to the first capturing subexpression, `$2` the second and so on. Additionally, if you use one of the various forms of named subexpression captures, such as `(?P<name>\d+)`, then the name of each captured item will be prefixed with a dollar sign and set as a script variable (so you'd have `$name` if you used `(?P<name>\d+)`).

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

Defined parameters for `params` are:

*   `subject` the string to be matched

*   `pattern` the PCRE regex pattern to match against

<a name="idp24986608"></a>
## See Also

[Section 3.10.5, “Using Regular Expressions with the Policy Editor”](web3.policy.editor.php#web3.policy.editor.regex "3.10.5. Using Regular Expressions with the Policy Editor")

| [Prev](lua.ref.msys.policyeditor.get_variable.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.send_email.php) |
| msys.policyeditor.get_variable  | [Table of Contents](index.php) |  msys.policyeditor.send_email |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)