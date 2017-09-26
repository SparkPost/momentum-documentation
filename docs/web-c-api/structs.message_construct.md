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

| 68.59. message_construct |
| [Prev](structs.mail_queue.php)  | Chapter 68. Structs |  [Next](structs.message_id.php) |

## 68.59. message_construct

This struct is defined as follows:

```
/*
   For SMTP sessions, the accept_construct closure is a pointer
   to the message_construct for the session.

   accept_construct *ac;
   message_construct *info =
     (message_construct *)ac->accept_construct_closure.vptr;
*/

typedef int (*ESMTPExtensionSetup)(char *arg, message_construct *mc,
  void *closure);
typedef int (*ESMTPExtensionFunc)(char *arg, Event *e, message_construct *mc,
                                  void *closure);
typedef struct _ec_esmtp_extension_call {
  ESMTPExtensionSetup setup;
  ESMTPExtensionFunc func;
  void *closure;
} esmtp_extension_call;

struct _message_construct
{
  /*  This must be first, as we pass the address of these objects to
     functions that expect minimal_tryread_constructs */
  minimal_tryread_construct subcon;
#define mgb_buffer subcon.gb_buffer
#define mgb_donebuffer subcon.gb_donebuffer
#define mgb_donesize subcon.gb_donesize
#define mgb_padding subcon.gb_padding
#define mgb_match_hook subcon.match_hook
#define mgb_match_closure subcon.match_closure
#define mgb_finalize_hook subcon.finalize_hook
#define mgb_finalize_closure subcon.finalize_closure
  accept_construct *ac;
  char *write_buffer;
  int write_goal;
  int bytes_written;
  struct timeval last_state_time;
  int state;                    /* One of the above */
  esmtp_extension_call *extension_call;
  ECDict smtp_capabilities;
  int relayable:1;
  int can_auth:1;
  int internal:1;
  const char *banner_hostname;
  const char *received_hostname;
  const char *static_banner;
  int idle_timeout;
  int connection_message_limit;
  int connection_message_count;
  int connection_rcpt_limit;
  int connection_rcpt_count;
  int message_rcpt_limit;
  int message_rcpt_count;
  int allow_trailing_whitespace_in_commands;
  int mcmt_reception;
  eclist_node *extra_recipients;
  ec_message *message;
  sp_async_message *sam;
  string vstr;

  /* continuance stash */
  validate_context ctx;
  int transient_state;
  int status;
  int retstatus;
  char *note;
  struct ec_auth_info auth_info;

  /* Flags */
  unsigned session_permfail:1;
  unsigned should_enqueue:1;
  unsigned tls_inject:2;
  unsigned unused:28;

  /* peer address with no port for convenience in resolving Peer scope
   * values */
  char peer_address[INET6_ADDRSTRLEN];
  size_t max_message_size;
};
```

To use this struct, include the file `esmtp_factory.h`.

### 68.59.1. See Also

[esmtp_destroy_message_construct](apis.esmtp_destroy_message_construct.php "esmtp_destroy_message_construct"), [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table") and [Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message")

| [Prev](structs.mail_queue.php)  | [Up](structs.php) |  [Next](structs.message_id.php) |
| 68.58. mail_queue  | [Table of Contents](index.php) |  68.60. message_id |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)