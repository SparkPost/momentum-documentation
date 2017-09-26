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

| ec_pcre_match |
| [Prev](sieve.ref.ec_nearbyint.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_rand.php) |

<a name="sieve.ref.ec_pcre_match"></a>
## Name

ec_pcre_match — perform a regular expression match

## Synopsis

`ec_pcre_match` { *`string`* } { *`pattern`* }

<a name="idp30363808"></a>
## Description

`ec_pcre_match` performs a regular expression match and returns a stringlist containing the matched strings. The zeroth element of the stringlist consists of the part of the string that matched the whole given pattern, the first element corresponds to the first captured subpattern, the second element to the second captured subpattern, and so on.

<a name="example.ec_pcre_match"></a>

**Example 16.85. ec_pcre_match example**

```
$email = "foo@bar.com.cn";
($a, $b, $c) = ec_pcre_match $email "(.*)@(.*)\.com";

# $a is "foo@bar.com", $b is "foo" and $c is "bar"
ec_log "the string matched is ${a}, $1 is ${b}, $2 is ${c}.";
```

| [Prev](sieve.ref.ec_nearbyint.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_rand.php) |
| ec_nearbyint  | [Table of Contents](index.php) |  ec_rand |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)