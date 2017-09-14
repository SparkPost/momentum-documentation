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

| 14.16. compress_spool – Dynamic Spool Compression |
| [Prev](modules.commtouch.php)  | Chapter 14. Modules Reference |  [Next](modules.conntrol.php) |

## 14.16. compress_spool – Dynamic Spool Compression

<a class="indexterm" name="idp11064624"></a>

One of the principle bottlenecks in handling a large amount of inbound mail is writing spool messages to disk on reception, and then reading them back from disk again when they need to be delivered. The spool compression module attempts to assist in the IO demands of large messages by compressing them prior to writing them to disk. This module is primarily useful on systems which have IO bottlenecks but CPU to spare.

### Warning

This module will fail to load if you set the configuration option `Use_MMAP` to `true`. For more information about this option see [Use_MMAP](conf.ref.use_mmap.php "Use_MMAP").

### 14.16.1. Basic Configuration

To enable compression of spool entries over 32k in size, you can use the following stanza:

<a name="example.compress_spool"></a>

**Example 14.19. compress_spool module**

```
IO_System io/compress_spool "compress_spool1" {
  minimum_size = 32768
  read_only = 1
}
```

Messages greater than or equal to the minimum size will be stored with compression. The default value for `minimum_size` is `4096`. Anything under the minimum_size will be spooled directly to disk uncompressed. You can also set a `read_only` parameter. Its default value is `0`.

### Warning

This module compresses the spool messages in place. If you enable this module you MUST be certain that the queue is empty before you disable it, or else you risk sending compressed messages without decompressing them.

### 14.16.2. Compression Algorithms

The default compression algorithm is gzip. The gzipio module needs to be loaded, to enable gzip compression:

<a name="example.gzipio"></a>

**Example 14.20. gzipio compression**

`Module generic/gzip gzipio { }`

bzip2 compression is also available. The compress_spool module must have the algorithm set with the `compress` option, and the bzip2io module needs to be loaded:

<a name="example.bzipio"></a>

**Example 14.21. bzip2io compression**

```
Module generic/bzip2 bzip2io { }

IO_System io/compress_spool compress_spool {
  compress = "bzip2"
  minimum_size = 32768
}
```

### 14.16.3. compress_spool Management Using Console Commands

The compress_spool module can be controlled through the `ec_console`; the following commands are available:

**14.16.3.1. compress_spool set read_only true**

Use this command and new messages will to be stored without compression.

**14.16.3.2. compress_spool set read_only false**

Use this command and new messages greater than the minimum size will be stored with compression.

**14.16.3.3. compress_spool set minimum_size**

Set a new minimum size.

| [Prev](modules.commtouch.php)  | [Up](modules.php) |  [Next](modules.conntrol.php) |
| 14.15. commtouch_ctasd – Commtouch_ctasd Module  | [Table of Contents](index.php) |  14.17. conntrol – Fine-Grained Connection Control |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)