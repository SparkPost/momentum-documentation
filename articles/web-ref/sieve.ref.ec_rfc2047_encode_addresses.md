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

| ec_rfc2047_encode_addresses |
| [Prev](sieve.ref.ec_rewrite_mailfrom.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_rfc2047_encode_header.php) |

<a name="sieve.ref.ec_rfc2047_encode_addresses"></a>
## Name

ec_rfc2047_encode_addresses — create an RFC2047-compliant address

## Synopsis

`ec_rfc2047_encode_addresses` { *`addresses`* }

<a name="idp30416640"></a>
## Description

`ec_rfc2047_encode_addresses` create an RFC2047-compliant address and is intended for use in mail generation. This function might be used in the following way. If you are generating email (perhaps via generate_mail_raw) and want to add a To: header of the form: `To: "FirstName LastName" <user@example.com>` and FirstName and/or LastName may have non-ASCII characters, you can call ec_rfc2047_encode_addresses to correctly escape them, per RFC2047, so that they will be understood by MIME compliant software; you would pass the right hand side of the above to the action and it will parse out the address information and correctly compose it for you and return the result.

<a name="example.ec_rfc2047_encode_addresses"></a>

**Example 16.88. ec_rfc2047_encode_addresses example**

$to = "*`FirstName LastName`*          ";
$encoded = ec_rfc2047_encode_addresses $to;
...

You might use this function in one of the custom bounce generation hooks, or at any point after data (when you have a message).

| [Prev](sieve.ref.ec_rewrite_mailfrom.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_rfc2047_encode_header.php) |
| ec_rewrite_mailfrom  | [Table of Contents](index.php) |  ec_rfc2047_encode_header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)