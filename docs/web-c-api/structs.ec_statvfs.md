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

| 68.45. ec_statvfs |
| [Prev](structs.ec_ssl_ctx_params.php)  | Chapter 68. Structs |  [Next](structs.ec_url_details.php) |

## 68.45. ec_statvfs

This struct is defined as follows:

```
/*
 * Portable statvfs structure. Note that "file system objects" refer to
 * files, directories, etc...
 */
struct ec_statvfs {
  unsigned int version;         /* Current ABI version.                   */
  uint64_t kilobytes_total;     /* Total number of kilobytes.             */
  uint64_t kilobytes_available; /* Kilobytes available for use.           */
  uint64_t objects_total;       /* Total number of objects available.     */
  uint64_t objects_available;   /* File system objects available for use. */
};
typedef struct ec_statvfs ec_statvfs_t;
```

To use this struct, include the file `misc/ec_statvfs.h`.

### 68.45.1. See Also

[msys.os.statvfs_read](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.os.statvfs_read.php)

| [Prev](structs.ec_ssl_ctx_params.php)  | [Up](structs.php) |  [Next](structs.ec_url_details.php) |
| 68.44. ec_ssl_ctx_params  | [Table of Contents](index.php) |  68.46. ec_url_details |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)