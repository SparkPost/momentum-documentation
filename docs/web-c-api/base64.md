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

| Chapter 6. Base64 Encode/Decode and Related Functions |
| [Prev](apis.ec_bag_remove.php)  | Part II. C API |  [Next](apis.ec_base64_decode.php) |

## Chapter 6. Base64 Encode/Decode and Related Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_base64_decode](apis.ec_base64_decode.php) — Perform Base64 decoding of a string</dt>

<dt>[ec_base64_decode_space](apis.ec_base64_decode_space.php) — This function returns the number of bytes required to decode a Base64 encoded string</dt>

<dt>[ec_base64_encode](apis.ec_base64_encode.php) — Perform Base64 encoding of a string</dt>

<dt>[ec_base64_encode_space](apis.ec_base64_encode_space.php) — Returns the number of bytes required to Base64 encode a string</dt>

<dt>[ec_base64_encode_string_to_string](apis.ec_base64_encode_string_to_string.php) — Apply base64 encoding to an ec_string and store the result to another ec_string where the previous content will be replaced</dt>

<dt>[ec_base64_encode_to_string](apis.ec_base64_encode_to_string.php) — Apply base64 encoding to a string and store the result to an ec_string where the previous content will be replaced</dt>

<dt>[ec_convert_buffer](apis.ec_convert_buffer.php) — Convert a fixed length buffer from one encoding to another</dt>

<dt>[ec_convert_buffer_to_string](apis.ec_convert_buffer_to_string.php) — Convert a buffer from one encoding to another</dt>

<dt>[ec_convert_io](apis.ec_convert_io.php) — Convert an io stream from one encoding to another</dt>

<dt>[ec_convert_register](apis.ec_convert_register.php) — Register a converter implementation</dt>

<dt>[ec_convert_string](apis.ec_convert_string.php) — Convert a string from one encoding to another</dt>

<dt>[ec_qp_encode](apis.ec_qp_encode.php) — Quoted-printable encode a string</dt>

<dt>[ec_qp_encode_to_string](apis.ec_qp_encode_to_string.php) — Apply quoted printable encoding to a string and append the output to an ec_string</dt>

</dl>

| [Prev](apis.ec_bag_remove.php)  | [Up](pt.apis.php) |  [Next](apis.ec_base64_decode.php) |
| ec_bag_remove  | [Table of Contents](index.php) |  ec_base64_decode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)