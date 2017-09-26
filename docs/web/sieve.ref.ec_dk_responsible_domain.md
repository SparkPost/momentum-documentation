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

| ec_dk_responsible_domain |
| [Prev](sieve.ref.ec_div.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_dk_sign.php) |

<a name="sieve.ref.ec_dk_responsible_domain"></a>
## Name

ec_dk_responsible_domain — Return the responsible domain for the current message

## Synopsis

`ec_dk_responsible_domain`

<a name="idp13986256"></a>
## Description

`ec_dk_responsible_domain` returns a string containing the responsible domain of the current message. This can be used as an argument to the [ec_dk_sign](sieve.ref.ec_dk_sign.php "ec_dk_sign") extension.

### Note

This feature requires the DomainKeys module. See [Section 14.24, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "14.24. domainkeys – Yahoo! DomainKeys") for more information.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

<a name="example.ec_dk_responsible_domain"></a>

**Example 15.34. ec_dk_responsible_domain example**

```
$responsible = ec_dk_responsible_domain;
if ec_test :is "foo.com" $responsible {
  ec_log "foo.com is responsible for this message.";
}
else {
  ec_log "foo.com is not responsible for this message.";
}
```

| [Prev](sieve.ref.ec_div.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_dk_sign.php) |
| ec_div  | [Table of Contents](index.php) |  ec_dk_sign |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)