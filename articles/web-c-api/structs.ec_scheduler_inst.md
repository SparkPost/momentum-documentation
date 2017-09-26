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

| 68.41. ec_scheduler_inst |
| [Prev](structs.ec_ptr_array.php)  | Chapter 68. Structs |  [Next](structs.ec_spool_ctx.php) |

## 68.41. ec_scheduler_inst

This struct is defined as follows:

```
typedef struct _scheduler_impl {
  char *name;
  unsigned sizeof_scheduler_impl;
#define EC_SCHEDULER_INIT(name) name, sizeof(struct _scheduler_impl)
  struct _ec_scheduler_inst *(*init)(RecurFunc recurring,
     int (*nprepoll) (struct timeval *, struct timeval *),
     void (*npostpoll) (struct timeval *), int flags);
  pid_t (*get_pid)(struct _ec_scheduler_inst *);
  void (*get_fd_event_set)(struct _ec_scheduler_inst *, Event ***set, int *count);
  void (*get_floating_event_set)(struct _ec_scheduler_inst *, Event ***set, int *count);
  void (*get_timeheap)(struct _ec_scheduler_inst *, Skiplist **sl);
  Event * (*get_current_dispatch)(struct _ec_scheduler_inst *);
  int (*get_scheduler_iteration)(struct _ec_scheduler_inst *);
  int (*is_scheduler_thread)(struct _ec_scheduler_inst *);
  void (*float_event)(struct _ec_scheduler_inst *, Event *);
  void (*unfloat_event)(struct _ec_scheduler_inst *, Event *);
  void (*schedule_event)(struct _ec_scheduler_inst *, Event *);
  int (*clear_timed_event)(struct _ec_scheduler_inst *, Event *);
  Event * (*clear_event_by_fd)(struct _ec_scheduler_inst *, int);
  Event * (*get_event_by_fd)(struct _ec_scheduler_inst *, int);
  int (*update_event_mask_by_fd)(struct _ec_scheduler_inst *, int fd, int op, int newmask, int *oldmask);
  int (*scheduler_eventloop)(struct _ec_scheduler_inst *);
  void (*ping_scheduler)(struct _ec_scheduler_inst *);

  int relax_shutdown_assertions;
  /* For ABI change when adding ec_scheduler_inst */
  int abi_change_for_ec_scheduler_inst;
} ec_scheduler_impl;

struct sch_recurrent_list {
  RecurFunc tocall;
  void *closure;
  struct sch_recurrent_list *next;
};

typedef struct _ec_scheduler_inst {
  ec_scheduler_impl *impl;
  void *closure;
  int master_scheduler;
  ec_config_header *cached_cfghdr;
  struct timeval cached_cfghdr_updated;
  struct sch_recurrent_list *scheduler_recurrent_functions;
  int fifo_initialized;
  ck_fifo_spsc_t pending CK_CC_CACHELINE;
  ec_atomic64_t num_pending;
  int max_pending;
  struct timeval now;
  ec_atomic64_t events_scheduled;
} ec_scheduler_inst;
```

To use this struct, include the file `scheduler.h`.

### 68.41.1. See Also

[get_fd_event_set](apis.get_fd_event_set.php "get_fd_event_set") and [Section 68.21, “ec_config_header”](structs.ec_config_header.php "68.21. ec_config_header")

| [Prev](structs.ec_ptr_array.php)  | [Up](structs.php) |  [Next](structs.ec_spool_ctx.php) |
| 68.40. ec_ptr_array  | [Table of Contents](index.php) |  68.42. ec_spool_ctx |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)