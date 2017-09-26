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

| add_recipient |
| [Prev](sieve.ref.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.address.php) |

<a name="sieve.ref.add_recipient"></a>
## Name

add_recipient — add a new envelope recipient to the mail

## Synopsis

`add_recipient` { *`address`* }

<a name="idp13124896"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This action will add an envelope recipient (a `RCPT TO`) address to the current mail. The headers and the body of the message will not be changed in any way. Existing recipients will also not be affected.

### Warning

This function should only be used in the each_rcpt phase.

<a name="example.add_recipient"></a>

**Example 15.1. add_recipient example**

```
if envelope :domain :is "to" "bar.com" {
  add_recipient "sideline@foo.com";
  stop;
}
```

| [Prev](sieve.ref.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.address.php) |
| Chapter 15. Sieve++ Function Reference  | [Table of Contents](index.php) |  address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)