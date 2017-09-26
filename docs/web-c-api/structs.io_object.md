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

| 68.55. io_object |
| [Prev](structs.http_session.php)  | Chapter 68. Structs |  [Next](structs.io_wrapper.php) |

## 68.55. io_object

This struct is defined as follows:

```
struct _io_mem {
  char *buf;
  size_t len;
  int memtype;
  ec_atomic_t ref;
};

struct _io_object {
  io_wrapper *methods;
  ec_atomic_t ref;
  char *scheme;
  char *path;
  int mode;
  int options;
  union {
    int fd;
    void *handle;
    struct {
      struct _io_mem *memory;
      off_t pos;
      int fd_for_sendfile;
    } mem;
  } io;
  void (*on_destroy)(io_object *io);
  /* app_closure is for application usage; it is invalid
   * for an io_wrapper to touch app_closure */
  void *app_closure;
  string *readbuf;
  int readbufpos;
  ECDict context;
};
```

To use this struct, include the file `io_wrapper_int.h`.

### 68.55.1. See Also

[ec_spool_ctx_filter_open](apis.ec_spool_ctx_filter_open.php "ec_spool_ctx_filter_open"), [io_wrapper_open](apis.io_wrapper_open.php "io_wrapper_open")and [Section 68.56, “io_wrapper”](structs.io_wrapper.php "68.56. io_wrapper")

| [Prev](structs.http_session.php)  | [Up](structs.php) |  [Next](structs.io_wrapper.php) |
| 68.54. http_session  | [Table of Contents](index.php) |  68.56. io_wrapper |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)