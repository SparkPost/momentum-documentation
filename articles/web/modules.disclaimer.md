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

| 14.21. disclaimer – Module |
| [Prev](modules.delay_dsn.php)  | Chapter 14. Modules Reference |  [Next](modules.dkim.php) |

## 14.21. disclaimer – Module

<a class="indexterm" name="idp11457920"></a>

Use the disclaimer module to append a message to an email. For example, this module may be used to indicate that an email has been scanned. The message will be inserted into the footer of the email.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.41.

### 14.21.1. Configuration

<a name="example.disclaimer"></a>

**Example 14.29. disclaimer module**

`Module generic/disclaimer disclaimer {}`

### 14.21.2. Sieve Usage

Use the Sieve `disclaimer_add` function to add a plain or an HTML message to an email.

When using `html` as a key, the module will look for all text/html parts that are not attachments and append the HTML disclaimer. When using `plain` as a key, the module will look for all text/plain parts that are not attachments and append the plain disclaimer. If using both, it will look for both, adding the html disclaimer to the html parts, and the plain disclaimer to the plain parts.

### 14.21.3. See Also

[disclaimer_add](sieve.ref.disclaimer_add.php "disclaimer_add")

| [Prev](modules.delay_dsn.php)  | [Up](modules.php) |  [Next](modules.dkim.php) |
| 14.20. delay_dsn – Delay DSN Generation  | [Table of Contents](index.php) |  14.22. dkim – DomainKeys Identified Mail Signatures |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)