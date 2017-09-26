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

| msys.pcre.match |
| [Prev](lua.ref.msys.gcm.gcm_get_result_error_code.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.pcre.replace.php) |

<a name="lua.ref.msys.pcre.match"></a>
## Name

msys.pcre.match — Perform a PCRE regex match operation

<a name="idp26781760"></a>
## Synopsis

`msys.pcre.match(subject, pattern);`

```
subject: string
pattern: string
```
<a name="idp26784464"></a>
## Description

Perform a PCRE regex match operation. Captures return their matches in numeric order and are referenced using the numeric index preceded by a dollar sign. The first capture is referenced using `$1`, the second using `$2` and so on. Pass in the string to be matched and the PCRE regex pattern to match against.

This function returns three values:

`matches, errstr, errnum = msys.pcre.match(subject, pattern);`

The return values are as follows:

*   `matches` nil if no matches were found, otherwise a table consisting of the following indices:

    *   `0` complete matched portion of the string

    *   `1` the first capture subexpression

    *   `2` the second capture subexpression

    *   `...` additional capture subexpression

    If named captures, (?P<name>....), were used in the pattern, then the names will be also be keys in the table, with their values set to the value of the appropriate subexpression.

*   `errstr` if there was a failure during compilation of the regex, this string will contain the error message

*   `errnum` this will contain a numeric representation of the error condition

Enable this function with the statement `require('msys.pcre')`.

<a name="idp26800256"></a>
## See Also

[Section 3.10.5, “Using Regular Expressions with the Policy Editor”](web3.policy.editor.php#web3.policy.editor.regex "3.10.5. Using Regular Expressions with the Policy Editor"), [msys.pcre.split](lua.ref.msys.pcre.split.php "msys.pcre.split"), [msys.pcre.replace](lua.ref.msys.pcre.replace.php "msys.pcre.replace")

| [Prev](lua.ref.msys.gcm.gcm_get_result_error_code.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.pcre.replace.php) |
| msys.gcm.gcm_get_result_error_code  | [Table of Contents](index.php) |  msys.pcre.replace |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)