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

| 68.64. rfc2821_ctx |
| [Prev](structs.netlistener_def.php)  | Chapter 68. Structs |  [Next](structs.rfc2822_address_context.php) |

## 68.64. rfc2821_ctx

The members of this struct are as follows:

```
struct _rfc2821_ctx {
  struct _rfc2821_ctx_inputs {
    unsigned full_validation:1;
    unsigned capture_params:1;
    unsigned normalize_domain:1;
    /* if non-zero, localpart is to hold the user and detail the detail
     * for an address like user+detail@domain */
    unsigned populate_detail:1;
    unsigned allow_missing_domain:1;
    unsigned _spare:27;
  } inputs;
  char localpart[MAXDOMAINNAME];
  char domain[MAXDOMAINNAME];
  char detail[MAXDOMAINNAME];
  int error;
  ECDict params;
};

typedef struct _rfc2821_ctx rfc2821_ctx;
```

To use this struct, include the file `misc/rfc2821addr.h`.

### 68.64.1. See Also

[rfc2821_address_destroy](apis.rfc2821_address_destroy.php "rfc2821_address_destroy"), [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table")

| [Prev](structs.netlistener_def.php)  | [Up](structs.php) |  [Next](structs.rfc2822_address_context.php) |
| 68.63. netlistener_def  | [Table of Contents](index.php) |  68.65. rfc2822_address_context |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)