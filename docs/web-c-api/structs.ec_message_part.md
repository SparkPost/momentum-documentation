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

| 68.39. ec_message_part |
| [Prev](structs.ec_message.php)  | Chapter 68. Structs |  [Next](structs.ec_ptr_array.php) |

## 68.39. ec_message_part

The members of this struct are as follows:

```
struct _ec_message_hdrs {
  ec_atomic_t ref;
  rfc2822_context rfc2822ctx;
  unsigned rfc2822ctx_valid:1;
};

struct _ec_message_part {
  ec_atomic_t ref;
  ec_message_hdrs *headers;

  ec_mime_component_type type;
  ec_mime_encoding_type  encoding;
  /**
   * If this part contains other parts, boundary and boundary_len
   * indicate the boundary text used to separate those contained
   * parts.
   * This part owns the boundary string, and it must have been allocated
   * as MEMTYPE_MESSAGE_BODY.
   */
  char *boundary;
  int boundary_len;
  int preamble_len;

  /* we own refs on NEXT and PARTS.
   * THREAD and PARENT are weak references; we don't
   * own those parts so we don't own refs */
  ec_message_part *next, *parts, *thread, *parent;

  io_object *body;

/*

Mime-Version: 1.0
Content-Type: multipart/mixed; boundary=foo
Subject: foo

--foo
Content-Type: text/plain; name=foobar.bat

echo foobar

--foo--

.

The above message is represented by a part containing the top level
information:

top:
 headers_start = 0
 preamble_start = blank line before the first --foo
 body_start = first --foo
 body_end = the blank line after --foo--
 epilogue_end = .CRLF

it contains a single part:
 headers start = Content-Type
 preamble_start = body_start = echo foobar
 body_end = epilogue_end = blank line before --foo--

this allows re-assembly of the message using alternate boundary markers,
if required, and to easily get at just the content pieces that are required.

*/

  /** offset from start of body stream to the headers for this part. */
  off_t headers_start;
  /** offset from start of body stream to the preamble for this part. */
  off_t preamble_start;
  /** offset from start of body stream to the actual body content for this part */
  off_t body_start;
  /** offset from start of body stream to the end of the actual body content for this part */
  off_t body_end;
  /** offset from start of body stream to the end of the epilogue for this part */
  off_t epilogue_end;

  /* we did a cheap parse; will need to do a full parse if someone
   * wants to walk each part */
  unsigned did_cheap_parse:1;

  int touched;
};
```

To use this struct, include the file `ec_message.h`.

### 68.39.1. See Also

[Section 68.38, “ec_message”](structs.ec_message.php "68.38. ec_message") and [Chapter 34, *Message Functions*](ec_message.php "Chapter 34. Message Functions") .

| [Prev](structs.ec_message.php)  | [Up](structs.php) |  [Next](structs.ec_ptr_array.php) |
| 68.38. ec_message  | [Table of Contents](index.php) |  68.40. ec_ptr_array |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)