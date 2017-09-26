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

| 68.49. Event |
| [Prev](structs.eclist_node.php)  | Chapter 68. Structs |  [Next](structs.event_io_state.php) |

## 68.49. Event

This struct is defined as follows:

```
...
#define E_READ         0x00000001
#define E_WRITE        0x00000002
#define E_EXCEPTION    0x00000004
#define E_TIMEOUT      0x00000008
#define E_ASYNC        0x00000010

#define E_AGGRESSIVE_NONE 0
#define E_AGGRESSIVE_LOW  1
#define E_AGGRESSIVE_MED  2
#define E_AGGRESSIVE_HIGH 3
...
typedef struct ec_event_io_opset
{
  AcceptFunc event_accept;
  ReadFunc event_read;
  WriteFunc event_write;
  CloseFunc event_close;
  SendFileFunc  event_sendfile;
} event_io_opset;

struct _Event
{
  struct timeval trigger;
  void *io_data;
  event_io_opset *io_opset;
  int aggressive:4;
  int trace:1;
  int unused:27;
  int mask;
  int fd;
  EventFunc callback;
  void *closure;
  pthread_t scheduled_thread;
};
```

To use this struct, include the file `event.h`.

### 68.49.1. See Also

[ec_smtp_closeconn](apis.ec_smtp_closeconn.php "ec_smtp_closeconn"), [esmtp_message_factory](apis.esmtp_message_factory.php "esmtp_message_factory") and [Chapter 24, *Event Functions*](event.php "Chapter 24. Event Functions") 

| [Prev](structs.eclist_node.php)  | [Up](structs.php) |  [Next](structs.event_io_state.php) |
| 68.48. eclist_node  | [Table of Contents](index.php) |  68.50. event_io_state |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)