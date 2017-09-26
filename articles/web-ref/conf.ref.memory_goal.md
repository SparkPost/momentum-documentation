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

| memory_goal |
| [Prev](conf.ref.mdn_failures_notify.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.memory_hwm.php) |

<a name="conf.ref.memory_goal"></a>
## Name

memory_goal — configure physical memory usage goal

## Synopsis

`Memory_Goal = 90`

<a name="idp10356928"></a>
## Description

The memory_goal directive allows you to specify the maximum percentage of physical memory that should be used during normal operation. If this threshold is exceeded, the server will free up some resources to try to bring memory usage within acceptable bounds. The default value for this option is `90`.

It is possible for the server to exceed the memory_goal. Other than trying to free up some resources, no action is taken to stop the memory_goal from being exceeded. For a "harder" limit, see [memory_hwm](conf.ref.memory_hwm.php "memory_hwm").

<a name="idp10361216"></a>
## Scope

memory_goal is valid in the global scope.

<a name="idp10362816"></a>
## See Also

[memory_hwm](conf.ref.memory_hwm.php "memory_hwm")

| [Prev](conf.ref.mdn_failures_notify.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.memory_hwm.php) |
| mdn_failures_notify  | [Table of Contents](index.php) |  memory_hwm |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)