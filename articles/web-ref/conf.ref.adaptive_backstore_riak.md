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

| adaptive_backstore_riak |
| [Prev](conf.ref.adaptive_backstore_leveldb.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.adaptive_enabled.php) |

<a name="conf.ref.adaptive_backstore_riak"></a>
## Name

adaptive_backstore_riak — set characteristics of the Riak backing store

<a name="idp7362112"></a>
## Description

**Configuration Change. ** This feature is available as of version 3.6.

Riak is the default backing store for the adaptive module. Use the `adaptive_backstore_riak` scope to set the timeout and the connect timeout:

```
adaptive_backstore_riak {
  timeout = 5
  connect_timeout = 5
}
```

`timeout` defines the amount of time in seconds that the adaptive module will wait for a response from the adaptive backing store. The default setting is `5` seconds. `connect_timeout` defines the amount of time in seconds that the adaptive module will wait for a connection to the backing store server. This occurs in the connection phase only and also defaults to `5` seconds.

### Note

The options in this scope replace the `backing_store_connect_timeout` and the `backing_store_timeout` options defined in the adaptive module scope.

<a name="idp7370368"></a>
## Scope

`adaptive_backstore_riak` is valid in the global scope.

<a name="idp7372416"></a>
## See Also

[Section 14.2, “adaptive – Adaptive Delivery”](modules.adaptive.php "14.2. adaptive – Adaptive Delivery"), [adaptive_backstore_leveldb](conf.ref.adaptive_backstore_leveldb.php "adaptive_backstore_leveldb") and [Section 4.4.6.1, “Using an Adaptive Delivery Backing Store Other than Riak”](operations.riak.php#operations.riak.alternate "4.4.6.1. Using an Adaptive Delivery Backing Store Other than Riak")

| [Prev](conf.ref.adaptive_backstore_leveldb.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.adaptive_enabled.php) |
| adaptive_backstore_leveldb  | [Table of Contents](index.php) |  adaptive_enabled |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)