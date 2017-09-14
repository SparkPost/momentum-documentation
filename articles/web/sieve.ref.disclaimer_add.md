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

| disclaimer_add |
| [Prev](sieve.ref.discard.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ds_execute.php) |

<a name="sieve.ref.disclaimer_add"></a>
## Name

disclaimer_add — add a disclaimer to an email

## Synopsis

`disclaimer_add` { *`hash`* }

<a name="idp13587104"></a>
## Description

### Note

This feature requires that the sievelib module be loaded.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.41.

Use the `disclaimer_add` function to append a message to an email. For example, this function may be used to indicate that an email has been scanned.

Sieve scripts using `disclaimer_add` can be used in any stage or environment where you have a complete message body.

<a name="example.disclaimer_add"></a>

**Example 15.18. disclaimer_add example 1**

```
$h = hash_create;
 hash_set $h "html" "<HR>
 <DIV align=center><FONT face=Arial size=2>This email has been scanned
 for viruses.</FONT></DIV>
 <DIV>
 <HR>
 </DIV>";
 disclaimer_add $h;
```

<a name="example.disclaimer_add.second"></a>

**Example 15.19. disclaimer_add example 2**

```
$h = hash_create;
 hash_set $h "plain" "This email has been scanned for viruses";
 disclaimer_add $h;
```

When using `html` as a key, the module will look for all text/html parts that are not attachments and append the HTML disclaimer. When using `plain` as a key, the module will look for all text/plain parts that are not attachments and append the plain disclaimer. If using both, it will look for both, adding the html disclaimer to the html parts, and the plain disclaimer to the plain parts.

| [Prev](sieve.ref.discard.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ds_execute.php) |
| discard  | [Table of Contents](index.php) |  ds_execute |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)