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

| ec_sub |
| [Prev](sieve.ref.ec_spool_space.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_tarpit.php) |

<a name="sieve.ref.ec_sub"></a>
## Name

ec_sub — perform subtraction of two numbers

## Synopsis

`ec_sub` { *`number1`* } { *`number2`* }

<a name="idp30602512"></a>
## Description

`ec_sub` takes two numbers, subtracts the second number from the first number and returns the result.

<a name="example.ec_sub"></a>

**Example 16.96. ec_sub example**

```
$a = 43;
$b = "55.54";
$sub = ec_sub $a $b;
ec_log " ${a} - ${b} is ${sub}";
#sub is -12.540000
```

| [Prev](sieve.ref.ec_spool_space.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_tarpit.php) |
| ec_spool_space  | [Table of Contents](index.php) |  ec_tarpit |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)