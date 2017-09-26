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

| address |
| [Prev](sieve.ref.add_recipient.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.advertize_esmtp_capability.php) |

<a name="sieve.ref.address"></a>
## Name

address — return the address from a header

## Synopsis

`address` { header_element } { *`string`* }

<a name="idp28527664"></a>
## Description

This function implements the standard "address" Sieve test; it parses addresses out of the header you request and tests against them. For more information see [Section 8.2, “Sieve's Basic Syntax”](sieve.syntax.basic.php "8.2. Sieve's Basic Syntax").

<a name="example.address"></a>

**Example 16.2. address example**

```
if address ["From", "To"] "lemon@test.messagesystems.com" {
    ec_log "lemon";
} else {
    ec_log "not-lemon";
}
```

This function returns the first matching address as a string value. When using the `test` form of address, with a comparator or regex, it will match against all addresses. See also [Section 8.2, “Sieve's Basic Syntax”](sieve.syntax.basic.php "8.2. Sieve's Basic Syntax").

<a name="idp28534272"></a>
## See Also

[envelope](sieve.ref.envelope.php "envelope")

| [Prev](sieve.ref.add_recipient.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.advertize_esmtp_capability.php) |
| add_recipient  | [Table of Contents](index.php) |  advertize_esmtp_capability |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)