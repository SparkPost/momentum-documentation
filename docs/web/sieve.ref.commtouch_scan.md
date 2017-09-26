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

| commtouch_scan |
| [Prev](sieve.ref.cloudmark_score.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.disable_esmtp_capability.php) |

<a name="sieve.ref.commtouch_scan"></a>
## Name

commtouch_scan — email virus scan

## Synopsis

`commtouch_scan`

<a name="idp13526368"></a>
## Description

### Note

In version 2.2 this feature requires that the sievelib module be loaded.

Use commtouch_scan in a data phase Sieve script and then read the message context variable commtouch-virus-threat. The possible return values are:

*   non-virus

*   unknown

*   medium

*   high

*   virus

Sieve scripts using `commtouch_scan` can be used in the data phase.

<a name="example.commtouch_scan"></a>

**Example 15.15. commtouch_scan example**

```
commtouch_scan;

if vctx_mess :is :comparator "i;ascii-casemap"  "commtouch-virus-threat" ["high", "virus"]
{
        ec_action 550 "Virus detected" "virus:Viruses rejected";
        stop;
}
```

Use of this function requires that the commtouch module be loaded.

<a name="idp13538080"></a>
## See Also

[Section 14.15, “commtouch_ctasd – Commtouch_ctasd Module”](modules.commtouch.php "14.15. commtouch_ctasd – Commtouch_ctasd Module")

| [Prev](sieve.ref.cloudmark_score.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.disable_esmtp_capability.php) |
| cloudmark_score  | [Table of Contents](index.php) |  disable_esmtp_capability |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)