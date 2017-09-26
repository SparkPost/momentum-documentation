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

| ec_dkim_responsible_domain |
| [Prev](sieve.ref.ec_dkim_domains.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_dkim_sign.php) |

<a name="sieve.ref.ec_dkim_responsible_domain"></a>
## Name

ec_dkim_responsible_domain — Return the responsible domain for the current message

## Synopsis

`ec_dkim_responsible_domain`

<a name="idp29414320"></a>
## Description

`ec_dkim_responsible_domain` returns a string containing the responsible domain of the current message. This can be used as an argument to the [ec_dkim_sign](sieve.ref.ec_dkim_sign.php "ec_dkim_sign") extension or as a comparison against the return values of the [ec_dkim_domains](sieve.ref.ec_dkim_domains.php "ec_dkim_domains") extension.

### Note

This feature requires the DKIM module. See [Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures") for more information.

<a name="example.ec_dkim_responsible"></a>

**Example 16.37. ec_dkim_responsible_domain example**

```
$responsible = ec_dkim_responsible_domain;
$domains = ec_dkim_domains;
if ec_test :is $domains $responsible {
  ec_log "Valid DKIM signature found";
}
else {
  ec_log "No valid DKIM signature found";
}
```

| [Prev](sieve.ref.ec_dkim_domains.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_dkim_sign.php) |
| ec_dkim_domains  | [Table of Contents](index.php) |  ec_dkim_sign |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)