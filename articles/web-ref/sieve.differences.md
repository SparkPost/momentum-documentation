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

| 8.1. The differences between Sieve and Sieve++ |
| [Prev](sieve.php)  | Chapter 8. Sieve++ |  [Next](sieve.syntax.basic.php) |

## 8.1. The differences between Sieve and Sieve++

The Sieve language is a mail filtering language defined in [RFC 3028](http://tools.ietf.org/html/rfc3028) and further extended in [RFC 3685](http://tools.ietf.org/html/rfc3685). Essentially Sieve is a standardized way of processing email and taking actions based on complicated logic. It is a programming language that is specifically tailored to meet the requirements of processing and extracting components from email and taking actions that are appropriate for sorting email.

Sieve itself was designed to process an email message once it has been received from the sending MTA. This is the first instance where Sieve++ extends beyond the capabilities of the traditional Sieve specification. With Sieve++, you can execute a script during any phase of the SMTP transaction: connect, ehlo, mail from, rcpt to, and the mail body itself. This provides you the powerful advantage of actually changing the SMTP responses made to the sending MTA.

In Sieve, the specified actions allow you to "keep", "discard", "reject", "redirect" and "fileinto" (save to a specific folder) any message that is processed. Since Sieve++ works at the MTA level, it does not allow for "fileinto" as it does not act as an MDA (Mail Delivery Agent) without loading a IO_System module to provide those facilities. While we lack the native ability to "fileinto", we gain the ability to take SMTP actions such as issuing transient SMTP failures (45x), permanent failures (55x), time-based costs (a.k.a. tarpitting), or disconnecting the SMTP session.

Sieve itself was designed to be extensible through the concept of a "require" block at the top of every script that specifies which capabilities that script will use. This allows for new capabilities to be added as well as ensuring that specific requested facilities can be provided at the time the script is compiled, rather than during an SMTP session.

### Note

When using the Momentum implementation of Sieve "require" blocks are *not* needed.

| [Prev](sieve.php)  | [Up](sieve.php) |  [Next](sieve.syntax.basic.php) |
| Chapter 8. Sieve++  | [Table of Contents](index.php) |  8.2. Sieve's Basic Syntax |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)