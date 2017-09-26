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

| msys.base64.decode |
| [Prev](lua.ref.msys.av.scan_part.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.base64.encode.php) |

<a name="lua.ref.msys.base64.decode"></a>
## Name

msys.base64.decode — Decode a base64 encoded string

<a name="idp26188336"></a>
## Synopsis

`msys.base64.decode(encoded_text, charset);`

```
encoded_text: string
charset: string, optional
```
<a name="idp26191072"></a>
## Description

`encoded_text` is a base64 encoded string. This function returns the decoded bytes in a string. If the input cannot be decoded, it raises an error. By default, the character encoding for decoded text is UTF-8\. If the original text is not UTF-8, its character encoding must be specified using `charset` in order for the decoded text returned from this function to be UTF-8.

Enable this function with the statement `require('msys.base64');`.

<a name="idp26194816"></a>
## See Also

[msys.base64.encode](lua.ref.msys.base64.encode.php "msys.base64.encode")

| [Prev](lua.ref.msys.av.scan_part.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.base64.encode.php) |
| msys.av.scan_part  | [Table of Contents](index.php) |  msys.base64.encode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)