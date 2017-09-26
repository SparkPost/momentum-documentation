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

| Chapter 9. Buffer Functions |
| [Prev](apis.soft_bounce_process.php)  | Part II. C API |  [Next](apis.ec_growbuf_io_cur_chunk.php) |

## Chapter 9. Buffer Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_growbuf_io_cur_chunk](apis.ec_growbuf_io_cur_chunk.php) — Return a pointer to the current growbuf chunk and its length</dt>

<dt>[ec_growbuf_io_next_chunk](apis.ec_growbuf_io_next_chunk.php) — Return a pointer to the next growbuf chunk and its length</dt>

<dt>[ec_growbuf_io_open](apis.ec_growbuf_io_open.php) — Allocate and initialize an io_object for a new growbuf-backed string</dt>

<dt>[minimal_tryread_construct_free](apis.minimal_tryread_construct_free.php) — Release the resources of a `minimal_tryread_construct`</dt>

<dt>[tryread_until](apis.tryread_until.php) — Read data in `growbuf` sized chunks</dt>

<dt>[trywrite](apis.trywrite.php) — Write a string of `buflen` bytes for an event</dt>

<dt>[trywritef](apis.trywritef.php) — Write formatted data for an event</dt>

</dl>

| [Prev](apis.soft_bounce_process.php)  | [Up](pt.apis.php) |  [Next](apis.ec_growbuf_io_cur_chunk.php) |
| soft_bounce_process  | [Table of Contents](index.php) |  ec_growbuf_io_cur_chunk |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)