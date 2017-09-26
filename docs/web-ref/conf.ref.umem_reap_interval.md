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

| umem_reap_interval |
| [Prev](conf.ref.transform_8bitmime_content.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.unlink_on_spool_in_failure.php) |

<a name="conf.ref.umem_reap_interval"></a>
## Name

umem_reap_interval — how often to release unused memory

## Synopsis

`umem_reap_interval = 1800`

<a name="idp12329632"></a>
## Description

The ecelerity process uses a memory management system called libumem, which allocates memory for different tasks from a number of pools. When a pool does not have enough space to perform an allocation, umem will request more memory from the operating system (OS); however, when memory is released, umem does not immediately return it to the OS, since chances are we will need to use it again soon. Every Umem_Reap_Interval seconds, a thread looks at the umem memory pools to see if unused memory should be returned to the OS. This setting should not normally need to be changed.

The default value for this option is `1800`.

<a name="idp12332752"></a>
## Scope

umem_reap_interval is valid in the global scope.

| [Prev](conf.ref.transform_8bitmime_content.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.unlink_on_spool_in_failure.php) |
| transform_8bitmime_content  | [Table of Contents](index.php) |  unlink_on_spool_in_failure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)