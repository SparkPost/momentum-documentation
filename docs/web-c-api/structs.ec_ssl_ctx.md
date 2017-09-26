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

| 68.43. ec_ssl_ctx |
| [Prev](structs.ec_spool_ctx.php)  | Chapter 68. Structs |  [Next](structs.ec_ssl_ctx_params.php) |

## 68.43. ec_ssl_ctx

This struct is defined as follows:

```
/* This callback allows message transports to augment the basic
 * TLS verification process.  You are passed the ec_ssl_ctx,
 * your own closure, the subject and issuer of the peer.
 * preverify_ok and x509ctx are passed through from the OpenSSL
 * verify callback */
typedef int (*ec_ssl_verify_callback_func)(ec_ssl_ctx *ctx,
  void *closure,
  int preverify_ok, const char *subject,
  const char *issuer,
  struct ssl_x509_store_ctx_st *x509ctx);

struct _ec_ssl_ctx {
  struct ssl_ctx_st *ssl_ctx;
  struct ssl_st *ssl;
  int error_code;
  char *error_string;
  ec_ssl_verify_callback_func verify_cb;
  void *verify_closure;
};
```

To use this struct, include the file `ec_ssl.h`.

### 68.43.1. See Also

[ec_ssl_set_verify_errmsg](apis.ec_ssl_set_verify_errmsg.php "ec_ssl_set_verify_errmsg")

| [Prev](structs.ec_spool_ctx.php)  | [Up](structs.php) |  [Next](structs.ec_ssl_ctx_params.php) |
| 68.42. ec_spool_ctx  | [Table of Contents](index.php) |  68.44. ec_ssl_ctx_params |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)