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

| msg:text_replace |
| [Prev](lua.ref.msg_text_match.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msgpart_addFirstChild.php) |

<a name="lua.ref.msg_text_replace"></a>
## Name

msg:text_replace — Streaming interface to a PCRE replacement of textual content from the message body

<a name="idp17001888"></a>
## Synopsis

`msg:text_replace(pattern, replacement);`

```
pattern: string
replacement: string
```
<a name="idp17004832"></a>
## Description

Streaming interface to a PCRE replacement of textual content from the message body. Only parts that have a 'text' mime type will be included in the search. Text parts will be iterated, transfer decoded and converted to UTF-8\. If a replacement is made, the revised text is converted back to the original charset for that part and the original transfer encoding applied, except in the case where the content was originally 7-bit clean and had no transfer encoding: if the replacement content is not 7-bit clean, transfer encoding will be added.

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msg_text_match.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_addFirstChild.php) |
| msg:text_match  | [Table of Contents](index.php) |  msgpart:addFirstChild |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)