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

| 68.86. validate_context |
| [Prev](structs.string.php)  | Chapter 68. Structs |  [Next](custom_channels.php) |

## 68.86. validate_context

This struct is defined as follows:

```
struct _validate_context {
  Event *session;       /* The event that is driving the session */
  ECDict env[2];        /* The environment... use validate_{get,set} */
  ec_bag *bag;          /* pointers to arbitrary bits */
  void *module_data;    /* This module data, see validate_local_alloc */

  int code;             /* The SMTP response code: 250, 551, 452, etc. */
  char *note;           /* The response string, if custom */
  struct timeval tcost; /* The cost (in time) the sender must pay */

  /* internal state, do not touch */
  ec_config_header *transaction;
  ec_ptr_array *modules;
  void *ec_internal_visses;
  unsigned char *calls;
  int last_module;

  unsigned last_state:8;  /* one of the VALIDATE_ states */
  unsigned disconnect:1;  /* 1 or 0, meaning to disconnect, respectively */
  unsigned deschedule:1;  /* 1 or 0, to deschedule session on not, respectively.
                           This can only be used with esmtp.  If used with
                           ecstream it will cause an immediate shutdown */
  unsigned old_phase:1;  /* Used to track rentry and new phases, do not touch */
  unsigned needs_auth_results:1; /* Used to conditionally add Auth-Results: */
  unsigned body_has_changed:1; /* set to 1 if the message body has changed
                           This only applies to validate_data_spool_each_rcpt */
  unsigned transparency:1; /* Skip message modifying validation */
}
```

To use this struct, include the file `validate_module.h`.

### 68.86.1. See Also

[Chapter 18, *Dictionary Functions*](dict.php "Chapter 18. Dictionary Functions") 

| [Prev](structs.string.php)  | [Up](structs.php) |  [Next](custom_channels.php) |
| 68.85. string  | [Table of Contents](index.php) |  Appendix A. Custom Delivery Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)