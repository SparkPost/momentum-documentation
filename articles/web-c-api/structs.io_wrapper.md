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

| 68.56. io_wrapper |
| [Prev](structs.io_object.php)  | Chapter 68. Structs |  [Next](structs.logging_infrastructure_1.php) |

## 68.56. io_wrapper

This struct is defined as follows:

```
struct _io_wrapper {
  size_t sizeof_self;
  int (*open)(io_object *io, const char *filename, int options, int mode);
  ssize_t (*write)(io_object *io, const char *buf, size_t nbytes);
  ssize_t (*writev)(io_object *io, const struct iovec *iov, int iovcnt);
  ssize_t (*read)(io_object *io, void *buf, size_t nbytes);
  ssize_t (*readv)(io_object *io, const struct iovec *iov, int iovcnt);
  int (*close)(io_object *io);
  int (*reopen)(io_object *io);
  int (*flush)(io_object *io);
  off_t (*lseek)(io_object *io, off_t offset, int whence);
  int (*supports_nonblocking)(io_object *io);
  int (*pollable_fd)(io_object *io);
  char *scheme;
  off_t (*get_size)(io_object *io);
  /** @since 2.2.1.24 */
  io_object *(*cloner)(io_object *io);
};

struct _io_job {
  ec_async_job job;
  const char *filename;
  string *buffer;
  int errorcode;
  enum _io_job_status {
    IOJ_MISUSED, /* job->buffer was not populated */
    IOJ_OPEN_FAILED, /* failed to open the resource */
    IOJ_READ_FAILED, /* a read call failed */
    IOJ_STORE_FAILED, /* failed to buffer a chunk from the resource */
    IOJ_COMPLETED /* all done */
  } status;
};
```

To use this struct, include the file `io_wrapper.h`.

### 68.56.1. See Also

[Section 68.55, “io_object”](structs.io_object.php "68.55. io_object") and [Chapter 30, *io_wrapper Functions*](io_wrapper.php "Chapter 30. io_wrapper Functions") 

| [Prev](structs.io_object.php)  | [Up](structs.php) |  [Next](structs.logging_infrastructure_1.php) |
| 68.55. io_object  | [Table of Contents](index.php) |  68.57. logging_infrastructure_1 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)