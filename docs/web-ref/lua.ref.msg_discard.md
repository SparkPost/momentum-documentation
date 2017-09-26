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

| msg:discard |
| [Prev](lua.ref.msg_build.php)  | 15.2. Lua Functions |  [Next](lua.ref.msg_forward.php) |

<a name="lua.ref.msg_discard"></a>
## Name

msg:discard — Silently discard a message

<a name="idp25438016"></a>
## Synopsis

`msg:discard(reason);`

`reason: string, optional`<a name="idp25440704"></a>
## Description

Silently discard a message. The message will appear to the sender to have been accepted and delivered; no error status or out-of-band delivery notification will occur, but the message will be logged as a rejection. Unlike its Sieve counterpart, execution will continue after this function is called.

### Warning

Do not call this function from `validate_set_binding`.

If no `reason` is supplied, the reason defaults to `550 5.7.0 discarded by policy`. If you add your own reason, use the same format as the default message, indicating a bounce number first, for example, `550 Bounce message processed`.

### Warning

When a reason is passed to this function, it must begin with an SMTP code, for example, "550 My reason". If the reason isn't in this format, it is overwritten with the reason "550 5.7.1 [internal] discarded by policy".

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msg_build.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msg_forward.php) |
| msg:build  | [Table of Contents](index.php) |  msg:forward |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)