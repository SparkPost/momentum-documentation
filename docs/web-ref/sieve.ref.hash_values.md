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

| hash_values |
| [Prev](sieve.ref.hash_set.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.is_true.php) |

<a name="sieve.ref.hash_values"></a>
## Name

hash_values — return all the string values of a hash as a stringlist

## Synopsis

`hash_values` { *`hash`* }

<a name="idp30980624"></a>
## Description

This function works on a hash created by [hash_create](sieve.ref.hash_create.php "hash_create"). If the given hash stores strings as its values, these values will be returned in a stringlist, elements of which are in random order. For an empty hash, the returned stringlist contains nothing.

<a name="example.hash_values"></a>

**Example 16.112. hash_values example**

```
$hash = hash_create;
hash_set $hash "mykey1" "myval1";
hash_set $hash "mykey2" "myval2";
hash_set $hash "mykey3" "myval3";
$vals = hash_values $hash;
#vals is now a stringlist containing "myval1", "myval2" and "myval3"
```

<a name="idp30985872"></a>
## See Also

[hash_create](sieve.ref.hash_create.php "hash_create"), [hash_set](sieve.ref.hash_set.php "hash_set")

| [Prev](sieve.ref.hash_set.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.is_true.php) |
| hash_set  | [Table of Contents](index.php) |  is_true |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)