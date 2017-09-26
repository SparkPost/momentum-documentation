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

| msys.commtouch.diagnose |
| [Prev](lua.ref.msys.cidr.reload.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.counter.add.php) |

<a name="lua.ref.msys.commtouch.diagnose"></a>
## Name

msys.commtouch.diagnose — Scan messages using Commtouch

<a name="idp17752048"></a>
## Synopsis

`msys.commtouch.diagnose(msg, accept, vctx);`

```
msg: userdata, ec_message type, optional
accept: userdata, accept_construct type, optional
vctx: userdata, validate_context type, optional
```
<a name="idp17755168"></a>
## Description

This function provides diagnosis of a message's virus or spam status. You must load and correctly configure the commtouch_ctasd module before using this function. For details, see [Section 71.20, “commtouch_ctasd – Commtouch Spam Protection”](modules.commtouch.php "71.20. commtouch_ctasd – Commtouch Spam Protection").

It can be invoked at the data, spool, or each_rcpt phases, and it will not work at the connect, ehlo, mailfrom, or rcptto phases.

Enable this function with the statement `require('msys.commtouch');`.

It takes the following parameters. If any of the inputs is not provided, it will be inferred from the current context:

*   `msg` – Email to be scored

*   `accept` – accept_construct

*   `vctx` – Validation context

This function returns a table with the following key/value pairs:

*   `class` – Spam classification of this message. Possible values are `Unknown`, `Suspected`, `Bulk`, and `Spam`.

*   `virus-threat` – Virus classification of this message. Possible values are `non-virus`, `medium`, `high`, and `virus`.

*   `ref-id` – Reference ID returned by the commtouch engine.

The above name value pairs are also set within the validation context with each key being prefixed with `commtouch-`.

### Warning

Do not use `pcall` with this function.

| [Prev](lua.ref.msys.cidr.reload.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.counter.add.php) |
| msys.cidr.reload  | [Table of Contents](index.php) |  msys.counter.add |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)