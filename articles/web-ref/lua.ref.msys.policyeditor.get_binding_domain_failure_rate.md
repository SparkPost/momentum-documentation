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

| msys.policyeditor.get_binding_domain_failure_rate |
| [Prev](lua.ref.msys.policyeditor.del_header.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.get_header.php) |

<a name="lua.ref.msys.policyeditor.get_binding_domain_failure_rate"></a>
## Name

msys.policyeditor.get_binding_domain_failure_rate — Get the failure rate for a particular domain and binding combination

<a name="idp24851584"></a>
## Synopsis

`msys.policyeditor.get_binding_domain_failure_rate(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```
<a name="idp24854336"></a>
## Description

Gets the failure rate for a particular domain and binding combination. The function only returns a value if it is "statistically valid"that is, since the function returns a percentage, it will only return a non-zero value if the divisor is 100 or more.

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

Defined parameters for `params` are:

*   `binding` the name of the binding

*   `domain` the domain name

*   `period` the period for which statistics are valid

Returns true if the assignment was successful, or false otherwise. A false return value usually indicates that there are no suitable bindings on this node.

| [Prev](lua.ref.msys.policyeditor.del_header.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.get_header.php) |
| msys.policyeditor.del_header  | [Table of Contents](index.php) |  msys.policyeditor.get_header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)