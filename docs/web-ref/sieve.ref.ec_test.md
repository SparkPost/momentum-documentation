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

| ec_test |
| [Prev](sieve.ref.ec_tarpit.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_thread_pool_get_queue_size.php) |

<a name="sieve.ref.ec_test"></a>
## Name

ec_test — generic test

## Synopsis

`ec_test` { *`comparison`* } { *`value`* } { *`other-value`* }

<a name="idp30636176"></a>
## Description

Instead of building comparators into every extension function, Momentum provides a generic test facility called `ec_test` through which all comparators can be used. See [Section 8.2.3, “Comparisons”](sieve.syntax.basic.php#sieve.syntax.basic.comparisons "8.2.3. Comparisons") for a discussion of Sieve comparators.

A short example of variable assignment, interpolation and testing is testing for an SPF -all record. In order to search for an SPF record that explicitly states that a domain sends no email, we look for a TXT record for the domain part of the envelope sender and attempt to match it against something that looks like: "v=spf1 -all".

<a name="example.ec_test"></a>

**Example 16.97. ec_test example**

```
$txt = ec_dns_lookup "%{spvf1:d}" "txt";
if ec_test :regex "${txt}" "v=spf1\\s+-all" {
  ec_action 550 "SPF says %{spvf1:d} sends no email.";
}
```

For a description of the types of comparisons you can perform using `ec_test` see [Section 8.2.3, “Comparisons”](sieve.syntax.basic.php#sieve.syntax.basic.comparisons "8.2.3. Comparisons").

| [Prev](sieve.ref.ec_tarpit.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_thread_pool_get_queue_size.php) |
| ec_tarpit  | [Table of Contents](index.php) |  ec_thread_pool_get_queue_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)