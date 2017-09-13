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

| 68.44. ec_ssl_ctx_params |
| [Prev](structs.ec_ssl_ctx.php)  | Chapter 68. Structs |  [Next](structs.ec_statvfs.php) |

## 68.44. ec_ssl_ctx_params

This struct is defined as follows:

```
/* this struct is passed to core_get_outbound_tls_parameters_hook() */
struct _ec_ssl_ctx_params {
  int use_tls;
  int tls_verify;
  /* these strings are either NULL pointers or are
   * allocated using MEMTYPE_STRING.
   * use ec_ssl_set_ctx_param() to set them; it will
   * correctly manage the memory for you. */
  char *certfile;
  char *keyfile;
  char *ca;
  char *cipherlist;
};
```

To use this struct, include the file `ec_ssl.h`.

### 68.44.1. See Also

[ec_ssl_set_ctx_param](apis.ec_ssl_set_ctx_param.php "ec_ssl_set_ctx_param")

| [Prev](structs.ec_ssl_ctx.php)  | [Up](structs.php) |  [Next](structs.ec_statvfs.php) |
| 68.43. ec_ssl_ctx  | [Table of Contents](index.php) |  68.45. ec_statvfs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)