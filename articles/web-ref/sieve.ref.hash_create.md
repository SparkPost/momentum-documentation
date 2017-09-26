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

| hash_create |
| [Prev](sieve.ref.generate_mail_raw.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.hash_dump.php) |

<a name="sieve.ref.hash_create"></a>
## Name

hash_create — create a hash

## Synopsis

`hash_create`

<a name="idp30879040"></a>
## Description

This function returns a new, empty, hash table. You may use `hash_set` to set elements in the hash, and use array style syntax to retrieve the value of an element:

<a name="example.hash_create"></a>

**Example 16.107. hash_create example**

```
$hash = hash_create;
hash_set $hash "mykey" "myvalue";
$value = $hash["mykey"];

ec_log "The value is ${value}";
```

<a name="idp30884240"></a>
## See Also

[hash_set](sieve.ref.hash_set.php "hash_set"), [hash_dump](sieve.ref.hash_dump.php "hash_dump") and [hash_get](sieve.ref.hash_get.php "hash_get").

| [Prev](sieve.ref.generate_mail_raw.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.hash_dump.php) |
| generate_mail_raw  | [Table of Contents](index.php) |  hash_dump |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)