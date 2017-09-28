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

| cloudmark_score |
| [Prev](sieve.ref.cidrdb.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.commtouch_scan.php) |

<a name="sieve.ref.cloudmark_score"></a>
## Name

cloudmark_score — Analyze a message with Cloudmark Authority

## Synopsis

`cloudmark_score`

<a name="idp13509296"></a>
## Description

`cloudmark_score` returns a string containing the numeric score assigned to the active message by the Cloudmark Authority Engine. Additionally, all of the validation context variables set by the Cloudmark module will be set. For a list of these variables see [Section 14.14.3, “Cloudmark Runtime Usage”](modules.cloudmark.php#modules.cloudmark.runtime.usage "14.14.3. Cloudmark Runtime Usage").

### Note

This feature requires the Cloudmark module. See [Section 14.14, “cloudmark – Cloudmark Authority Module”](modules.cloudmark.php "14.14. cloudmark – Cloudmark Authority Module") for more details.

<a name="example.cloudmark_score"></a>

**Example 15.14. cloudmark_score example**

```
$score = cloudmark_score;
if ec_test :value "gt" :comparator "i;ascii-numeric" "${score}" "80" {
  ec_tarpit 10 "tarpit before reject";
  ec_action 554 "5.7.1 your mail has been rejected by policy";
}
```

| [Prev](sieve.ref.cidrdb.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.commtouch_scan.php) |
| cidrdb  | [Table of Contents](index.php) |  commtouch_scan |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)