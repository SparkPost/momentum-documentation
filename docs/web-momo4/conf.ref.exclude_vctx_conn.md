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

| exclude_vctx_conn |
| [Prev](conf.ref.events_per_iter.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.exclude_vctx_mess.php) |

<a name="conf.ref.exclude_vctx_conn"></a>
## Name

exclude_vctx_conn — exclude validation context keys from being journaled in the spool metadata.

## Synopsis

`Exclude_VCTX_Conn = ("regex$" "otherregex")`

<a name="idp24645824"></a>
## Description

With more advanced policy configurations, the aggregate size of the validation context data retained in memory may become significant, especially if `keep_message_dicts_in_memory` is enabled.

`Exclude_VCTX_Conn` allows you to specify a list of one or more Perl-compatible regular expressions. During swap out, the keys to the connection dictionary are compared against the patterns listed by `Exclude_VCTX_Conn`. If a key matches, then that data value will be deleted from the dictionary.

Note that keys that have special significance to the core product (these typically have a `#` prefix) can not be filtered by this module.

<a name="idp24651184"></a>
## Scope

Exclude_VCTX_Conn is valid in the global, binding, binding_group, and domain scopes.

<a name="idp24653056"></a>
## See Also

[exclude_vctx_mess](conf.ref.exclude_vctx_mess.php "exclude_vctx_mess"), [keep_message_dicts_in_memory](conf.ref.keep_message_dicts_in_memory.php "keep_message_dicts_in_memory")

| [Prev](conf.ref.events_per_iter.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.exclude_vctx_mess.php) |
| events_per_iter  | [Table of Contents](index.php) |  exclude_vctx_mess |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)