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

| 68.73. SENG (sieve_engine) |
| [Prev](structs.scpt_thread.php)  | Chapter 68. Structs |  [Next](structs.shared_module_infrastructure_8.php) |

## 68.73. SENG (sieve_engine)

This struct is defined as follows:

```
struct sieve_engine {
  SIEVE *sieve;       /* which script */
  ec_message *_vmsg;
  validate_context *ctx;
  accept_construct *ac;
  char *phase;
  int plen;
  struct {
    rfc2822_context rfc2822ctx;
    ec_mime_context mimectx;
    int mime_error;
    unsigned valid_rfc2822:1;
    unsigned valid_mimectx:1;
  } legacy;

  /* misc bits for actions to draw upon at runtime */
  ec_bag *bag;

  int rc; /* return code */
  int pc; /* program counter */

  Event *session;
  int dns_complete;

  SIEVEARGS *rv;        /* return value, for assignment */
  ec_hash_table *variables;   /* maps variable names to SIEVEVARs */

  unsigned should_free_ac:1;
  unsigned can_go_async:1;
  /* if true, then we last use the message in a legacy context */
  unsigned legacy_msg:1;
  unsigned orig_was_legacy:1;
  unsigned _spare:4;

  SIEVEARGS *args;  /* argument context for next extension action call */
  SIEVEARGS *arg_stringlist; /* stringlist being built for insertion into args */

  void *module_data; /* for extension actions to use to stash data when returning SIV_AGAIN */

  /* when we reach the end of the current program, pop the opstack */
  struct sieve_op_stack *opstack;

  int error_mode;
  int can;
};
```

The `sieve_engine` struct is typedef'ed in the following way: `typedef struct sieve_engine SENG;`.

To use this struct, include the file `sieve-parser-internals`.

### 68.73.1. See Also

[Chapter 44, *Sieve Functions*](sieve.php "Chapter 44. Sieve Functions") 

| [Prev](structs.scpt_thread.php)  | [Up](structs.php) |  [Next](structs.shared_module_infrastructure_8.php) |
| 68.72. scpt_thread  | [Table of Contents](index.php) |  68.74. shared_module_infrastructure_8 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)