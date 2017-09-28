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

| exclude_vctx |
| [Prev](conf.ref.eventloop.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.expensive_batch_assessment.php) |

<a name="conf.ref.exclude_vctx"></a>
## Name

exclude_vctx_mess, exclude_vctx_conn — Exclude validation context keys from being journaled in the spool metadata.

## Synopsis

`Exclude_VCTX_Mess = ("regex$" "otherregex")`
`Exclude_VCTX_Conn = ("regex$" "otherregex")`

<a name="idp9582912"></a>
## Description

With more advanced policy configurations, the aggregate size of the validation context data retained in memory may become significant, especially if `keep_message_dicts_in_memory` is enabled.

Both `Exclude_VCTX_Mess` and `Exclude_VCTX_Conn` allow you to specify a list of one or more Perl compatible regular expressions. During swap out, the keys to the message and connection dictionaries are compared against the patterns listed by the `Exclude_VCTX_Mess` and `Exclude_VCTX_Conn` respectively. If a key matches, then that data value will be deleted from the respective dictionary.

Note that keys that have special significance to the core product (these typically have a `#` prefix) can not be filtered by this module.

```
# filters all keys ending in _string from the per-message context
Exclude_VCTX_Mess = ( "_string$" )
```
<a name="idp9589968"></a>
## Scope

Exclude_VCTX_Mess and Exclude_VCTX_Conn are valid in the global, binding, binding_group and domain scopes.

<a name="idp9591680"></a>
## See Also

[keep_message_dicts_in_memory](conf.ref.keep_message_dicts_in_memory.php "keep_message_dicts_in_memory") and [Chapter 6, *Validation Context Variables*](policy.context.variables.php "Chapter 6. Validation Context Variables") 

| [Prev](conf.ref.eventloop.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.expensive_batch_assessment.php) |
| eventloop  | [Table of Contents](index.php) |  expensive_batch_assessment |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)