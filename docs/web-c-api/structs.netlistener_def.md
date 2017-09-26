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

| 68.63. netlistener_def |
| [Prev](structs.mx_routes.php)  | Chapter 68. Structs |  [Next](structs.rfc2821_ctx.php) |

## 68.63. netlistener_def

This struct is defined as follows:

```
struct _netlistener_def {
  const char *prefix;
  const char *hashkey;
  EventFunc servercode;
  void *closure;
  unsigned skip:1;
  unsigned _spare:31;
  EventFunc accepthook;

  int opt_enable;
  int opt_file_mode;
  int opt_backlog;
  int opt_concurrency;
  int opt_accept_queue_backlog;
  int opt_events_per_iter;
  int opt_pool_name;
  int opt_recvbuf;
  int opt_sendbuf;
  int opt_disable_nagle;
  int opt_event_loop;
};
```

The following typedef applies to this data type:

`typedef int (*EventFunc) (struct _Event * event, int eventtype, void *closure, struct timeval * now);`

To use this struct, include the file `netlistener.h`.

### 68.63.1. See Also

[netlistener_register4](apis.netlistener_register4.php "netlistener_register4")

| [Prev](structs.mx_routes.php)  | [Up](structs.php) |  [Next](structs.rfc2821_ctx.php) |
| 68.62. mx_routes  | [Table of Contents](index.php) |  68.64. rfc2821_ctx |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)