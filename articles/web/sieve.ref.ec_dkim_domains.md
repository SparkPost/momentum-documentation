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

| ec_dkim_domains |
| [Prev](sieve.ref.ec_dk_sign.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_dkim_responsible_domain.php) |

<a name="sieve.ref.ec_dkim_domains"></a>
## Name

ec_dkim_domains — Return a list of valid signing domains

## Synopsis

`ec_dkim_domains`

<a name="idp14040160"></a>
## Description

`ec_dkim_domains` returns a stringlist of the domain portion of the identities which had valid DKIM signatures for the current message. Note that since DKIM allows for third party signatures, one should check that there is a valid signature relating to the 'responsible domain' of the message, which is provided by the [ec_dkim_responsible_domain](sieve.ref.ec_dkim_responsible_domain.php "ec_dkim_responsible_domain") extension.

### Note

This feature requires the DKIM module. See [Section 14.22, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.22. dkim – DomainKeys Identified Mail Signatures") for more information.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

<a name="example.ec_dkim_domains"></a>

**Example 15.36. ec_dkim_domains example**

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

| [Prev](sieve.ref.ec_dk_sign.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_dkim_responsible_domain.php) |
| ec_dk_sign  | [Table of Contents](index.php) |  ec_dkim_responsible_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)