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

| 68.9. connection |
| [Prev](structs.command_construct.php)  | Chapter 68. Structs |  [Next](structs.connection_handle.php) |

## 68.9. connection

This struct is defined as follows:

```
struct _connection
{
  int fd;                       /* The file descriptor! */
  int in_use;                   /* 0 = no, <0 trying, >0 using */
  smtp_state *state;             /* Current SMTP state */
  void *state_closure;          /* State's closure */
  int local_state;              /* State's local state */
  struct timeval statetime;     /* The first point in time for this state */
  struct timeval startdelivery; /* The first point in time for this state */
  int deliveries;               /* Number of deliveries that have happened */
  int esmtp;                    /* This connection is ESMTP */
  int addr_offset;              /* offset into host->addrs */
  domain_record *domain;        /* The domain to which we a alleged */
  mx_record *mx;                /* The MX record to which we are connected */
  ec_message *curr_message;       /* Current email_message being delivered on */
  Event *idle_fdevent;          /* The fd event still registered when idle */
  Event *death;                 /* The event that will kill us */
  unsigned int tcp_buffer;      /* tcp buffer size */
  ECDict capabilities;          /* remote mta capabilities set */
  ec_ssl_ctx_params tls_params;
  int tls_renegotiate;          /* TLS params changed since last msg on conn */
  int recipients; /* since 2.2.1.29, the number of 'rcpt to's issued */
};
```

To use this struct, include the file `dns_ds.h`.

### 68.9.1. See Also

[Section 68.10, “connection_handle”](structs.connection_handle.php "68.10. connection_handle")

| [Prev](structs.command_construct.php)  | [Up](structs.php) |  [Next](structs.connection_handle.php) |
| 68.8. command_construct  | [Table of Contents](index.php) |  68.10. connection_handle |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)