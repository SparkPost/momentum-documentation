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

| reject |
| [Prev](sieve.ref.redirect.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.reverse.php) |

<a name="sieve.ref.reject"></a>
## Name

reject, ec_reject — reject the message, returning an MDN to the sender

## Synopsis

`reject` { *`message`* }

`ec_reject` { *`message`* } [ *`counter`* ]

<a name="idp31138976"></a>
## Description

This action will cause Momentum to bounce the current message, and stop processing further rules. The *`message`* parameter will be used to form the body of the bounce message that is sent back to the envelope sender of the message.

If this action is executed before a complete message has been received, Momentum will instead send back a 550 status response, using the *`message`* as the message portion.

The optional counter parameter to `ec_reject` is used to count the number of hits for this particular action; if omitted, the script filename and line number will be assumed. You can see the hit count via **ec_console** using the **sieve stats**       command.

<a name="example.reject"></a>

**Example 16.121. reject example**

```
if envelope :domain :is "from" "do-reject.com" {
  reject "we don't accept mail from do-reject.com";
}
```

<a name="example.rject.second"></a>

**Example 16.122. ec_reject example**

```
require "ec_reject";
if envelope :domain :is "from" "do-reject.com" {
  ec_reject "we don't accept mail from do-reject.com" "policy:bounce do-reject.com";
}
```

This is a terminal action; no further Sieve rules will be run for the current message in the current phase.

For an overview of Sieve actions see [Section 8.2.2, “Actions”](sieve.syntax.basic.php#sieve.syntax.basic.actions "8.2.2. Actions").

<a name="idp31151312"></a>
## See Also

[generate_bounces_for_multi_recipient_policy_rejections](conf.ref.generate_bounces_for_multi_recipient_policy_rejections.php "generate_bounces_for_multi_recipient_policy_rejections")

| [Prev](sieve.ref.redirect.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.reverse.php) |
| redirect  | [Table of Contents](index.php) |  reverse |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)