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

| msys.os.statvfs_subscribe |
| [Prev](lua.ref.msys.os.statvfs_read.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.qp.decode.php) |

<a name="lua.ref.msys.os.statvfs_subscribe"></a>
## Name

msys.os.statvfs_subscribe — Provide a "stream" for file system statistics (statvfs) updates

<a name="idp18327136"></a>
## Synopsis

`msys.os.statvfs_subscribe(path, interval);`

```
path: string
interval: number
```
<a name="idp18330144"></a>
## Description

This function provides a "stream" for statvfs updates. It guarantees minimal blocking and it is safe to call this function from the context of any thread (including the scheduler). A ec_statvfs_record_t object is returned by the following call:

`statvfs_record = msys.os.statvfs_subscribe("/tmp", 10)`

This function is discussed in more detail in [msys.os.statvfs_read](lua.ref.msys.os.statvfs_read.php "msys.os.statvfs_read").

Enable this function with the statement `require('msys.os');`.

<a name="idp18334992"></a>
## See Also

[msys.os.statvfs_read](lua.ref.msys.os.statvfs_read.php "msys.os.statvfs_read") and [ec_statvfs](https://support.messagesystems.com/docs/web-c-api/structs.ec_statvfs.php)

| [Prev](lua.ref.msys.os.statvfs_read.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.qp.decode.php) |
| msys.os.statvfs_read  | [Table of Contents](index.php) |  msys.qp.decode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)