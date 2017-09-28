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

| ec_inc_counter |
| [Prev](sieve.ref.ec_host_fingerprint.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_include.php) |

<a name="sieve.ref.ec_inc_counter"></a>
## Name

ec_inc_counter — increment a Sieve counter

## Synopsis

`ec_inc_counter` { *`counter`* }

<a name="idp14620400"></a>
## Description

`ec_inc_counter` allows you to increment an arbitrary Sieve counter. The convention for naming counters is a short category name, followed by a colon, followed by a more descriptive name for the counter. The counter values can be obtained on the console using the **sieve stats**       command. Additionally, the web console analyzes the counter values to build up the pie charts that are displayed on the policy screen.

Most of the built-in Sieve actions will either implicitly increment a counter, or allow you to specify your own for that action; `ec_inc_counter` allows to you count the number of times that a particular part of your script is run, and can be useful for later statistical analysis.

<a name="example.ec_inc_counter"></a>

**Example 15.59. ec_inc_counter example**

```
if envelope :domain :is "from" "good-guy.com" {
  ec_inc_counter "stats:mail from the good guys";
}
```

See also [ec_gauge_cache](sieve.ref.ec_gauge_cache.php "ec_gauge_cache") for a more general-purpose counter mechanism supporting increment, decrement and get operations in Sieve.

| [Prev](sieve.ref.ec_host_fingerprint.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_include.php) |
| ec_host_fingerprint  | [Table of Contents](index.php) |  ec_include |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)