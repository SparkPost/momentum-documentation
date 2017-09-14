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

| 11.3. Case-insensitive Comparisons |
| [Prev](enhanced.dynamic.content.lists.php)  | Chapter 11. Enhanced Dynamic Content |  [Next](extending.message.template.php) |

## 11.3. Case-insensitive Comparisons

**Configuration Change. ** This feature is available as of version 3.5.

As of version 3.5, the Dynamic Content Macro supports case insensitive comparisons. The default comparison is case sensitive. For a case-insensitive comparison, use the key word `ivalue` instead of `value`. Do this in the following way:

```
[% if field='fieldname' ivalue='VALUE1' %]
  (any sort of templating code can go here)

[% elsif field='fieldname'  ivalue='VaLuE2' %]
  (any sort of templating code can go here)

[% else %]
  (any sort of templating code can go here)

[% endif %]
```

| [Prev](enhanced.dynamic.content.lists.php)  | [Up](enhanced.dynamic.content.php) |  [Next](extending.message.template.php) |
| 11.2. Using Lists as Arguments in a Dynamic Content Macro  | [Table of Contents](index.php) |  Chapter 12. Extending the Base Templating Facilities |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)