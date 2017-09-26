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

| generate_mail_raw |
| [Prev](sieve.ref.envelope.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.hash_create.php) |

<a name="sieve.ref.generate_mail_raw"></a>
## Name

generate_mail_raw — generate and send out a message

## Synopsis

`generate_mail_raw` { *`from_addr`* } { *`to_addr | addr_list`*              } { *`text`* }

<a name="idp30863344"></a>
## Description

This function generates and sends out a message. It sets the envelope `from` and `to` using the addresses given and uses the string contained in the third parameter as the message, including message headers and body. It can send a message to multiple recipients if the second parameter is a string list containing multiple addresses.

<a name="example.generate_mail_raw"></a>

**Example 16.106. generate_mail_raw example: generate and send a message**

```
$to = "sender@omniti.com";
$from = "rcpt@omniti.com";
generate_mail_raw $from $to text:
From: ${from}
To: ${to}
Subject: a testing email

testing
.
;
```

| [Prev](sieve.ref.envelope.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.hash_create.php) |
| envelope  | [Table of Contents](index.php) |  hash_create |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)