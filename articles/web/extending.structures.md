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

| 16.1. Momentum Data Structures |
| [Prev](c.sdk.php)  | Chapter 16. Extending Momentum using C |  [Next](extending.module.php) |

## 16.1. Momentum Data Structures

### 16.1.1. DNS system

There is a complex, integrated caching nameserver in Momentum and its data structures are inherently tied with the queues, messages, connections, and events that make the system go.

```
typedef struct _domain_record domain_record;
typedef struct _mx_record mx_record;
typedef struct _host_record host_record;
typedef struct _address_list address_list;
typedef struct _address address;
typedef struct _connection connection;
typedef struct _connection_handle connection_handle;

typedef enum
{
  dns_mx_nodata,
  dns_mx_list,
  dns_mx_broken
}
mxtype;

struct _mx_record
{
  unsigned short pref;      /* The preference of this MX */
  unsigned short conncnt;   /* How many of the host's connections are ours */
  int deliveries;           /* Number of deliveries to this MX */
  host_record *host;        /* The host behind this MX */
};

struct _host_record
{
  char *name;                   /* Hostname */
  u_int64_t expiry;             /* Absolute Unix timestamp of expiration */
  u_int32_t domaincnt;          /* Number of domains referencing this host */
  u_int32_t domainsz;           /* Size of domainlist array */
  short conncnt;                /* Number connections used (can have holes) */
  short connsz;                 /* Size of connections array */
  u_int32_t deliveries;         /* Number of deliveries to this host */
  connection *connections;      /* Connections array */
  RSplayTree *bound_connections;/* Connections for explicit bindings */
  address_list *addrs;          /* List of A record IP addresses */
  domain_record **domainlist;   /* Domain reference array */
};

struct _domain_record
{
  char *domain;                  /* Domain name */
  u_int64_t expiry;              /* Expiry as an absolute time_t */
  unsigned int recycled:1;       /* Is this domain recycled (in the drbhash) */
  unsigned short referencecnt;   /* Is referenced by any outstandings
                                    (deliveries in progress) */
  u_int32_t deliveries;          /* Number of deliveries */
  u_int32_t failures;            /* Number of failures */
  int throttle_cap;              /* Outbound throttle cap */
  struct timeval throttle_epoch; /* Throttle start */
  mxtype type;                   /* MX type () */
  int mxcnt;                     /* Number of MX records */
  mx_record **mxlist;            /* List of MXs */
  mail_queue equeue;             /* Mail Queue */
  u_int8_t dns_failures;         /* Number of sequential DNS failures */
  u_int8_t connection_failures;  /* Number of sequential connection failures */
  struct timeval last_delivery;  /* last delivery on this domain */
};

struct _connection
{
  int fd;                       /* The file descriptor! */
  int in_use;                   /* 0 = no, <0 trying, >0 using */
  int state;                    /* CONN_{state}_{W,R} */
  struct timeval statetime;     /* The first point in time for this state */
  struct timeval startdelivery; /* The first point in time for this state */
  int deliveries;               /* Number of deliveries that have happened */
  int esmtp;                    /* This connection is ESMTP */
  int addr_offset;              /* offset into host->addrs */
  domain_record *domain;        /* The domain to which we a alleged */
  mx_record *mx;                /* The MX record to which we are connected */
  email_message *curr_message;  /* Current email_message being delivered on */
  Event *idle_fdevent;          /* The fd event still registered when idle */
  Event *death;                 /* The event that will kill us */
  unsigned int tcp_buffer;      /* tcp buffer size */
};

struct _connection_handle
{
  host_record *host;            /* host record to which this conn belongs */
  int binding_slot;             /* binding from which it was connected */
  int offset;                   /* host->connections[offset] is what we want */
  void *user_data;              /* This is populated by initiate_connection */
};

struct _address_list
{
  u_int32_t cnt;
  address addresses[1];         /* This could have cnt elements..
                                   just malloc big */
};

struct _address
{
  u_int8_t family;              /* AF_INET or AF_INET6 */
  union {
    struct in_addr inaddr;      /* IPv4 address */
    struct in6_addr inaddr6;    /* IPv6 address */
  };
  struct timeval failure;       /* last failure time */
  float avg_connecttime;        /* average time to connect */
  float avg_deliverytime;        /* average time to connect */
};
```

### 16.1.2. The Email Message and Derivatives

Each email message is internally represented as one of two types of structures: the `email_message` and its reduced-memory sibling, the `short_message`. Both have the beginning portion of their structures in common. This common structure is an `abstract_message`.

Most general functions that take an email message structure as an argument accept that argument as a pointer to an `abstract_message` as the type and a more complete representation of the data structure can be extrapolated.

**16.1.2.1. Types and Defines**
```
typedef struct _abstract_message abstract_message;
typedef struct _short_message short_message;
typedef struct _email_message email_message;
typedef struct _message_id message_id;

struct _message_id
{
  unsigned int slot;            /* 32 LSB of the time in seconds */
  unsigned short pid;           /* PID of this process */
  unsigned short counter;       /* globally incremented counter */
};
```
**16.1.2.2. Abstract Message**

Both email_message and short_message have a certain set of attributes that are identical in name, size and offset. These "common" attributes are represented in a "lowest common denominator" structure called an abstract message.

```
struct _abstract_message
{
  message_id id;                    /* Unique identifier for this message */
  u_int8_t type;                    /* EM_SHORT_MESSAGE, EM_EMAIL_MESSAGE */
  /* This stuff changes on ever delivery attempt */
  u_int32_t num_retries;            /* The number of delivery retries */
  struct timeval creation_time;     /* Time when the message entered ec */
  struct timeval next_attempt;      /* Transient... time of next attempt */
  struct timeval final_time;        /* Time of delivery */
  u_int16_t code_len;               /* number of bytes in the "code" */
  u_int8_t swapped;                 /* SPOOL_MEM, SPOOL_SWAP, etc. */
  u_int8_t stage:4;
  u_int8_t reserved:4;
  u_int8_t delivered:2;             /* EM_TRYING, EM_SUCCEEDED, EM_FAILED */
  u_int8_t delivered_class:6;       /* EC_DT_SMTP, EC_DT_LOCAL, etc. */
};
```
**16.1.2.3. Short Message**

The `short_message` structure is used internally by Momentum to conserve space over the larger, more complete `email_message` structure. This short form notably lacks sender, recipient and the contents of the mail itself. While Momentum reserves the right to pass this short form into any function that accepts an abstract message type, it is usually only the case for messages that have had several transient failures.

Momentum can attempt delivery on the short form of the message and if a connection can be made to a responsible mail exchange, then the message will be reinstated in its full form (as an `email_message`.)

```
struct _short_message
{
  message_id id;                    /* Unique identifier for this message */
  u_int8_t type;                    /* EM_SHORT_MESSAGE, EM_EMAIL_MESSAGE */
  /* This stuff changes on ever delivery attempt */
  u_int32_t num_retries;            /* The number of delivery retries */
  struct timeval creation_time;     /* Time when the message entered ec */
  struct timeval next_attempt;      /* Transient... time of next attempt */
  struct timeval final_time;        /* Time of delivery */
  u_int16_t code_len;               /* number of bytes in the "code" */
  u_int8_t swapped;                 /* SPOOL_MEM, SPOOL_SWAP, etc. */
  u_int8_t stage:4;
  u_int8_t reserved:4;
  u_int8_t delivered:2;             /* EM_TRYING, EM_SUCCEEDED, EM_FAILED */
  u_int8_t delivered_class:6;       /* EC_DT_SMTP, EC_DT_LOCAL, etc. */

/* Begin variation */
  int binding_slot;
  char *code;                   /* Delivery response code from server */
  domain_record *domain;        /* The domain for this message */
};
```
**16.1.2.4. Email Message**

The `email_message` structure contains all information required to completely deliver an email message. The mailfrom field, if not null, is required to be a fully compliant (RFC 821/2821) SMTP MAIL FROM: command including the trailing `CR LF` and is not null terminated. Likewise, the rcptto field, if not null, is required to be a fully compliant SMTP RCPT TO: command including the trailing `CR LF` and is not null terminated. The body field, if not null, contains a fully compliant (RFC 822/2822) Internet email message with a trailing `CR LF . CR LF` and will not be null terminated.

The swapped field indicates the nature of the message in memory relative to its on-disk representation.

<dl class="variablelist">

<dt>`SPOOL_INCOMPLETE`</dt>

<dd>

The message is not fully constructed.

</dd>

<dt>`SPOOL_MEM`</dt>

<dd>

no backing-store exists on disk.

</dd>

<dt>`SPOOL_SWAP`</dt>

<dd>

the backing-store on disk matches that in memory.

</dd>

<dt>`SPOOL_DISK`</dt>

<dd>

the backing-store is newer than that in memory.

</dd>

</dl>

```
struct _email_message
{
  message_id id;                    /* Unique identifier for this message */
  u_int8_t type;                    /* EM_SHORT_MESSAGE, EM_EMAIL_MESSAGE */
  /* This stuff changes on ever delivery attempt */
  u_int32_t num_retries;            /* The number of delivery retries */
  struct timeval creation_time;     /* Time when the message entered ec */
  struct timeval next_attempt;      /* Transient... time of next attempt */
  struct timeval final_time;        /* Time of delivery */
  u_int16_t code_len;               /* number of bytes in the "code" */
  u_int8_t swapped;                 /* SPOOL_MEM, SPOOL_SWAP, etc. */
  u_int8_t stage:4;
  u_int8_t reserved:4;
  u_int8_t delivered:2;             /* EM_TRYING, EM_SUCCEEDED, EM_FAILED */
  u_int8_t delivered_class:6;       /* EC_DT_SMTP, EC_DT_LOCAL, etc. */

/* This stuff doesn't change, but is in the "message meta data only */
  u_int16_t mailfrom_len;           /* number of bytes in the "mailfrom" */
  u_int16_t rcptto_len;             /* number of bytes in the "rcptto" */
  u_int32_t body_len;               /* number of bytes in the "body" */
  u_int8_t received_family;         /* AF_INET or AF_INET6 */
  union {
    struct in_addr addr4;           /* IPv4 address of reception */
    struct in6_addr addr6;          /* IPv6 address of reception */
  } received_from;
  char recv_method;                 /* P_ESMTP, P_ECSTREAM */
  char *mailfrom;                   /* full MAIL FROM: line */
  char *rcptto;                     /* full RCPT TO: line */
  char *code;                       /* Delivery response code from server */
  char *body;                       /* Message body (header+body+&#730;.&#730;*/
  /* Below here we would never write out regardless */
  int binding_slot;
  domain_record *domain;            /* The domain for this message */
  connection_handle *conn_handle;   /* Connection handle used for delivery */
  char *spoolname;                  /* Spool name */
};
```

### 16.1.3. Handling Messages as Arguments

Upon receiving an `abstract_message *`, it can be cast using the following idiom:

```
void func(abstract_message *am) {
    if(am->type == EM_SHORT_MESSAGE) {
        short_message *sm = (short_message *)am;
        ...
    } else if(am->type == EM_EMAIL_MESSAGE) {
        email_message *em = (email_message *)am;
        connection *conn = NULL;
        if(em->conn_handle)
            conn = h_to_c(em->conn_handle);
        ...
    }
}
```

While validation and I/O system hooks are always called with `email_message` structures, the logging functions are called with `abstract_message` structures that often represent shortened messages.

If a short message is received, it can be converted into a full email message (at the cost of restoring it from permanent storage). This can be done by instructing Momentum to reinstate the full form of the email message from the short message without discarding the orignal short message. It is imperative that the orignal short message or email message passed into the function not be freed as the system has references to it.

This can be accomplished as follows:

```
void func(abstract_message *am) {
  email_message *mess;

/* reinstate the message */
  mess = reinstate_message_no_free(am);
  if(!mess) return; /* unrecoverable error spooling message in */

/* extract and use information from mess */

if(am != (abstract_message *)mess) {
    /* mess is a copy, we must free it */
    email_message_free((abstract_message *)mess);
  }
}
```

The `delivered` and `delivered_class` elements tell the state of the message. These can be used to 'fake' successful reception if you want to silently drop the message out of the system at the end of the SMTP transaction. This can be used to implement local delivery modules or to silently 'blackhole' mail inside your module.

Here is a code fragment that will mark a message successfully delivered. We use the delivery type `EC_DT_LOCAL` to note that we handled delivery internally.

```
mess->delivered = EM_SUCCEEDED;
mess->delivered_class = EC_DT_LOCAL;
```

| [Prev](c.sdk.php)  | [Up](c.sdk.php) |  [Next](extending.module.php) |
| Chapter 16. Extending Momentum using C  | [Table of Contents](index.php) |  16.2. The Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)