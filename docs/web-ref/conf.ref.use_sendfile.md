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

| Use_SendFile |
| [Prev](conf.ref.use_mmap.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.user.php) |

<a name="conf.ref.use_sendfile"></a>
## Name

Use_SendFile — use sendfile() when sending mail

## Synopsis

`Use_SendFile = false`

`Use_SendFile = true`

<a name="idp12412496"></a>
## Description

When set to true, Momentum will attempt to use `sendfile` ), (or other system dependent equivalent) to efficiently send mail to a remote MTA. This typically means that the system will either pull data directly from disk using a form of memory mapped IO, or use a zero copy mechanism to reduce the number of user-space to kernel mode transitions and memory bus overhead that would otherwise be required to push the data through the system.

The default for this option is `false`. This option should be set dependent on the performance and stability of `sendfile` on your system. Unix systems typically also require that `Use_MMAP` also be enabled for this to take effect.

<a name="idp12416912"></a>
## Scope

use_sendfile is valid in the global scope.

<a name="idp12418544"></a>
## See Also

[Use_MMAP](conf.ref.use_mmap.php "Use_MMAP")

| [Prev](conf.ref.use_mmap.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.user.php) |
| Use_MMAP  | [Table of Contents](index.php) |  user |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)