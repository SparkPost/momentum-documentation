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

| 68.1. abstract_message |
| [Prev](structs.php)  | Chapter 68. Structs |  [Next](structs.accept_construct.php) |

## 68.1. abstract_message

This struct is defined as follows:

```
struct _abstract_message
{
  message_id id;                    /* Unique identifier for this message */
  u_int8_t type:4;                  /* EM_SHORT_MESSAGE, EM_EMAIL_MESSAGE */
  u_int8_t version:4;
  /* This stuff changes on ever delivery attempt */
  u_int32_t num_retries;            /* The number of delivery retries */
  struct timeval creation_time;     /* Time when the message entered ec */
  struct timeval next_attempt;      /* Transient... time of next attempt */
  struct timeval final_time;        /* Time of delivery */
  u_int16_t code_len;               /* number of bytes in the "code" */
  u_int8_t swapped:3;               /* SPOOL_MEM, SPOOL_SWAP, SPOOL_DISK */
  u_int8_t body_type:5;             /* BT_MMAP */
  u_int8_t stage:4;
  u_int8_t reserved:3;
  u_int8_t priority:1;
  u_int8_t delivered:2;             /* EM_TRYING, EM_SUCCEEDED, EM_FAILED */
  u_int8_t delivered_class:6;       /* see delivery_types.h */
};
```

To use this struct, include the file `message_compat.h`.

### 68.1.1. See Also

[get_msg_expiration_params](hooks.core.get_msg_expiration_params.php "get_msg_expiration_params")

| [Prev](structs.php)  | [Up](structs.php) |  [Next](structs.accept_construct.php) |
| Chapter 68. Structs  | [Table of Contents](index.php) |  68.2. accept_construct |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)