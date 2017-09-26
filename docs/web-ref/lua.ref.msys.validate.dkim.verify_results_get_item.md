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

| msys.validate.dkim.verify_results_get_item |
| [Prev](lua.ref.msys.validate.dkim.verify_results_get_count.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.validate.dkim.verify_status_to_string.php) |

<a name="lua.ref.msys.validate.dkim.verify_results_get_item"></a>
## Name

msys.validate.dkim.verify_results_get_item — Return the DKIM signature result at the specified index

<a name="idp27237440"></a>
## Synopsis

`msys.validate.dkim.verify_results_get_item(results, index_value);`

```
results: string
index_value: number
```
<a name="idp27240192"></a>
## Description

Return the DKIM signature result at the specified index. For an example of how this function is used see [Example 15.36, “msys.dkim.get_verify_results”](lua.ref.msys.validate.dkim.get_verify_results.php#lua.ref.msys.validate.dkim.get_verify_results.example "Example 15.36. msys.dkim.get_verify_results").

**Configuration Change. ** This feature is available as of version 3.5.

*Note*: If results is nil then error is `"No verification results to get item from`" and if index_value is nil then error is `Index value not specified`" and if index_value is greater than the size of results then error is "`Index value is greater than the number of verification results`".

This function is valid in the validate_data_spool, data and data_spool_each_rcpt phases. Enable this function with the statement `require('msys.validate.dkim');`.

<a name="idp27248688"></a>
## See Also

[msys.validate.dkim.get_verify_results](lua.ref.msys.validate.dkim.get_verify_results.php "msys.validate.dkim.get_verify_results"), [msys.validate.dkim.verify_results_get_count](lua.ref.msys.validate.dkim.verify_results_get_count.php "msys.validate.dkim.verify_results_get_count"), [msys.validate.dkim.verify_status_to_string](lua.ref.msys.validate.dkim.verify_status_to_string.php "msys.validate.dkim.verify_status_to_string")

| [Prev](lua.ref.msys.validate.dkim.verify_results_get_count.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.validate.dkim.verify_status_to_string.php) |
| msys.validate.dkim.verify_results_get_count  | [Table of Contents](index.php) |  msys.validate.dkim.verify_status_to_string |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)