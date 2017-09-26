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

| msys.policyeditor.send_email |
| [Prev](lua.ref.msys.policyeditor.pcre_match.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.policyeditor.send_trap.php) |

<a name="lua.ref.msys.policyeditor.send_email"></a>
## Name

msys.policyeditor.send_email — Sends a simple email message

<a name="idp24993360"></a>
## Synopsis

`msys.policyeditor.send_email(ctx, vars, params);`

```
ctx: table
vars: table
params: table
```

**Configuration Change. ** This function is deprecated. Use a combination of `msg:build()` and `msg:inject()` to send a message. For more information see [msg:build](lua.ref.msg_build.php "msg:build") and [msg:inject](lua.ref.msg_inject.php "msg:inject").

<a name="idp24999664"></a>
## Description

Sends a simple email message. Builds out a simple, non-MIME, RFC2822 email message based on the supplied sender, recipient, subject and body content. The from and to must be simple RFC2821 email addresses, that is, addresses of the form user@domain with no friendly names or other surrounding punctuation.

The `ctx` parameter is the context containing objects from the callout, `vars` is a table containing script variables and `params` is a table containing parameters to be passed to this routine.

Defined parameters for params are:

*   `from` the envelope sender and "From" header for the generated email

*   `to` the envelope recipient and "To" header for the generated email

*   `subject` the subject line for the generated email

*   `body` the body of the message

*   `throttle` if non-zero, limits sending to one message every "throttle" seconds

<a name="idp25010592"></a>
## See Also

[Section 3.11, “Automated Alerting Configuration”](web3.automated.alerting.php "3.11. Automated Alerting Configuration")

| [Prev](lua.ref.msys.policyeditor.pcre_match.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.policyeditor.send_trap.php) |
| msys.policyeditor.pcre_match  | [Table of Contents](index.php) |  msys.policyeditor.send_trap |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)