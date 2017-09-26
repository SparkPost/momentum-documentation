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

| ec_tolower |
| [Prev](sieve.ref.ec_throttle.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_trace_context.php) |

<a name="sieve.ref.ec_tolower"></a>
## Name

ec_tolower — change all characters to lower case

## Synopsis

`ec_tolower` { *`string`* }

<a name="idp15450400"></a>
## Description

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

Change all characters in the argument to lower case. Numerals remain unchanged.

<a name="example.ec_tolower"></a>

**Example 15.99. ec_tolower example**

```
$a = "%{vctx_mess:mailfrom_localpart}";
  $b = ec_tolower $a;
  ec_log "${a} lower to ${b}";
```

| [Prev](sieve.ref.ec_throttle.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_trace_context.php) |
| ec_throttle  | [Table of Contents](index.php) |  ec_trace_context |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)