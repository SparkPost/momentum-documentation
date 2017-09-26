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

| 68.85. string |
| [Prev](structs.sp_async_message.php)  | Chapter 68. Structs |  [Next](structs.validate_context.php) |

## 68.85. string

This struct is a typedef of `_ec_string`. It is defined in the following way:

```
struct _ec_string {
  int len;
  int allocd;
  char *buffer;
  int type;
    /** stored using malloc(3C) memory */
#define STRING_TYPE_MALLOC MEMTYPE_IS_MALLOC_3C
    /** stored using ECMEMTYPE_STRING */
#define STRING_TYPE_ECSTRING MEMTYPE_STRING
    /** stored using ECMEMTYPE_MESSAGE_BODY */
#define STRING_TYPE_MESSAGE_BODY MEMTYPE_MESSAGE_BODY
    /** MEMTYPE_SIEVE backed string.  All strings in sieve are utf-8 encoded */
#define STRING_TYPE_SIEVE MEMTYPE_SIEVE
    /* stored in externally managed memory that cannot grow */
#define STRING_TYPE_STATIC -100
    /** stored in ECMEMTYPE_STRING until a threshold is crossed;
     * memory is then written to disk */
#define STRING_TYPE_DISK_BACKED -101
    /** written directly to the backing */
#define STRING_TYPE_IO_OBJECT -102
    /** stored in a chain of growbufs */
#define STRING_TYPE_GROWBUF -103
    /** start with a static buffer, but switch to STRING_TYPE_ECSTRING if
     * we need to grow beyond its bounds */
#define STRING_TYPE_GROWABLE_STATIC -104
  io_object *backing;
};
```

To use this struct, include the file `misc/ec_string.h`.

### 68.85.1. See Also

[string_init_type](apis.string_init_type.php "string_init_type")

| [Prev](structs.sp_async_message.php)  | [Up](structs.php) |  [Next](structs.validate_context.php) |
| 68.84. sp_async_message  | [Table of Contents](index.php) |  68.86. validate_context |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)