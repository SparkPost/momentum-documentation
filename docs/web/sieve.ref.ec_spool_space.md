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

| ec_spool_space |
| [Prev](sieve.ref.ec_shared_throttle.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_sub.php) |

<a name="sieve.ref.ec_spool_space"></a>
## Name

ec_spool_space — Return information about the free space on the spool partition

## Synopsis

`ec_spool_space`

<a name="idp15322912"></a>
## Description

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

Method which returns the total and available space in MBs and the percentage of used space (as an int, from 0 to 100) on the disk partition with the Momentum spool.

<a name="example.ec_spool_space"></a>

**Example 15.95. ec_spool_space example**

```
($totalmegs, $availmegs, $pct) = ec_spool_space;
# Turn away connections if more than 90% of disk is free
if ec_test :value "gt" :comparator "i;ascii-numeric" $pct "90" {
    ec_disconnect "421" "Disk is too full";
}
```

| [Prev](sieve.ref.ec_shared_throttle.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_sub.php) |
| ec_shared_throttle  | [Table of Contents](index.php) |  ec_sub |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)