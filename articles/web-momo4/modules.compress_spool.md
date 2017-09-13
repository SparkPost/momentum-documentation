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

| 71.21. compress_spool – Dynamic Spool Compression |
| [Prev](modules.commtouch.php)  | Chapter 71. Modules Reference |  [Next](modules.conntrol.php) |

## 71.21. compress_spool – Dynamic Spool Compression

<a class="indexterm" name="idp20713200"></a>

One of the principle bottlenecks in handling a large amount of inbound mail is writing spool messages to disk on reception and then reading them back from disk again when they need to be delivered. The spool compression module attempts to assist in the IO demands of large messages by compressing them prior to writing them to disk. This module is primarily useful on systems which have IO bottlenecks but CPU to spare.

### Warning

This module will fail to load if you set the configuration option `Use_MMAP` to `true`. For more information about this option, see [use_mmap](conf.ref.use_mmap.php "use_mmap").

### 71.21.1. Configuration

This module is loaded automatically as required and does not need to be explicitly included. Include it if you wish to change the default values.

The following is an example configuration that enables compression of spool entries over 32k in size:

<a name="example.compress_spool.3"></a>

**Example 71.36. compress_spool Configuration**

```
compress_spool {
  compress = "bzip2"
  minimum_size = 32768
  read_only = 1
}
```

In this example, messages greater than or equal to 32768 will be stored using bzip2 compression.

The following are the configuration options defined within this module:

<dl class="variablelist">

<dt>minimum_size</dt>

<dd>

Messages greater than or equal to the minimum size will be stored with compression. Anything under the minimum_size will be spooled directly to disk uncompressed. Default value is `4096`.

</dd>

<dt>read_only</dt>

<dd>

Default value is `0`.

</dd>

<dt>compress</dt>

<dd>

The default compression algorithm is gzip. The gzipio module is loaded automatically as required and does not need to be explicitly included.

bzip2 compression is also available. The "bzip2io {}" stanza is not necessary as it loads on demand when the compress spool module attempts to use the "bzip2" io wrapper.

</dd>

</dl>

### Warning

This module compresses the spool messages in place. If you enable this module, you MUST be certain that the queue is empty before you disable it, or else you risk sending compressed messages without decompressing them.

| [Prev](modules.commtouch.php)  | [Up](modules.php) |  [Next](modules.conntrol.php) |
| 71.20. commtouch_ctasd – Commtouch Spam Protection  | [Table of Contents](index.php) |  71.22. conntrol – Fine-Grained Connection Control |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)