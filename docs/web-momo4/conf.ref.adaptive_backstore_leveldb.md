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

| adaptive_backstore_leveldb |
| [Prev](config.options.ref.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.adaptive_backstore_riak.php) |

<a name="conf.ref.adaptive_backstore_leveldb"></a>
## Name

adaptive_backstore_leveldb — use LevelDB as the backing store for Adaptive Delivery

## Synopsis

`adaptive_backstore_leveldb { path = "/var/log/ecelerity/adaptive.leveldb" }`

<a name="idp9319008"></a>
## Description

Riak is the default backing store for the adaptive module. In some circumstances, it may not provide the required level of performance. As an alternate backing store, you can use [LevelDB](http://en.wikipedia.org/wiki/LevelDB) on Linux. To use LevelDB, add the following stanza to your `ecelerity.conf` file:

```
adaptive_backstore_leveldb {
  path = "/var/log/ecelerity/adaptive.leveldb"
}
```

`path` identifies the LevelDB database and is the only option in the `adaptive_backstore_leveldb` scope. Default value is `/var/log/ecelerity/adaptive.leveldb`.

### Warning

Please consult with support before reconfiguring Momentum as described here. The LevelDB package can be used only as a replacement backing store for the adaptive module. If you are using Mobile Momentum, Riak continues to be used for message resubmission. *LevelDB is not cluster aware.* 

<a name="idp9325216"></a>
## Scope

`adaptive_backstore_leveldb` is valid in the global scope.

<a name="idp9327392"></a>
## See Also

[Section 71.3, “adaptive – Adaptive Delivery”](modules.adaptive.php "71.3. adaptive – Adaptive Delivery")

| [Prev](config.options.ref.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.adaptive_backstore_riak.php) |
| Chapter 72. Configuration Options Reference  | [Table of Contents](index.php) |  adaptive_backstore_riak |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)