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

| 68.78. smpp_conn |
| [Prev](structs.skiplist.php)  | Chapter 68. Structs |  [Next](structs.smpp_pdu.php) |

## 68.78. smpp_conn

This struct is defined as follows:

```
struct _smpp_conn {
  message_id id;
  struct smpp_state * state;
  Event * fd_event;
  Event * enquire_link_timer;
  Event * death;
  connection_handle * ec_connh;
  int bind_retries;
  char *error;
  struct timeval create_time;
  char peer_interface_version;
  char outbind_password[SMPP_MAX_PASSWORD_LEN+1];
  char peer_system_id[SMPP_MAX_SYSTEM_ID_LEN+1];
  char domain_name[MAXDOMAINNAME+1];

  /* inbound state */
  unsigned int in_pending_len;
  string * in_pending_buf;
  event_io_state in_io_state;
  ec_hash_table sar_states; /* tbd: note this will not handle incoming 
  segments across connections*/
  ec_hash_table batch_ec_messages;
  unsigned int consecutive_error_count;
  unsigned long mo_conversions;

  /* outbound state */
  unsigned long out_seqnum;
  event_io_state out_io_state;
  ec_hash_table requests_awaiting_response;
  ec_hash_table pending_ec_messages;
  ec_double_list mt_messages_to_send;
  ec_double_list pdus_delayed;
  ec_atomic_t refs;
  unsigned long mt_conversions;
  ec_message *mt_message_in_progress;

  /* time to allow sending again */
  struct timeval throttled_timeout_time; /* set this param when receive SMPP_ESME_RTHROTTLED */ 
};
```

To use this struct, include the file `modules/mobility/smpp.h`.

### 68.78.1. See Also

[Chapter 46, *SMPP Functions*          ](smpp.php "Chapter 46. SMPP Functions") and [Section 68.79, “SMPP_PDU”](structs.smpp_pdu.php "68.79. SMPP_PDU")

| [Prev](structs.skiplist.php)  | [Up](structs.php) |  [Next](structs.smpp_pdu.php) |
| 68.77. Skiplist  | [Table of Contents](index.php) |  68.79. SMPP_PDU |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)