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

| response_transcode_replace |
| [Prev](conf.ref.response_transcode_pattern.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.retry_interval.php) |

<a name="conf.ref.response_transcode_replace"></a>
## Name

response_transcode_replace — the replacement string for a server response

## Synopsis

Response_Transcode_Replace = "*`replacement_string`*"

<a name="idp11234880"></a>
## Description

### Note

This feature requires the response_transcode module. See [Section 14.58, “response_transcode – Module”](modules.response_transcode.php "14.58. response_transcode – Module") for more information.

When the SMTP response from a remote sever indicates an error—the response code falls in the range 400 to 599—then that response is compared to the Response_Transcode_Pattern regex. If it matches, the response is replaced with the string in Response_Transcode_Replace; dollar variable expansion is performed, so the entire matching response can be substituted with $0 and the strings matched by grouping parentheses in the regex with $1, $2 and so on. The replacement response is used for deciding what to do with the message next, how it is logged and bounce processed.

### Warning

Since it is possible to rewrite permanent errors as temporary errors, use this module carefully. Resubmitting mail that a remote server has already rejected with a permanent error can be seen as a hostile action.

This option is used in conjunction with the Response_Transcode_Pattern option. See below for an example pairing:

```
Response_Transcode_Pattern = "454 no such user ('.*')"
Response_Transcode_Replace = "554 no such user $1"
```

In this case a 'soft' bounce is converted to a 'hard' bounce so that there are no further delivery attempts.

<a name="idp11241232"></a>
## Scope

This option is valid in the binding, binding_group, domain and global scopes.

<a name="idp11242912"></a>
## See Also

[response_transcode_pattern](conf.ref.response_transcode_pattern.php "response_transcode_pattern")

| [Prev](conf.ref.response_transcode_pattern.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.retry_interval.php) |
| response_transcode_pattern  | [Table of Contents](index.php) |  retry_interval |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)