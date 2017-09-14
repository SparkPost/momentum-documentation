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

| hash_dump |
| [Prev](sieve.ref.hash_create.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.hash_get.php) |

<a name="sieve.ref.hash_dump"></a>
## Name

hash_dump — dump the contents of the hash to the paniclog

## Synopsis

`hash_dump` { *`hash`* }

<a name="idp15630064"></a>
## Description

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

`hash_dump` dumps the contents of the hash to the paniclog. This function can occasionally be useful when debugging but should be avoided in production especially on heavy throughput systems.

<a name="example.hash_dump"></a>

**Example 15.107. hash_dump example**

```
$aliases = ds_fetch_flat "mydb" "select expansion from alias where user = ?" [$address];
hash_dump $aliases;
```

| [Prev](sieve.ref.hash_create.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.hash_get.php) |
| hash_create  | [Table of Contents](index.php) |  hash_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)