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

| use_iflist_cache |
| [Prev](conf.ref.unsafe_spool.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.use_mmap.php) |

<a name="conf.ref.use_iflist_cache"></a>
## Name

use_iflist_cache — Whether or not to cache the list of network interfaces configured by the system

## Synopsis

`use_iflist_cache = 0`

<a name="idp7098048"></a>
## Description

This option determines whether or not to use cached information about the state of the network interfaces; namely which ones are in use and their state.

The default value for this option is `0`. When this option is off and DuraVIP™ is in use, Momentum must traverse the entire list of interfaces. Enable this option if you are using a large number of DuraVIP™s.

Changing the value of this options at runtime requires restarting the ecelerity process–issuing the ec_console command **config reload**        will not suffice.

<a name="idp7102848"></a>
## Scope

`use_iflist_cache` is valid in the global scope.

<a name="idp7104880"></a>
## See Also

[Section 7.2, “DuraVIP™”](cluster.config.duravip.php "7.2. DuraVIP™")

| [Prev](conf.ref.unsafe_spool.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.use_mmap.php) |
| _unsafe_spool  | [Table of Contents](index.php) |  Use_MMAP |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)