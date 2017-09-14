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

| Chapter 40. RFC Functions |
| [Prev](apis.ec_ptr_array_unshift.php)  | Part II. C API |  [Next](apis.ec_generate_rfc3464_delivery_status.php) |

## Chapter 40. RFC Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_generate_rfc3464_delivery_status](apis.ec_generate_rfc3464_delivery_status.php) — renders an RFC3464 report block into the provided string</dt>

<dt>[ec_generate_rfc3464_delivery_status2](apis.ec_generate_rfc3464_delivery_status2.php) — renders an RFC3464 report block into the provided string</dt>

<dt>[ec_generate_rfc3464_message](apis.ec_generate_rfc3464_message.php) — creates an RFC 3464 MDN as an ec_message</dt>

<dt>[ec_generate_rfc3464_notification](apis.ec_generate_rfc3464_notification.php) — creates an RFC 3464 MDN and enqueues</dt>

<dt>[ec_parse_rfc3464_delivery_status](apis.ec_parse_rfc3464_delivery_status.php) — Parses an rfc3464 dsn into its attributes, recorded into a ECDict</dt>

<dt>[ec_rfc822_date](apis.ec_rfc822_date.php) — Renders a timeval into a buffer per RFC822</dt>

<dt>[rfc2047_utf8_decode](apis.rfc2047_utf8_decode.php) — Decode rfc2047 encoding, returning a string that is utf-8 encoded</dt>

<dt>[rfc2047_utf8_decode_to_string](apis.rfc2047_utf8_decode_to_string.php) — decodes MIME header encoding and stores the decoded result to a string</dt>

<dt>[rfc2047_utf8_encode_to_string](apis.rfc2047_utf8_encode_to_string.php) — Applies MIME header encoding and stores the encoded result to a string</dt>

<dt>[rfc2821_address_destroy](apis.rfc2821_address_destroy.php) — Destroy an rfc2821 address</dt>

<dt>[rfc2821_address_parse](apis.rfc2821_address_parse.php) — Parse an rfc2821 address</dt>

<dt>[rfc2822_address_destroy](apis.rfc2822_address_destroy.php) — Destroy an rfc2822 address</dt>

<dt>[rfc2822_address_parse](apis.rfc2822_address_parse.php) — Parse an rfc2822 address</dt>

<dt>[rfc2822_clone_headers](apis.rfc2822_clone_headers.php) — Clones the headers portion of an rfc2822 context</dt>

<dt>[rfc2822_find_first_header](apis.rfc2822_find_first_header.php) — Return the first header with the specified name</dt>

<dt>[rfc2822_find_next_header](apis.rfc2822_find_next_header.php) — Return the next header</dt>

<dt>[rfc2822_free_context](apis.rfc2822_free_context.php) — Frees a cloned set of headers</dt>

<dt>[rfc2822_free_header](apis.rfc2822_free_header.php) — Free the specified header</dt>

<dt>[rfc2822_header_append_line](apis.rfc2822_header_append_line.php) — Append a line to a header</dt>

<dt>[rfc2822_header_stringwrite](apis.rfc2822_header_stringwrite.php) — Renders the rfc2822 header to a string as it will be sent over the network</dt>

<dt>[rfc2822_header_stringwrite_ex](apis.rfc2822_header_stringwrite_ex.php) — Renders the rfc2822 header to a string, with formatting options</dt>

<dt>[rfc2822_new_header](apis.rfc2822_new_header.php) — Create a new header</dt>

<dt>[rfc2822_new_headerf](apis.rfc2822_new_headerf.php) — Create a new header using a format specifier</dt>

<dt>[rfc2822_parse_rfc2045_parameters_str](apis.rfc2822_parse_rfc2045_parameters_str.php) — Parse out the RFC2045 parameters of a header value string into a dictionary</dt>

<dt>[rfc2822_prepend_header](apis.rfc2822_prepend_headers.php) — Prepend headers</dt>

<dt>[rfc2822_remove_header](apis.rfc2822_remove_header.php) — Create a new header</dt>

</dl>

| [Prev](apis.ec_ptr_array_unshift.php)  | [Up](pt.apis.php) |  [Next](apis.ec_generate_rfc3464_delivery_status.php) |
| ec_ptr_array_unshift  | [Table of Contents](index.php) |  ec_generate_rfc3464_delivery_status |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)