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

| unlink_on_spool_in_failure |
| [Prev](conf.ref.umem_reap_interval.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.unsafe_spool.php) |

<a name="conf.ref.unlink_on_spool_in_failure"></a>
## Name

unlink_on_spool_in_failure — Whether or not to remove malformed messages

## Synopsis

`unlink_on_spool_in_failure = true`

<a name="idp27263440"></a>
## Description

When Momentum encounters a malformed message in the spool that cannot be read in, if this option is `true`, the message will be removed from the spool. If it is `false` the message will be ignored until the next Momentum restart. You would only want to set this to `false` if you encountered recurring spool in failures for different message IDs; this would allow the broken messages to be retained for analysis by Message Systems support.

The default value is `true`.

<a name="idp27267904"></a>
## Scope

`unlink_on_spool_in_failure` is valid in the global scope.

| [Prev](conf.ref.umem_reap_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.unsafe_spool.php) |
| umem_reap_interval  | [Table of Contents](index.php) |  _unsafe_spool |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)