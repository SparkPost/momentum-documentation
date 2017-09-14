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

| expensive_batch_assessment |
| [Prev](conf.ref.exclude_vctx_mess.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.force_fsync.php) |

<a name="conf.ref.expensive_batch_assessment"></a>
## Name

expensive_batch_assessment — only treat messages as different if the headers are rendered differently

## Synopsis

`expensive_batch_assessment = false`

<a name="idp24681984"></a>
## Description

When looking for messages that can be delivered as a batch, Momentum checks the headers and bodies of every MIME part of messages that were submitted as a batch—a batch being one transaction with multiple RCPT TOs. Normally, if the bodies or headers have been modified since reception, the messages are treated as different. Enabling `expensive_batch_assessment` renders the headers from each message to strings, and compares the strings, only treating the messages as different if the headers render differently. This enables messages with (identical) header modifications to be sent out in a batch, at the expense of more CPU load and IO. You should only enable this option if you are doing header modification using DKIM signing, for example, and you want batched outbound delivery to continue to work despite this.

The default value is `false`.

<a name="idp24686016"></a>
## Scope

expensive_batch_assessment is valid in the global scope.

| [Prev](conf.ref.exclude_vctx_mess.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.force_fsync.php) |
| exclude_vctx_mess  | [Table of Contents](index.php) |  force_fsync |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)