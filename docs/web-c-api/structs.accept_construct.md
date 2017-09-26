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

| 68.2. accept_construct |
| [Prev](structs.abstract_message.php)  | Chapter 68. Structs |  [Next](structs.address.php) |

## 68.2. accept_construct

This struct is defined as follows:

```
struct _accept_construct
{
  Event *death;

#if defined(EC_COMPAT_2_2_SOURCE) || defined(EC_COMPAT_2_1_SOURCE)
#define remote_address remote_addr.sa
#define remote_address_in remote_addr.sin
#define remote_address_in6 remote_addr.sin6
#define remote_address_un remote_addr.unixaddr
#define remote_address_union remote_addr
#endif
  ec_sockaddr remote_addr;
  union _accept_construct_closure {
    void *vptr;
  } accept_construct_closure;
  u_int8_t protocol;
  /** listener_inbound_sessions is only valid while the accept_construct
   * holds a reference to the underlying listener instance */
  cidrnode_ipv4 *listener_inbound_sessions;
  cidrnode_ipv6 *listener_inbound_sessions_ipv6;
  /** a counted reference; use netlistener_instance_addref() and
   * netlistener_instance_delref() when using this field */
  netlistener_instance *inst;
  message_id conn_id;
};

struct _netlistener_instance {
  struct _netlistener_def *def;

  const char *address;
  ec_listener_address la;

  /* active fd for this one */
  int fd;
  /* if fd==-1, holds the errno value
   * we encountered if we failed to start
   * this particular instance */
  int last_errno;
  /* indicates the context in which the last_errno
   * was encountered.  if it is NLSN_SYS_NEVER_ATTEMPTED,
   * then we've never attempted to start this listener.
   */
  enum _netlistener_instance_failed_syscall {
    NLSN_SYS_NEVER_ATTEMPTED,
    NLSN_SYS_SOCKET,
    NLSN_SYS_IOCTL,
    NLSN_SYS_BIND,
    NLSN_SYS_LISTEN
  } failed_syscall;

  /* if true, was created by looking at the config */
  unsigned from_config:1;
  /* transiently set during post-commit; if nothing re-sets this
   * bit, then the instance will be stopped. (this indicates that
   * the instance is no longer configured) */
  unsigned pending_cull:1;
  unsigned _spare:30;

  sem_t *accept_queue_backlog;
  nb_event_list *head;
  nb_event_list *tail;
  ec_atomic_t nb_event_list_lock;
  ec_atomic_t refcnt;
  cidrnode_ipv4 *inbound_sessions;
  cidrnode_ipv6 *inbound_sessions_ipv6;

  int events_per_iter;
  int enabled;
  int file_mode;
  int a_q_backlog;
  int jobclass;
  int recvbuf_size;
  int sendbuf_size;
  int disable_nagle;
  char *event_loop;
};
```

To use this struct, include the file `netlistener.h`.

### 68.2.1. See Also

[sieve_get_accept_construct](apis.sieve_get_accept_construct.php "sieve_get_accept_construct")

| [Prev](structs.abstract_message.php)  | [Up](structs.php) |  [Next](structs.address.php) |
| 68.1. abstract_message  | [Table of Contents](index.php) |  68.3. address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)