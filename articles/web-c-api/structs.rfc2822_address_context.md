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

| 68.65. rfc2822_address_context |
| [Prev](structs.rfc2821_ctx.php)  | Chapter 68. Structs |  [Next](structs.rfc2822_context.php) |

## 68.65. rfc2822_address_context

This struct is defined as follows:

```
struct rfc2822_address {
  struct rfc2822_address *next;

  char *complete; /* the entire address */
  int len;

  /* pointers/lengths of various parts of the address */
  struct rfc2822_address_part_string {
    char *s;
    int l;
  }
  localpart,  /* localpart@domain */
  domain,   /* localpart@domain */
  user,     /* user+detail@domain */
  detail,   /* user+detail@domain */
  desc;     /* "John Smith" */

  unsigned is_group_addr:1; /* true if this address was expanded from a group */
};

struct rfc2822_address_context {
  struct rfc2822_address *addr; /* first address */
  int naddr;  /* number of addresses */
  char *freeme;
};
```

To use this struct, include the file `address.h`.

### 68.65.1. See Also

[rfc2822_address_parse](apis.rfc2822_address_parse.php "rfc2822_address_parse")

| [Prev](structs.rfc2821_ctx.php)  | [Up](structs.php) |  [Next](structs.rfc2822_context.php) |
| 68.64. rfc2821_ctx  | [Table of Contents](index.php) |  68.66. rfc2822_context |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)