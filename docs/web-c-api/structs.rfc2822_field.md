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

| 68.67. rfc2822_field |
| [Prev](structs.rfc2822_context.php)  | Chapter 68. Structs |  [Next](structs.rsplaynode.php) |

## 68.67. rfc2822_field

The members of this struct are as follows:

```
struct _rfc2822_field_body {
  char *line;
  int line_len;
  /* cleanup logic for this structure is:
   * if (line_should_free) {
   *   if (wsp_pad) {
   *     ec_free(MEMTYPE_MESSAGE_BODY, wsp_pad);
   *   } else {
   *     ec_free(MEMTYPE_MESSAGE_BODY, line);
   *   }
   * }
   * Rather than code this by hand, it is better to
   * use rfc2822_free_header() to destroy a header
   * correctly, and always replace a header with your
   * own freshly made replacement rather than directly
   * modifying a field_body that you didn't allocate.
   */
  int line_should_free;
  char *wsp_pad;
  int wsp_pad_len;
  struct _rfc2822_field_body *next;
};

struct _rfc2822_field {
  char *field;
  int field_len;
  int field_should_free;
  rfc2822_field_body body;
  struct _rfc2822_field *next;
};
```

To use this struct, include the file `rfc2822_parser.h`.

### 68.67.1. See Also

[rfc2822_header_stringwrite_ex](apis.rfc2822_header_stringwrite_ex.php "rfc2822_header_stringwrite_ex") and [rfc2822_header_append_line](apis.rfc2822_header_append_line.php "rfc2822_header_append_line")

| [Prev](structs.rfc2822_context.php)  | [Up](structs.php) |  [Next](structs.rsplaynode.php) |
| 68.66. rfc2822_context  | [Table of Contents](index.php) |  68.68. rsplaynode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)